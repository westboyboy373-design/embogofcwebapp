<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('fixture_photos')) {
            Schema::create('fixture_photos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('fixture_id');
                $table->string('file_path');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('fixture_photos');
    }
};