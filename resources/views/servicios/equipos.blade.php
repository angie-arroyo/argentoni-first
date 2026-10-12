@extends('layouts.app')

@section('title', 'Constructora Perú | Equipos Topográficos y Drones Lima')
@section('meta_description', 'Constructora Perú con equipos topográficos y drones para obra. Cotiza en Lima y asegura GPS, estaciones totales y soporte regional con atención especializada.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<main class="pt-32 pb-24 bg-white relative z-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 border-b border-gray-100 pb-8">
            <div class="max-w-2xl">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">Catálogo 2026</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight leading-tight">
                    Tecnología Topográfica
                </h1>
                <p class="mt-4 text-lg text-gray-500 font-light leading-relaxed">
                    Equipamiento de precisión para proyectos de ingeniería. Disponibilidad inmediata para venta y alquiler con soporte técnico especializado.
                </p>
            </div>
            <div class="mt-6 md:mt-0 hidden md:block">
                <a href="https://wa.me/51906119928" target="_blank" class="text-sm font-semibold text-gray-900 border-b border-gray-900 pb-1 hover:text-blue-600 hover:border-blue-600 transition-colors">
                    Contactar Soporte
                </a>
            </div>
        </div>

        @php
            $categoryGroups = [
                'estaciones-totales' => 'Estaciones Totales y Teodolitos',
                'gps-gnss-rtk' => 'GPS/GNSS y Sistemas RTK',
                'niveles-opticos' => 'Niveles Ópticos y Láser',
                'escaneres-3d' => 'Escáneres 3D y Captura de Realidad',
                'software-procesamiento' => 'Software y Procesamiento',
                'accesorios-repuestos' => 'Accesorios y Repuestos',
                'drones-fotogrametria' => 'Fotogrametría Aérea',
            ];
            $categoryLabels = [
                'estaciones-totales' => 'Equipos',
                'gps-gnss-rtk' => 'Equipos',
                'niveles-opticos' => 'Equipos',
                'escaneres-3d' => 'Equipos',
                'software-procesamiento' => 'Equipos',
                'accesorios-repuestos' => 'Equipos',
                'drones-fotogrametria' => 'Drones',
            ];
            $categoryHeadings = [
                'estaciones-totales' => 'Estaciones Totales y Teodolitos',
                'gps-gnss-rtk' => 'GPS/GNSS y Sistemas RTK',
                'niveles-opticos' => 'Niveles Ópticos y Láser',
                'escaneres-3d' => 'Escáneres 3D y Captura de Realidad',
                'software-procesamiento' => 'Software y Procesamiento',
                'accesorios-repuestos' => 'Accesorios y Repuestos',
                'drones-fotogrametria' => 'Drones y Fotogrametría Aérea',
            ];
        @endphp

        @foreach($categoryGroups as $anchorId => $categoryName)
            @php
                $groupProducts = array_filter($products, fn ($product) => $product['category'] === $categoryName);
            @endphp
            @continue(empty($groupProducts))
            <div id="{{ $anchorId }}" class="mb-16">
                <div class="flex items-end justify-between border-b border-gray-100 pb-4 mb-8">
                    <div>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs block">{{ $categoryLabels[$anchorId] }}</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-2">{{ $categoryHeadings[$anchorId] }}</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($groupProducts as $product)
                        @include('servicios.partials.equipo-card', ['product' => $product])
                    @endforeach
                </div>
            </div>
        @endforeach

        <!-- Trust Section -->
        <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-gray-100 pt-12">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-1">24/7</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Soporte Técnico</p>
            </div>
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-1">100%</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Garantía Asegurada</p>
            </div>
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-1">Envío</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">A Nivel Nacional</p>
            </div>
        </div>
    </div>
</main>
@endsection
