@extends('layouts.app')

@section('title', 'Constructora Perú | Ingeniería Industrial Minera Trujillo')
@section('meta_description', 'Constructora Perú especializada en industria y minería. Cotiza en Trujillo y optimiza plantas, campamentos y operaciones críticas con soporte regional hoy.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<section class="relative w-full h-[60vh] md:h-[80vh] overflow-hidden">
    <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
        <source src="https://x02.me/i/77MVR.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-5xl font-bold text-white">Capacidades en Industrial y Minería</h1>
        </div>
    </div>
</section>
<main class="pt-24 pb-16 bg-transparent relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-8">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Capacidades en Industrial y Minería
                </h1>

                <div class="rounded-xl overflow-hidden shadow-lg mb-10 aspect-w-16 aspect-h-9 relative">
                    <img src="https://i.postimg.cc/8cQNvDBh/view-ialomitei-cave-bucegi-mountains-romania.jpg" alt="Industrial y Minería" class="w-full h-full object-cover" loading="lazy">
                </div>

                <div class="prose prose-lg prose-blue text-gray-600 mb-12 max-w-none text-justify">
                    <p>Impulsamos proyectos industriales y mineros con soluciones técnicas de alto desempeño, integrando ingeniería estructural, análisis de suelos y coordinación multidisciplinaria para garantizar seguridad, eficiencia y continuidad operativa.</p>
                    <p>Trabajamos con una visión integral del ciclo de vida del activo, priorizando la estabilidad geotécnica, la confiabilidad estructural y la optimización del layout para reducir interferencias y mejorar la mantenibilidad. Nuestro equipo asegura un flujo de información claro entre disciplinas, permitiendo decisiones oportunas y trazables.</p>
                    <p>Desde la conceptualización hasta la ingeniería de detalle, aplicamos criterios de constructibilidad, control de riesgos y cumplimiento normativo para entregar soluciones robustas, listas para operación. El resultado es una infraestructura alineada a los objetivos de producción, seguridad y sostenibilidad de cada cliente.</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 mb-12 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-blue-600 mr-3 rounded-full"></span>
                        Capacidades Clave
                    </h2>
                    <ul class="grid md:grid-cols-2 gap-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Plataformas estructurales para procesos industriales</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Simulación geotécnica y diseño de cimentaciones</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Modelado de plantas industriales y optimización de layout</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Coordinación BIM y control de interferencias</span>
                        </li>
                    </ul>
                </div>
                <div class="prose prose-lg prose-blue text-gray-600 max-w-none text-justify">
                    <p>Nuestro enfoque combina modelado avanzado y coordinación técnica para reducir tiempos de ejecución, mejorar la calidad del montaje y asegurar la continuidad operativa. Cada propuesta se adapta a las condiciones del sitio, a los requerimientos de proceso y a los estándares de seguridad exigidos por la industria.</p>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Gestión técnica</h2>
                    <div class="text-gray-600 text-base leading-relaxed space-y-4">
                        <p>Evaluamos condiciones geotécnicas y restricciones operativas para definir soluciones seguras, optimizadas y compatibles con la operación continua.</p>
                        <p>Coordinamos disciplinas con foco en constructibilidad, control de interferencias y reducción de riesgos en terreno.</p>
                        <p>Optimizamos tiempos de montaje y secuencias de obra, asegurando una entrega confiable y conforme a estándares industriales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
