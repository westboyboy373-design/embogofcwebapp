# Step 1: Build the Vite / Tailwind assets
FROM node:22 AS asset-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Step 2: Set up the PHP environment
FROM php:8.3-apache

# Install system dependencies & PHP extensions needed for Laravel MySQL
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory and copy project files
WORKDIR /var/webapps
COPY . .

# Copy compiled frontend assets over from the builder step
COPY --from=asset-builder /app/public/build ./public/build

# Run production composer install
RUN composer install --no-dev --optimize-autoloader

# Set up Apache virtualhost to serve Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/webapps/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Enable Apache rewriting modules for routing
RUN a2enmod rewrite

# Give correct folder permissions to web server
RUN chown -R www-data:www-data /var/webapps/storage /var/webapps/bootstrap/cache

EXPOSE 80
