@extends('layouts.app')

@section('title', 'Constructora Perú | Liderazgo Técnico Regional Arequipa')
@section('meta_description', 'Conoce al equipo directivo de nuestra constructora en Perú y su visión técnica. Agenda en Arequipa y recibe estrategia para obras complejas.')

@section('content')
<main class="bg-white">
    <section class="relative min-h-[55vh] w-full overflow-hidden" data-grid-hero>
        <div class="absolute inset-0">
            <img src="https://x02.me/i/5FNS.avif" alt="Nuestro Liderazgo" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Nuestra Identidad</span>
            <h1 class="text-4xl md:text-5xl font-light text-white mt-4">Nuestro Liderazgo</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Nuestro liderazgo impulsa equipos que integran experiencia, innovación y una visión estratégica centrada en resultados sostenibles.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">Nuestra Gente y Visión</h2>
                <p class="text-gray-600 text-lg leading-relaxed">Creemos en el talento como motor de cambio. Nuestro equipo combina liderazgo técnico y visión humana para guiar proyectos de alto impacto con claridad y serenidad.</p>
                <p class="text-gray-600 text-lg leading-relaxed">Promovemos culturas de trabajo colaborativas, con procesos transparentes que fomentan la excelencia y la mejora continua.</p>
            </div>
            <div class="bg-blue-600 text-white p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600">
                <h3 class="text-xl md:text-2xl font-light mb-6">Principios de liderazgo</h3>
                <ul class="space-y-4 text-white/90">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Decisiones basadas en datos, experiencia y criterios éticos.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Formación continua para liderar con visión de futuro.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Compromiso con la seguridad y el bienestar del equipo.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
