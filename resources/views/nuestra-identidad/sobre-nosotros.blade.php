@extends('layouts.app')

@section('title', 'Constructora Perú | Sobre Nosotros Corporativo Arequipa')
@section('meta_description', 'Descubre el propósito y la forma de trabajo de nuestra constructora en Perú. Agenda en Arequipa y recibe asesoría de obra civil hoy mismo.')

@section('content')
<main class="bg-white">
    <section class="relative min-h-[55vh] w-full overflow-hidden" data-grid-hero>
        <div class="absolute inset-0">
            <img src="https://x02.me/i/4FKHU3.jpg" alt="Sobre Nosotros" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Nuestra Identidad</span>
            <h1 class="text-4xl md:text-5xl font-light text-white mt-4">Sobre Nosotros</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Somos una firma de ingeniería que combina precisión técnica y vocación de servicio para transformar ideas en infraestructura confiable.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">Propósito y Origen</h2>
                <p class="text-gray-600 text-lg leading-relaxed">Nacimos para responder a desafíos complejos con soluciones claras y responsables. Nuestra trayectoria se construye con la confianza de clientes que buscan precisión, cumplimiento y una visión de largo plazo.</p>
                <p class="text-gray-600 text-lg leading-relaxed">Creamos equipos multidisciplinarios que aportan rigor técnico y sensibilidad por el entorno, asegurando que cada proyecto deje una huella positiva y sostenible.</p>
            </div>
            <div class="bg-blue-600 text-white p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600">
                <h3 class="text-xl md:text-2xl font-light mb-6">Nuestro enfoque</h3>
                <ul class="space-y-4 text-white/90">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Planificación rigurosa y control de calidad en cada etapa.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Relaciones transparentes basadas en confianza y resultados.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-white/80"></span>
                        <span>Compromiso con seguridad, sostenibilidad y valor social.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
