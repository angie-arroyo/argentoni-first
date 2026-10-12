@extends('layouts.app')

@section('title', $service['title'])
@section('meta_description', $service['meta_description'])
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<main class="pt-24 pb-16 bg-transparent relative z-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
            
            <!-- Main Content -->
            <div class="lg:col-span-8">
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    {{ $service['h1'] }}
                </h1>

                <!-- Service Image -->
                <div class="rounded-xl overflow-hidden shadow-lg mb-10 aspect-w-16 aspect-h-9 relative">
                    <img src="{{ $service['image'] }}" alt="{{ $service['image_alt'] }}" class="w-full h-full object-cover" loading="lazy">
                </div>

                <!-- Description -->
                <div class="prose prose-lg prose-blue text-gray-600 mb-12 max-w-none text-justify">
                    {!! $service['description'] !!}
                </div>

                <!-- Features Section -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-12 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-blue-600 mr-3 rounded-full"></span>
                        Características Técnicas y Operativas
                    </h2>
                    <ul class="grid md:grid-cols-2 gap-4">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Benefits Section -->
                <div class="mb-16">
                    <h2 class="text-2xl font-bold text-gray-900 mb-10 text-center">Beneficios Clave</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($service['benefits'] as $index => $benefit)
                        @php
                            $parts = explode(':', $benefit, 2);
                            $title = $parts[0];
                            $desc = isset($parts[1]) ? $parts[1] : '';
                        @endphp
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-5">
                            <div class="flex-shrink-0 w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 border border-blue-100">
                                <span class="font-bold text-xl">{{ $index + 1 }}</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">{{ $title }}</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4 mt-12 lg:mt-0 space-y-8">
                
                <!-- CTA Box -->
                <div class="bg-blue-900 rounded-2xl p-8 text-white shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-blue-800 rounded-full opacity-50 blur-xl"></div>
                    <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-32 h-32 bg-blue-600 rounded-full opacity-30 blur-xl"></div>
                    
                    <h3 class="text-2xl font-bold mb-4 relative z-10">¿Listo para iniciar su proyecto?</h3>
                    <p class="text-blue-100 mb-8 relative z-10">Solicite una cotización personalizada hoy mismo y lleve su proyecto al siguiente nivel con Argentoni.</p>
                    
                    <a href="https://wa.me/51906119928?text={{ urlencode('Me gustaría cotizar ' . $service['h1'] . ', quisiera tener más información') }}" target="_blank" class="block w-full bg-white text-blue-900 text-center font-bold py-4 rounded-lg hover:bg-blue-50 shadow-lg relative z-10">
                        Solicitar Cotización
                    </a>
                    
                    <a href="https://wa.me/51906119928?text={{ urlencode('Me gustaría cotizar ' . $service['h1'] . ', quisiera tener más información') }}" target="_blank" class="mt-6 flex items-center justify-center space-x-2 text-blue-200 text-sm relative z-10 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+51 906 119 928</span>
                    </a>
                </div>

                <!-- Testimonial -->
                <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 opacity-20" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.0547 15.3789 13.625 17.5703 12.3516L17.8047 12.1953L17.2422 12.0391C16.8906 11.9609 16.5156 11.9062 16.1172 11.9062C14.2422 11.9062 12.7422 13.4062 12.7422 15.2812L12.7422 21L14.017 21ZM6.01562 21L6.01562 18C6.01562 16.0547 7.37891 13.625 9.57031 12.3516L9.80469 12.1953L9.24219 12.0391C8.89062 11.9609 8.51562 11.9062 8.11719 11.9062C6.24219 11.9062 4.74219 13.4062 4.74219 15.2812L4.74219 21L6.01562 21ZM16.0938 3.51562C9.16406 3.51562 3.51562 9.16406 3.51562 16.0938L3.51562 21.5625L13.5938 21.5625L13.5938 14.4375L15.2344 14.4375C17.7656 14.4375 19.8281 16.5 19.8281 19.0312L19.8281 21.5625L20.4844 21.5625C21.3047 21.5625 21.9844 20.8828 21.9844 20.0625L21.9844 16.0938C21.9844 9.16406 16.3359 3.51562 9.40625 3.51562L16.0938 3.51562Z"></path></svg>
                    </div>
                    <blockquote class="text-gray-600 italic mb-6">"{{ $service['testimonial']['quote'] }}"</blockquote>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 font-bold mr-3">
                            {{ substr($service['testimonial']['author'], 0, 1) }}
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-sm">{{ $service['testimonial']['author'] }}</div>
                            <div class="text-gray-500 text-xs">{{ $service['testimonial']['position'] }}</div>
                        </div>
                    </div>
                </div>

                <!-- Other Services -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h4 class="font-bold text-gray-900 mb-4 text-sm uppercase tracking-wide">Otros Servicios</h4>
                    @php
                        $otherServices = array_filter($services, function ($value, $key) use ($slug) {
                            return $key !== $slug;
                        }, ARRAY_FILTER_USE_BOTH);
                    @endphp
                    <ul class="space-y-3">
                        @foreach($otherServices as $otherSlug => $otherService)
                            <li>
                                <a href="{{ route('servicios.show', $otherSlug) }}" class="text-gray-600 hover:text-blue-600 text-sm block py-1 {{ $loop->last ? '' : 'border-b border-gray-100' }}">
                                    {{ $otherService['h1'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</main>

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "name": "{{ $service['h1'] }}",
  "provider": {
    "@@type": "Organization",
    "name": "Argentoni Constructora",
    "url": "{{ url('/') }}"
  },
  "description": "{{ strip_tags($service['meta_description']) }}",
  "image": "{{ $service['image'] }}",
  "areaServed": "Peru",
  "serviceType": "ConstructionServices",
  "offers": {
    "@@type": "Offer",
    "priceCurrency": "PEN",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endsection
