@extends('layouts.app')

@section('title', 'Constructora Perú | Obras Civiles e Infraestructura Lima')
@section('meta_description', 'Constructora Perú especializada en obras civiles e infraestructura pública. Cotiza en Lima con Argentoni y recibe asesoría técnica para tu proyecto hoy mismo.')
@section('header_class', 'bg-transparent')
@section('header_style', 'transparent')

@section('content')
    @php
        $serviceSlugs = [
            'diseno-elementos-estructurales',
            'diseno-instalaciones-sanitarias',
            'ajustes-poligonales-topograficas',
            'diseno-viales',
            'diseno-aceros',
            'levantamiento-geometrico-fotogrametria',
            'diseno-instalaciones-electricas',
            'mecanica-suelos-pavimentos'
        ];
        $randomServiceSlug = $serviceSlugs[array_rand($serviceSlugs)];
    @endphp
    <style>
        .responsive-title {
            font-size: clamp(3rem, 6vw + 1rem, 7rem); /* 48px -> 112px range approx */
            line-height: 1.1;
            transition: font-size 0.3s ease, line-height 0.3s ease;
        }
        
        .responsive-subtitle {
            font-size: clamp(1.5rem, 3vw + 0.5rem, 3rem); /* 24px -> 48px range approx */
            transition: font-size 0.3s ease;
        }

        .responsive-arrow {
            font-size: clamp(1.25rem, 2.5vw + 0.25rem, 2.25rem);
            transition: font-size 0.3s ease;
        }

        /* Fluid padding container */
        .responsive-container {
            padding-left: clamp(1rem, 5vw, 8rem);
            padding-right: clamp(1rem, 5vw, 8rem);
        }

        /* Breakpoints for finer control if clamp isn't enough */
        @media (max-width: 768px) {
            .responsive-title {
                margin-bottom: 1rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="relative h-screen w-full overflow-hidden">
        <!-- Video Carousel Container -->
        <div id="hero-carousel" class="absolute inset-0 w-full h-full bg-black">
            <!-- Video 1 -->
            <video id="video-1" class="hero-video absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" muted playsinline preload="auto">
                <source src="https://cdn.pixabay.com/video/2024/07/13/220941_large.mp4" type="video/mp4">
            </video>
            
            <!-- Video 2 -->
            <video id="video-2" class="hero-video absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" muted playsinline preload="auto">
                <source src="https://cdn.pixabay.com/video/2023/07/25/173137-848555631_large.mp4" type="video/mp4">
            </video>
        </div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/30 z-10"></div>
        
        <!-- Content -->
        <div class="relative z-20 flex flex-col items-start justify-center h-full text-left responsive-container">
            <div class="w-fit flex flex-col">
                <h1 class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                    Diferencia <span class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                        para ti
                    </span>
                </h1>
                <div id="trigger-panel" class="relative font-rockness text-white responsive-subtitle self-end cursor-pointer hover:opacity-80 transition-opacity">
                    <span class="relative z-10">
                        ¿Construimos tu proyecto? 
                        <span class="text-red-600 responsive-arrow">&rarr;</span>
                    </span>
                    <div class="absolute -bottom-2 left-0 w-full h-full -z-0 bg-red-500 pointer-events-none" 
                         style="-webkit-mask-image: url('/svg/linea.svg'); mask-image: url('/svg/linea.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: 80%; mask-size: 80%; -webkit-mask-position: 20% bottom; mask-position: 20% bottom;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full py-20 lg:py-28 border-t border-gray-100 relative overflow-hidden">
        <div class="absolute inset-0 bg-white"></div>
        <div class="max-w-6xl mx-auto px-6 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-blue-600"></span>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Bienvenida</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight">Impulsando el Futuro de la Infraestructura</h2>
                </div>
                <div class="lg:col-span-8">
                    <div class="bg-white border border-gray-100 shadow-2xl shadow-gray-200/40 p-8 md:p-12">
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            En Argentoni, nos dedicamos a convertir la visión de nuestros clientes en soluciones tangibles y sostenibles. Nos especializamos en infraestructura pública, estructuras metálicas y proyectos de minería e industriales, ofrecemos servicios de ingeniería y asistencia técnica de alta complejidad que superan las expectativas del mercado.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            Nuestra misión es actuar como un aliado estratégico, brindando soluciones personalizadas y de calidad, respaldadas por un equipo de expertos que garantizan excelencia, seguridad y eficiencia en cada fase del proyecto.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Con un compromiso inquebrantable con la innovación y el desarrollo, impulsamos el crecimiento de su infraestructura y le ayudamos a proyectarse hacia el futuro con estructuras sólidas, duraderas y de alto rendimiento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-20 lg:py-28 border-t border-gray-100 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-[2px] bg-blue-600"></span>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Constructora Perú</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 leading-tight">Soluciones de construcción con alcance nacional</h2>
                </div>
                <div class="lg:col-span-8 space-y-6">
                    <p class="text-gray-600 text-lg leading-relaxed">Argentoni es una constructora en Perú enfocada en obras civiles, infraestructura pública y proyectos industriales. Trabajamos con equipos expertos para entregar resultados seguros y eficientes.</p>
                    <p class="text-gray-600 text-lg leading-relaxed">Si buscas constructoras en Lima o empresas de construcción Perú con experiencia en obras civiles Perú, coordinamos diagnóstico, ingeniería y ejecución para proyectos en Lima, Arequipa, Trujillo y Cusco.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-20 lg:py-28 bg-white border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-6 relative z-20">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10 lg:mb-16">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-[2px] bg-blue-600"></span>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Servicios Especializados</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 leading-tight">Ingeniería aplicada a cada etapa del proyecto</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">Soluciones técnicas que integran diseño, precisión y ejecución confiable para infraestructura pública, industrial y minería.</p>
                </div>
                <a href="{{ route('servicios.show', $randomServiceSlug) }}" class="inline-flex items-center text-xs md:text-sm font-bold tracking-widest uppercase text-gray-900 hover:text-blue-600 transition-colors">
                    Ver todos los servicios
                    <span class="ml-2">&rarr;</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('servicios.show', 'diseno-elementos-estructurales') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Diseños de elementos estructurales</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Cálculos precisos para estructuras seguras, eficientes y normadas.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'diseno-instalaciones-sanitarias') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Diseño de instalaciones sanitarias</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Sistemas eficientes de agua, desagüe y protección contra incendio.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'ajustes-poligonales-topograficas') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Ajustes de polígonales topográficas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Control geométrico y precisión para levantamientos confiables.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'diseno-viales') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Diseño viales</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Trazado y geometría vial optimizada para operación segura.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'diseno-aceros') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Diseño de aceros</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Detalles estructurales con alta eficiencia y desempeño.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'levantamiento-geometrico-fotogrametria') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Levantamiento con fotogrametría</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Modelos 3D de alta precisión para toma de decisiones.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'diseno-instalaciones-electricas') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Diseños de instalaciones eléctricas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Cálculo de cargas y tableros para operación segura.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
                <a href="{{ route('servicios.show', 'mecanica-suelos-pavimentos') }}" class="group bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Mecánica de suelos y pavimentos</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Diagnóstico y soluciones geotécnicas para obras duraderas.</p>
                    <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Explorar &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <section class="w-full py-20 lg:py-28 bg-white border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-6 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-[2px] bg-blue-600"></span>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Sectores de Mercado</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 leading-tight">Soluciones a la medida de cada industria</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">Conocimiento técnico y experiencia de campo para proyectos exigentes.</p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-50 border border-gray-100 p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Infraestructura pública</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Diseños viales, saneamiento e ingeniería estructural para obras con impacto social.</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Minería e industria</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Soluciones robustas para plantas, campamentos y entornos operativos críticos.</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Estructuras metálicas</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Optimización de acero y detalles constructivos para montaje eficiente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-20 lg:py-28 bg-gray-900 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-6 relative">
            <div class="absolute inset-0 bg-gray-900 z-20"></div>
            <div class="relative z-30 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-5">
                    <div class="bg-white/5 border border-white/10 p-8 md:p-10">
                        <div class="space-y-5">
                            <div class="flex items-center gap-3">
                                <span class="w-10 h-[2px] bg-orange-500"></span>
                                <span class="text-orange-400 font-bold tracking-widest uppercase text-xs">Cómo Trabajamos</span>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-light text-white leading-tight">Un proceso claro, enfocado en resultados</h2>
                            <p class="text-white/70 text-lg leading-relaxed text-justify">Integramos análisis, diseño y seguimiento para asegurar precisión, cumplimiento y calidad.</p>
                            <a href="https://wa.me/51906119928?text={{ urlencode('Hola, me gustaría cotizar un proyecto con Argentoni Constructora') }}" target="_blank" class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 uppercase tracking-widest text-xs transition-colors">
                                Cotiza tu proyecto
                                <span class="ml-2">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white/5 border border-white/10 p-6">
                        <span class="text-orange-400 text-xs font-bold tracking-widest">01</span>
                        <h3 class="text-lg font-semibold text-white mt-3 mb-2">Diagnóstico técnico</h3>
                        <p class="text-white/70 text-sm leading-relaxed text-justify">Revisión de necesidades, normativa aplicable y objetivos del proyecto. Definimos alcance, prioridades y riesgos para asegurar decisiones oportunas.</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-6">
                        <span class="text-orange-400 text-xs font-bold tracking-widest">02</span>
                        <h3 class="text-lg font-semibold text-white mt-3 mb-2">Ingeniería de detalle</h3>
                        <p class="text-white/70 text-sm leading-relaxed text-justify">Modelado, cálculos y planos para una ejecución precisa. Coordinamos especialidades para evitar interferencias y optimizar tiempos de obra.</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-6">
                        <span class="text-orange-400 text-xs font-bold tracking-widest">03</span>
                        <h3 class="text-lg font-semibold text-white mt-3 mb-2">Asistencia técnica</h3>
                        <p class="text-white/70 text-sm leading-relaxed text-justify">Acompañamiento en obra y coordinación multidisciplinaria.</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-6">
                        <span class="text-orange-400 text-xs font-bold tracking-widest">04</span>
                        <h3 class="text-lg font-semibold text-white mt-3 mb-2">Cierre y control</h3>
                        <p class="text-white/70 text-sm leading-relaxed text-justify">Entregables completos y validación de calidad final.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Slide-in Panel -->
    <div id="side-panel" class="fixed inset-0 z-[100] transform translate-x-full transition-transform duration-500 ease-in-out">
        <div class="absolute inset-0 bg-blue-700 flex flex-col md:flex-row h-full w-full">
            
            <!-- Mobile Close Button -->
            <button id="close-panel-mobile" class="md:hidden absolute top-4 right-4 z-50 text-white p-2 hover:opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Close Button (Left strip) -->
            <div id="close-panel" class="hidden md:flex w-16 h-full bg-blue-800 items-center justify-center cursor-pointer hover:bg-blue-900 transition-colors z-50">
                <span class="text-white text-sm tracking-widest uppercase -rotate-90 whitespace-nowrap">Cerrar</span>
            </div>

            <!-- Content Container -->
            <div class="flex-1 flex flex-col md:flex-row overflow-hidden pt-12 md:pt-0">
                
                <!-- Section 1: Project -->
                <div class="flex-1 p-6 md:p-12 border-b md:border-b-0 md:border-r border-blue-600 flex flex-col justify-center overflow-hidden">
                    <div class="hidden md:block aspect-square bg-blue-800 rounded-lg mb-8 overflow-hidden relative">
                         <!-- Placeholder for Project Image -->
                        <img src="https://images.pexels.com/photos/8482865/pexels-photo-8482865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Un Proyecto" class="object-cover w-full h-full">
                    </div>
                    <h2 class="text-2xl md:text-4xl font-normal text-white mb-2 md:mb-6">Nuestros Servicios</h2>
                    <p class="text-white/80 text-sm md:text-lg leading-snug md:leading-relaxed mb-auto line-clamp-3 md:line-clamp-none">
                        Como constructores, emprendemos proyectos grandes y complejos, fomentamos la innovación, adoptamos tecnologías emergentes y marcamos la diferencia en la comunidad.
                    </p>
                    <a href="{{ route('servicios.show', $randomServiceSlug) }}" class="inline-flex items-center text-white text-xs md:text-sm font-bold tracking-widest uppercase mt-4 md:mt-8 hover:text-blue-200 transition-colors group">
                        Ver Nuestros Servicios
                        <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>

                <!-- Section 2: Career -->
                <div class="flex-1 p-6 md:p-12 border-b md:border-b-0 md:border-r border-blue-600 flex flex-col justify-center overflow-hidden">
                    <div class="hidden md:block aspect-square bg-blue-800 rounded-lg mb-8 overflow-hidden relative">
                        <!-- Placeholder for Career Image -->
                        <img src="https://images.pexels.com/photos/1216589/pexels-photo-1216589.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Una Carrera" class="object-cover w-full h-full">
                    </div>
                    <h2 class="text-2xl md:text-4xl font-normal text-white mb-2 md:mb-6">Una Carrera</h2>
                    <p class="text-white/80 text-sm md:text-lg leading-snug md:leading-relaxed mb-auto line-clamp-3 md:line-clamp-none">
                        En Argentoni, los miembros del equipo participan en proyectos emocionantes en diversas ubicaciones. Hay oportunidades disponibles para ingenieros, trabajadores de oficio, veteranos y más.
                    </p>
                    <a href="/carreras" class="inline-flex items-center text-white text-xs md:text-sm font-bold tracking-widest uppercase mt-4 md:mt-8 hover:text-blue-200 transition-colors group">
                        Ver Oportunidades de Carrera
                        <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>

                <!-- Section 3: Future -->
                <div class="flex-1 p-6 md:p-12 flex flex-col justify-center overflow-hidden">
                    <div class="hidden md:block aspect-square bg-blue-800 rounded-lg mb-8 overflow-hidden relative">
                        <!-- Placeholder for Future Image -->
                        <img src="https://images.pexels.com/photos/6285156/pexels-photo-6285156.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Un Futuro Mejor" class="object-cover w-full h-full">
                    </div>
                    <h2 class="text-2xl md:text-4xl font-normal text-white mb-2 md:mb-6">Nuestras Capacidades</h2>
                    <p class="text-white/80 text-sm md:text-lg leading-snug md:leading-relaxed mb-auto line-clamp-3 md:line-clamp-none">
                        Nuestros valores compartidos conectan a nuestro equipo y clientes, y nos permiten realizar un trabajo significativo cada día.
                    </p>
                    <a href="{{ url('/capacidades/industrial-mineria') }}" class="inline-flex items-center text-white text-xs md:text-sm font-bold tracking-widest uppercase mt-4 md:mt-8 hover:text-blue-200 transition-colors group">
                        Ver Nuestras Capacidades
                        <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Panel Interaction
            const triggerPanel = document.getElementById('trigger-panel');
            const sidePanel = document.getElementById('side-panel');
            const closePanel = document.getElementById('close-panel');
            const closePanelMobile = document.getElementById('close-panel-mobile');

            // Move side panel to body to avoid stacking context issues with main/header
            if (sidePanel) {
                document.body.appendChild(sidePanel);
            }

            if (triggerPanel && sidePanel) {
                triggerPanel.addEventListener('click', function() {
                    sidePanel.classList.remove('translate-x-full');
                });

                if (closePanel) {
                    closePanel.addEventListener('click', function() {
                        sidePanel.classList.add('translate-x-full');
                    });
                }
                
                if (closePanelMobile) {
                    closePanelMobile.addEventListener('click', function() {
                        sidePanel.classList.add('translate-x-full');
                    });
                }

                // Close panel on scroll
                let isScrolling = false;
                window.addEventListener('wheel', function(e) {
                    if (!sidePanel.classList.contains('translate-x-full') && !isScrolling) {
                        isScrolling = true;
                        // Small delay to prevent accidental triggers
                        setTimeout(() => {
                            sidePanel.classList.add('translate-x-full');
                            isScrolling = false;
                        }, 50);
                    }
                }, { passive: true });

                // Also handle touch move for mobile
                window.addEventListener('touchmove', function(e) {
                    if (!sidePanel.classList.contains('translate-x-full') && !isScrolling) {
                        isScrolling = true;
                         setTimeout(() => {
                            sidePanel.classList.add('translate-x-full');
                            isScrolling = false;
                        }, 50);
                    }
                }, { passive: true });
            }

            const videos = document.querySelectorAll('.hero-video');
            let currentIndex = 0;
            
            // Start the first video
            videos[0].play().catch(e => console.log("Autoplay prevented:", e));
            
            function playNextVideo() {
                const nextIndex = (currentIndex + 1) % videos.length;
                const currentVideo = videos[currentIndex];
                const nextVideo = videos[nextIndex];
                
                // Prepare next video
                nextVideo.currentTime = 0;
                nextVideo.play().then(() => {
                    // Crossfade animation
                    nextVideo.classList.remove('opacity-0');
                    nextVideo.classList.add('opacity-100');
                    
                    currentVideo.classList.remove('opacity-100');
                    currentVideo.classList.add('opacity-0');
                    
                    currentIndex = nextIndex;
                }).catch(e => console.log("Play failed:", e));
            }

            // Add event listener to all videos
            videos.forEach(video => {
                video.addEventListener('ended', playNextVideo);
            });
        });
    </script>
@endsection
