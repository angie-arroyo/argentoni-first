@extends('layouts.app')

@section('title', 'Constructora Perú | Fundación y Compromiso Arequipa')
@section('meta_description', 'Conoce la Fundación Argentoni y el impacto social de nuestra constructora en Perú. Agenda en Arequipa y participa en iniciativas de valor hoy.')

@section('content')
<main class="bg-white">
    <section class="relative min-h-[55vh] w-full overflow-hidden" data-grid-hero>
        <div class="absolute inset-0">
            <img src="https://x02.me/i/49NK33.avif" alt="Fundación Argentoni" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Nuestra Identidad</span>
            <h1 class="text-4xl md:text-5xl font-light text-white mt-4">Fundación Argentoni</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Nuestra fundación impulsa iniciativas que fortalecen la seguridad técnica, la responsabilidad ambiental y el bienestar social.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">Compromiso y Legado</h2>
                <p class="text-gray-600 text-lg leading-relaxed">Trabajamos con una visión social que integra comunidades, formación técnica y proyectos de impacto. Nuestro objetivo es generar bienestar sostenible y fortalecer capacidades locales.</p>
                <p class="text-gray-600 text-lg leading-relaxed">Promovemos iniciativas que aporten oportunidades reales, fomentando una cultura de progreso compartido.</p>
            </div>
            <div class="bg-blue-600 text-white p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600">
                <h3 class="text-xl md:text-2xl font-light mb-6">Ejes de acción</h3>
                <ul class="space-y-4 text-white/90">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Seguridad técnica y cultura preventiva.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Responsabilidad ambiental y cuidado del entorno.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Programas educativos y apoyo comunitario.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
