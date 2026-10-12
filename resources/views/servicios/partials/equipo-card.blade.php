<article class="group flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
    <!-- Image Wrapper -->
    <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 p-6 flex items-center justify-center relative overflow-hidden">
        <img src="{{ $product['image'] }}"
             alt="{{ $product['name'] }}"
             class="max-h-full max-w-full object-contain mix-blend-multiply filter contrast-105"
             loading="lazy">

        <!-- Status Badge -->
        <div class="absolute top-3 left-3">
            <span class="inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[10px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                {{ $product['badge'] ?? 'Stock Disponible' }}
            </span>
        </div>

        @if(isset($product['note']))
        <!-- Illustrative Image Note -->
        <div class="absolute bottom-0 left-0 w-full bg-black/60 backdrop-blur-sm px-3 py-1.5">
            <span class="text-[10px] font-semibold text-white">{{ $product['note'] }}</span>
        </div>
        @endif
    </div>

    <!-- Card Content -->
    <div class="p-6 flex-1 flex flex-col">
        <div class="mb-4">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">{{ $product['category'] }}</span>
            <h2 class="text-lg font-bold text-gray-900 mt-2 leading-snug min-h-[3.5rem]">
                {{ $product['name'] }}
            </h2>
        </div>

        @if(isset($product['specs']))
        <div class="mb-6 flex-1 border-t border-gray-50 pt-4 space-y-4">
            @foreach($product['specs'] as $specTitle => $specItems)
            <div>
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">{{ $specTitle }}</h3>
                <ul class="space-y-2">
                    @foreach($specItems as $spec)
                    <li class="text-xs text-gray-500 flex items-start leading-relaxed">
                        <span class="mr-2 text-blue-500 font-bold">·</span>
                        {{ $spec }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        @else
        <ul class="space-y-2 mb-6 flex-1 border-t border-gray-50 pt-4">
            @foreach($product['features'] as $feature)
            <li class="text-xs text-gray-500 flex items-start leading-relaxed">
                <span class="mr-2 text-blue-500 font-bold">·</span>
                {{ $feature }}
            </li>
            @endforeach
        </ul>
        @endif

        <!-- Action Area -->
        <div class="mt-auto pt-4">
            <div class="flex items-baseline justify-between mb-4">
                <span class="text-xs text-gray-400 font-medium">Precio de Venta</span>
                <span class="text-sm font-bold text-gray-900">Consultar</span>
            </div>

            <a href="https://wa.me/51906119928?text=Hola,%20quisiera%20cotizar%20el%20equipo:%20{{ urlencode($product['name']) }}"
               target="_blank"
               class="w-full flex items-center justify-center bg-gray-900 text-white text-xs font-bold uppercase tracking-widest py-4 px-4 hover:bg-blue-600 transition-colors duration-200">
                Solicitar Cotización
            </a>
        </div>
    </div>
</article>
