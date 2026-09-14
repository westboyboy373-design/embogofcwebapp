@php
    // Data is provided directly from the route closure.
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Shop & Kits - Embogo FC Kabale</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clubPurple: {
                            DEFAULT: '#581c87',
                            dark: '#3b0764',
                            light: '#7e22ce',
                        },
                        clubBlue: {
                            DEFAULT: '#2563eb',
                            dark: '#1e40af',
                            light: '#3b82f6',
                        },
                        clubGold: {
                            DEFAULT: '#b45309',
                            light: '#f59e0b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased min-h-screen flex flex-col justify-between">

    <!-- HEADER / NAVBAR -->
   
     @include('layouts.header')

    <!-- MAIN SHOP CONTENT -->
    <main class="max-w-7xl mx-auto px-4 py-12 flex-1 w-full space-y-8">
        
        <!-- Hero Header Banner -->
        <section class="bg-gradient-to-tr from-clubPurple-dark via-clubPurple to-clubBlue rounded-3xl overflow-hidden shadow-xl px-6 md:px-12 py-12 relative border border-purple-500/20 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-4 max-w-2xl z-10">
                <span class="text-xs font-black tracking-widest uppercase text-gray-950 bg-amber-400 px-3.5 py-1 rounded-full shadow-md inline-block">
                    <i class="fa-solid fa-shirt mr-1"></i> Club Merchandise
                </span>
                <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight drop-shadow-md">
                    Official Match &amp; Fan Kits
                </h1>
                <p class="text-purple-100 text-sm md:text-base font-medium">
                    Get your official Embogo FC jerseys, training wear, and supporter gear directly from the club store. Back The Buffaloes in pride and style!
                </p>
            </div>
            <div class="w-20 h-20 md:w-28 md:h-28 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 flex items-center justify-center text-amber-400 text-4xl shadow-2xl shrink-0">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </section>

        <!-- Kits Grid Section -->
        <section class="space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-black tracking-tight text-clubPurple flex items-center gap-2">
                    <span class="w-3 h-8 bg-amber-500 rounded-full"></span> Available Inventory
                </h2>
                <span class="text-xs font-bold text-gray-500 bg-gray-200 px-3 py-1 rounded-full">
                    {{ count($kits) }} Items Available
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($kits as $kit)
                    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col justify-between p-5 hover:shadow-xl transition-all duration-300 group">
                        <div>
                            <!-- Kit Image Container -->
                            <div class="w-full h-56 bg-gray-950 rounded-xl border border-gray-100 mb-4 overflow-hidden flex items-center justify-center relative shadow-inner">
                                @if(!empty($kit->image_reference))
                                    <img src="{{ asset($kit->image_reference) }}" alt="{{ $kit->kit_name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="text-gray-500 text-xs font-semibold uppercase tracking-wider">Embogo FC Kit</div>
                                @endif
                                <span class="absolute top-3 left-3 bg-gray-950/80 backdrop-blur border border-amber-400/40 text-amber-400 text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded-lg shadow">
                                    {{ $kit->classification }}
                                </span>
                            </div>

                            <h3 class="text-lg font-black text-gray-900 group-hover:text-clubPurple transition-colors">{{ $kit->kit_name }}</h3>
                            <p class="text-xs text-gray-500 mt-1">Authentic club merchandise designed for high performance and daily fan comfort.</p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-gray-400 font-extrabold">Price</p>
                                <p class="text-base font-black text-clubPurple">UGX {{ number_format($kit->price_ugx) }}</p>
                            </div>
                            
                            <!-- Trigger Order Modal Button -->
                            <button onclick="openOrderModal('{{ addslashes($kit->kit_name) }}', '{{ addslashes($kit->classification) }}', '{{ number_format($kit->price_ugx) }}')" 
                               class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider px-4 py-2.5 rounded-xl transition-all shadow-md hover:shadow-lg cursor-pointer">
                                <i class="fa-brands fa-whatsapp text-sm"></i> Order
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 bg-white border border-dashed border-gray-300 rounded-3xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-50 text-clubPurple rounded-full flex items-center justify-center mx-auto mb-3 text-lg font-bold">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <p class="text-sm font-bold text-gray-700">No kits are currently listed in the inventory.</p>
                        <p class="text-xs text-gray-400 mt-1">Please check back soon or contact the club administration.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </main>

    <!-- ORDER MODAL POPUP -->
    <div id="orderModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-gray-100 relative space-y-6">
            <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                <div>
                    <h3 class="text-lg font-black text-gray-900">Complete Your Order</h3>
                    <p class="text-xs text-gray-500" id="modalKitSubtitle">Kit Name & Price</p>
                </div>
                <button onclick="closeOrderModal()" class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <form id="whatsappOrderForm" onsubmit="sendWhatsAppOrder(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Your Full Name</label>
                    <input type="text" id="customerName" required placeholder="e.g. Rwomushana Macarthy" 
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-clubPurple text-gray-900 font-medium">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Select Size</label>
                    <select id="customerSize" required 
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-clubPurple text-gray-900 font-medium">
                        <option value="" disabled selected>-- Choose your size --</option>
                        <option value="Very Small">Very Small</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Big">Big</option>
                        <option value="Very Big">Very Big</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm py-3.5 rounded-xl transition shadow-lg flex items-center justify-center gap-2 cursor-pointer uppercase tracking-wider">
                    <i class="fa-brands fa-whatsapp text-lg"></i> Send Order to WhatsApp
                </button>
            </form>
        </div>
    </div>

    <!-- JavaScript Modal and WhatsApp Handler -->
    <script>
        let selectedKitData = {};

        function openOrderModal(kitName, classification, price) {
            selectedKitData = { kitName, classification, price };
            document.getElementById('modalKitSubtitle').innerText = `${kitName} (${classification}) - UGX ${price}`;
            document.getElementById('customerName').value = '';
            document.getElementById('customerSize').selectedIndex = 0;
            document.getElementById('orderModal').classList.remove('hidden');
            document.getElementById('orderModal').classList.add('flex');
        }

        function closeOrderModal() {
            document.getElementById('orderModal').classList.remove('flex');
            document.getElementById('orderModal').classList.add('hidden');
        }

        function sendWhatsAppOrder(event) {
            event.preventDefault();
            
            let name = document.getElementById('customerName').value.trim();
            let size = document.getElementById('customerSize').value;
            let phoneNumber = "256761448094";

            let message = `Hello Embogo FC, I would like to place an order.\n\n` +
                          `👤 *Customer Name:* ${name}\n` +
                          `👕 *Kit:* ${selectedKitData.kitName} (${selectedKitData.classification})\n` +
                          `📏 *Size:* ${size}\n` +
                          `💰 *Price:* UGX ${selectedKitData.price}`;

            let whatsappURL = `https://wa.me/${phoneNumber}?text=` + encodeURIComponent(message);
            window.open(whatsappURL, '_blank');
            closeOrderModal();
        }
    </script>

 @include('layouts.footer')
 

</body>
</html>