@extends('layouts.app')

@section('title', 'Constructora Perú | Infraestructura Pública Trujillo')
@section('meta_description', 'Constructora Perú con capacidades en infraestructura pública, carreteras y saneamiento. Cotiza en Trujillo y recibe ingeniería para obras civiles regional hoy.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<section class="relative w-full h-[60vh] md:h-[80vh] overflow-hidden">
    <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
        <source src="https://x02.me/i/FJUUBW.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-5xl font-bold text-white">Capacidades en Infraestructura Pública</h1>
        </div>
    </div>
</section>
<main class="pt-24 pb-16 bg-transparent relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-8">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Capacidades en Infraestructura Pública
                </h1>

                <div class="rounded-xl overflow-hidden shadow-lg mb-10 aspect-w-16 aspect-h-9 relative">
                    <img src="https://i.postimg.cc/43909c8j/young-businessman-working-talking-phone.jpg" alt="Infraestructura Pública" class="w-full h-full object-cover" loading="lazy">
                </div>

                <div class="prose prose-lg prose-blue text-gray-600 mb-12 max-w-none text-justify">
                    <p>Desarrollamos proyectos de infraestructura pública con enfoque en movilidad, seguridad y sostenibilidad. Integramos diseño vial, estructuras y planificación urbana para soluciones eficientes y escalables.</p>
                    <p>Nuestra metodología prioriza el análisis de demanda, la jerarquización de redes y la accesibilidad universal, asegurando proyectos alineados con la dinámica urbana y la operación diaria de los sistemas de transporte. Incorporamos criterios de resiliencia y mantenimiento para prolongar la vida útil de las inversiones públicas.</p>
                    <p>Trabajamos con procesos claros de coordinación técnica y control de calidad, lo que permite optimizar costos, minimizar riesgos y entregar soluciones con alto impacto social. Cada propuesta se adapta al entorno local, a la normativa vigente y a los objetivos de conectividad regional.</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 mb-12 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-blue-600 mr-3 rounded-full"></span>
                        Capacidades Clave
                    </h2>
                    <ul class="grid md:grid-cols-2 gap-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Diseño de carreteras, puentes e intersecciones</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Optimización de transporte público y accesibilidad</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Gestión de activos de infraestructura y mantenimiento</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Planificación urbana y análisis de demanda</span>
                        </li>
                    </ul>
                </div>
                <div class="prose prose-lg prose-blue text-gray-600 max-w-none text-justify">
                    <p>Integramos ingeniería y planificación para entregar infraestructura segura, funcional y preparada para el crecimiento futuro. Nuestro enfoque combina análisis técnico con visión urbana, asegurando proyectos más eficientes y sostenibles.</p>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Enfoque de proyecto</h2>
                    <div class="text-gray-600 text-base leading-relaxed space-y-4">
                        <p>Definimos objetivos claros de movilidad, seguridad vial y resiliencia operativa desde el inicio, priorizando soluciones que aporten valor social medible.</p>
                        <p>Aplicamos criterios de mantenibilidad y costo del ciclo de vida, asegurando que la infraestructura se mantenga eficiente y segura a largo plazo.</p>
                        <p>Integramos a las partes interesadas para garantizar una implementación ordenada, con trazabilidad y cumplimiento normativo en cada etapa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
