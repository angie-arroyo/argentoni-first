@extends('layouts.app')

@section('title', 'Constructora Perú | Carreras en Construcción Lima Hoy')
@section('meta_description', 'Oportunidades de carrera en construcción en Perú. Postula en Lima y participa en obras civiles, infraestructura e innovación con equipos regionales.')

@section('content')
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
        <!-- Video Container -->
        <div id="hero-carousel" class="absolute inset-0 w-full h-full bg-black">
            <video id="video-1" class="hero-video absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" muted playsinline autoplay loop>
                <source src="https://videos.pexels.com/video-files/7817046/7817046-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
        </div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/30 z-10"></div>
        
        <!-- Content -->
        <div class="relative z-20 flex flex-col items-start justify-center h-full text-left responsive-container">
            <div class="w-fit flex flex-col">
                <h1 class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                    Construye tu <span class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                        Futuro
                    </span>
                </h1>
                <div id="trigger-panel" class="relative font-rockness text-white responsive-subtitle self-end cursor-pointer hover:opacity-80 transition-opacity">
                    <span class="relative z-10">
                        Únete a Argentoni 
                        <span class="text-red-600 responsive-arrow">&rarr;</span>
                    </span>
                    <div class="absolute -bottom-2 left-0 w-full h-full -z-0 bg-red-500 pointer-events-none" 
                         style="-webkit-mask-image: url('/svg/linea.svg'); mask-image: url('/svg/linea.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: 80%; mask-size: 80%; -webkit-mask-position: 20% bottom; mask-position: 20% bottom;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vacancies Section -->
    <section id="vacantes" class="w-full relative py-0 lg:py-0 bg-white z-20 overflow-hidden">
    <div class="max-w-[1920px] mx-auto px-0 lg:px-6 h-full">
        <div class="flex flex-col lg:grid lg:grid-cols-4 h-auto lg:h-[800px]">
            <!-- Left Menu (Blue) - Col 1 -->
            <div class="lg:col-span-1 bg-blue-600 p-6 lg:p-16 flex flex-col justify-center relative shadow-lg lg:shadow-none z-20">
                <!-- Blue Background Extension to Left -->
                <div class="hidden lg:block absolute top-0 right-full w-screen h-full bg-blue-600"></div>
                
                <div class="relative z-10">
                        <h2 class="text-white text-2xl lg:text-3xl font-light mb-8 lg:mb-12 border-b border-white/20 pb-4 lg:pb-6">Oportunidades Disponibles</h2>
                        <div class="flex flex-row lg:flex-col overflow-x-auto lg:overflow-visible space-x-4 lg:space-x-0 lg:space-y-2 pb-2 lg:pb-0 scrollbar-hide">
                            <!-- Tab Buttons -->
                            <button onclick="showVacancy(0)" class="vacancy-tab flex-shrink-0 lg:w-full text-left group flex items-center py-3 lg:py-4 px-2 opacity-100 transition-all duration-300 border-b-4 lg:border-b-0 lg:border-l-4 border-white" data-index="0">
                                <span class="text-xs font-bold mr-3 lg:mr-4 text-white/60 group-hover:text-white transition-colors">01</span>
                                <span class="text-lg lg:text-xl font-medium text-white whitespace-nowrap">Ingeniero Civil</span>
                            </button>
                            
                            <button onclick="showVacancy(1)" class="vacancy-tab flex-shrink-0 lg:w-full text-left group flex items-center py-3 lg:py-4 px-2 opacity-50 hover:opacity-100 transition-all duration-300 border-b-4 lg:border-b-0 lg:border-l-4 border-transparent hover:border-white/30" data-index="1">
                                <span class="text-xs font-bold mr-3 lg:mr-4 text-white/60 group-hover:text-white transition-colors">02</span>
                                <span class="text-lg lg:text-xl font-medium text-white whitespace-nowrap">Consultor BIM</span>
                            </button>
        
                            <button onclick="showVacancy(2)" class="vacancy-tab flex-shrink-0 lg:w-full text-left group flex items-center py-3 lg:py-4 px-2 opacity-50 hover:opacity-100 transition-all duration-300 border-b-4 lg:border-b-0 lg:border-l-4 border-transparent hover:border-white/30" data-index="2">
                            <span class="text-xs font-bold mr-3 lg:mr-4 text-white/60 group-hover:text-white transition-colors">03</span>
                            <span class="text-lg lg:text-xl font-medium text-white whitespace-nowrap">Gestor de Proyectos</span>
                        </button>
                    </div>

                    <!-- Download PDF Button -->
                    <div class="mt-8 lg:mt-12 pt-6 lg:pt-8 border-t border-white/20">
                        <a href="{{ route('vacantes.pdf') }}" target="_blank" class="flex items-center text-white/80 hover:text-white group transition-colors duration-300">
                            <span class="bg-white/10 p-2 rounded-full mr-3 group-hover:bg-white/20 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </span>
                            <span class="font-medium tracking-wide">Descargar Vacantes (PDF)</span>
                        </a>
                    </div>
                </div>
            </div>
    
                <!-- Right Content Area (Cols 2, 3, 4) -->
                <div class="lg:col-span-3 relative h-auto lg:h-auto bg-white">
                    
                    <!-- Vacancy 1: Ingeniero Civil Senior -->
                    <div id="vacancy-0" class="vacancy-content relative lg:absolute inset-0 grid grid-cols-1 lg:grid-cols-3 transition-opacity duration-500 opacity-100 z-10 bg-white">
                        <!-- Text Info (Cols 2 & 3) -->
                        <div class="lg:col-span-2 p-8 lg:p-16 flex flex-col justify-center lg:overflow-y-auto custom-scrollbar order-2 lg:order-1">
                            <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase">Ingeniería</span>
                            <h3 class="text-3xl lg:text-4xl font-light text-gray-900 mb-6 leading-tight">Ingeniero Civil Senior</h3>
                            
                            <div class="space-y-6 text-gray-600 mb-8 text-sm lg:text-base">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Requisitos</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Título universitario en Ingeniería Civil.</li>
                                        <li>Experiencia mínima de 5 años en proyectos de infraestructura civil.</li>
                                        <li>Conocimiento avanzado en gestión de proyectos y BIM.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Funciones</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Planificación, diseño y ejecución de proyectos.</li>
                                        <li>Supervisión de obra y control de calidad.</li>
                                        <li>Coordinación con equipos técnicos.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="mt-auto pt-6 border-t border-gray-100">
                                 <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Lima, Perú
                                </div>
                                <button data-vacante="Ingeniero Civil Senior" class="btn-postular text-red-600 font-bold uppercase tracking-widest text-sm hover:text-red-700 inline-flex items-center group/link">
                                    POSTULAR AHORA <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                </button>
                            </div>
                        </div>
                        <!-- Image (Col 4) -->
                        <div class="lg:col-span-1 h-64 lg:h-full relative order-1 lg:order-2">
                             <div class="absolute inset-0 w-full lg:w-[calc(100%+1.5rem)] h-full">
                                <img src="https://x02.me/i/4Y53SX.jpg" alt="Ingeniero Civil" class="absolute inset-0 w-full h-full object-fill">
                                <div class="absolute inset-0 bg-blue-900/10"></div>
                             </div>
                        </div>
                    </div>
    
                    <!-- Vacancy 2: Consultor BIM -->
                    <div id="vacancy-1" class="vacancy-content hidden lg:grid relative lg:absolute inset-0 grid-cols-1 lg:grid-cols-3 transition-opacity duration-500 opacity-0 pointer-events-none lg:pointer-events-auto z-0 bg-white">
                        <!-- Text Info -->
                        <div class="lg:col-span-2 p-8 lg:p-16 flex flex-col justify-center lg:overflow-y-auto custom-scrollbar order-2 lg:order-1">
                            <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase">Tecnología</span>
                            <h3 class="text-3xl lg:text-4xl font-light text-gray-900 mb-6 leading-tight">Consultor BIM</h3>
                            
                            <div class="space-y-6 text-gray-600 mb-8 text-sm lg:text-base">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Requisitos</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Título en Arquitectura o Ingeniería Civil.</li>
                                        <li>Experiencia en Revit, Navisworks y herramientas BIM.</li>
                                        <li>Conocimiento de normativa peruana.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Funciones</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Implementación de BIM en proyectos.</li>
                                        <li>Capacitación de equipos internos y externos.</li>
                                        <li>Gestión digital de proyectos con clientes.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="mt-auto pt-6 border-t border-gray-100">
                                 <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Lima, Perú
                                </div>
                                <button data-vacante="Consultor BIM" class="btn-postular text-red-600 font-bold uppercase tracking-widest text-sm hover:text-red-700 inline-flex items-center group/link">
                                    POSTULAR AHORA <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                </button>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="lg:col-span-1 h-64 lg:h-full relative order-1 lg:order-2">
                             <div class="absolute inset-0 w-full lg:w-[calc(100%+1.5rem)] h-full">
                                <img src="https://x02.me/i/FA22.jpg" alt="Consultor BIM" class="absolute inset-0 w-full h-full object-fill">
                                <div class="absolute inset-0 bg-blue-900/10"></div>
                             </div>
                        </div>
                    </div>
    
                    <!-- Vacancy 3: Gestor de Proyectos -->
                    <div id="vacancy-2" class="vacancy-content hidden lg:grid relative lg:absolute inset-0 grid-cols-1 lg:grid-cols-3 transition-opacity duration-500 opacity-0 pointer-events-none lg:pointer-events-auto z-0 bg-white">
                        <!-- Text Info -->
                        <div class="lg:col-span-2 p-8 lg:p-16 flex flex-col justify-center lg:overflow-y-auto custom-scrollbar order-2 lg:order-1">
                            <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase">Gestión</span>
                            <h3 class="text-3xl lg:text-4xl font-light text-gray-900 mb-6 leading-tight">Gestor de Proyectos</h3>
                            
                            <div class="space-y-6 text-gray-600 mb-8 text-sm lg:text-base">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Requisitos</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Título en Ingeniería Civil o afines.</li>
                                        <li>Mínimo 3 años de experiencia en gestión.</li>
                                        <li>Experiencia con equipos multidisciplinarios.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Funciones</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Planificación y ejecución de proyectos.</li>
                                        <li>Control de presupuesto y tiempos.</li>
                                        <li>Coordinación con proveedores y clientes.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="mt-auto pt-6 border-t border-gray-100">
                                 <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Lima, Perú
                                </div>
                                <button data-vacante="Gestor de Proyectos" class="btn-postular text-red-600 font-bold uppercase tracking-widest text-sm hover:text-red-700 inline-flex items-center group/link">
                                    POSTULAR AHORA <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                </button>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="lg:col-span-1 h-64 lg:h-full relative order-1 lg:order-2">
                             <div class="absolute inset-0 w-full lg:w-[calc(100%+1.5rem)] h-full">
                                <img src="https://x02.me/i/CPCX.jpg" alt="Gestor de Proyectos" class="absolute inset-0 w-full h-full object-fill">
                                <div class="absolute inset-0 bg-blue-900/10"></div>
                             </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="beneficios" class="w-full relative py-20 lg:py-32 bg-white overflow-hidden">

        <div class="max-w-[1920px] mx-auto px-6 lg:px-16 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                <!-- Text Content -->
                <div class="order-2 lg:order-1">
                    <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase block">Beneficios de Trabajar con Nosotros</span>
                    <h2 class="text-4xl lg:text-5xl font-light text-gray-900 mb-8 leading-tight">Lo que ofrecemos a nuestro equipo</h2>
                    
                    <div class="prose prose-lg text-gray-600 font-light mb-8">
                        <p class="mb-6">
                            En Argentoni, valoramos a nuestros colaboradores y les ofrecemos un entorno de trabajo donde puedan crecer profesionalmente y aportar sus conocimientos a proyectos de gran impacto. Algunos de nuestros beneficios son:
                        </p>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-3 mt-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </span>
                                Capacitación continua en BIM, gestión de proyectos y tecnologías emergentes.
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-3 mt-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </span>
                                Oportunidades de crecimiento en proyectos de infraestructura inteligente.
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-3 mt-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </span>
                                Ambiente de trabajo dinámico, enfocado en innovación y tecnología avanzada.
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-3 mt-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </span>
                                Flexibilidad laboral y programas de bienestar para nuestros empleados.
                            </li>
                        </ul>
                        
                        <p class="text-gray-900 font-medium text-xl border-l-4 border-blue-600 pl-6 py-2">
                            "Ven y forma parte de un equipo comprometido con el futuro de la infraestructura civil."
                        </p>
                    </div>
                </div>
                
                <!-- Image Content -->
                <div class="order-1 lg:order-2 relative h-[400px] lg:h-[600px] overflow-hidden group shadow-2xl">
                    <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Equipo Argentoni" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-900/10 mix-blend-multiply"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso de Postulación Section -->
    <section id="proceso-postulacion" class="w-full relative py-20 lg:py-32 bg-white overflow-hidden">
        <div class="max-w-[1920px] mx-auto px-6 lg:px-16 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                <!-- Image Content (Left on Desktop) -->
                <div class="order-1 relative h-[400px] lg:h-[600px] overflow-hidden group shadow-2xl">
                    <img src="https://images.pexels.com/photos/5668858/pexels-photo-5668858.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Proceso de Selección" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-900/10 mix-blend-multiply"></div>
                </div>

                <!-- Text Content (Right on Desktop) -->
                <div class="order-2">
                    <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase block">Proceso de Postulación</span>
                    <h2 class="text-4xl lg:text-5xl font-light text-gray-900 mb-8 leading-tight">¿Cómo postularte?</h2>
                    
                    <div class="prose prose-lg text-gray-600 font-light mb-8">
                        <p class="mb-8">
                            Sigue estos pasos para formar parte de nuestro equipo. Buscamos talento comprometido con la excelencia.
                        </p>
                        
                        <div class="space-y-8">
                            <!-- Step 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-6">
                                    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold text-xl">1</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Revisa las vacantes disponibles</h4>
                                    <p class="text-gray-600">Explora nuestras oportunidades de empleo en la sección de vacantes y dale a <strong class="text-orange-500">Postular ahora</strong>.</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-6">
                                    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold text-xl">2</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Envía tu CV</h4>
                                    <p class="text-gray-600">Envía tu CV y carta de presentación a <a href="mailto:argentonicarreras@veltherion.com" class="text-blue-600 hover:underline font-medium">argentonicarreras@veltherion.com</a>.</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-6">
                                    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold text-xl">3</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Entrevista personal</h4>
                                    <p class="text-gray-600">Si tu perfil es compatible, recibirás una invitación para entrevista.</p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-6">
                                    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold text-xl">4</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Inducción y capacitación</h4>
                                    <p class="text-gray-600">Si eres seleccionado, recibirás un plan de inducción y formación continua en nuestras metodologías y tecnologías.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Send CV Section -->
    <section id="enviar-cv" class="w-full relative py-20 lg:py-32 bg-white overflow-hidden">
        <div class="max-w-[1920px] mx-auto px-6 lg:px-16 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                <!-- Text Content (Left on Desktop) -->
                <div class="order-2 lg:order-1">
                    <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase block">¡Esperamos saber de ti!</span>
                    <h2 class="text-4xl lg:text-5xl font-light text-gray-900 mb-8 leading-tight">Enviar tu CV y Carta de Presentación</h2>
                    
                    <div class="prose prose-lg text-gray-600 font-light mb-8">
                        <p class="mb-8">
                            Si estás interesado en unirte a Argentoni, por favor envía tu CV y carta de presentación a nuestro correo <a href="mailto:argentonicarreras@veltherion.com" class="text-blue-600 hover:underline font-medium">argentonicarreras@veltherion.com</a>. Asegúrate de destacar tu experiencia en tecnología digital, gestión de proyectos e innovación.
                        </p>
                        
                        <a href="mailto:argentonicarreras@veltherion.com" class="inline-flex items-center text-white bg-blue-600 px-8 py-4 font-bold tracking-widest uppercase text-sm hover:bg-blue-700 transition-colors group">
                            Enviar Solicitud
                            <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Image Content (Right on Desktop) -->
                <div class="order-1 lg:order-2 relative h-[400px] lg:h-[600px] overflow-hidden group shadow-2xl">
                    <img src="https://images.pexels.com/photos/3760069/pexels-photo-3760069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Enviar CV" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-900/10 mix-blend-multiply"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artículos Recomendados Section -->
    <section id="articulos-recomendados" class="w-full relative py-20 lg:py-32 bg-white overflow-hidden">
        <div class="max-w-[1920px] mx-auto px-6 lg:px-16 relative z-20">
            <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase block">Investigación y Desarrollo</span>
            <h2 class="text-4xl lg:text-5xl font-light text-gray-900 mb-16 leading-tight">Artículos Recomendados</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Article 1 -->
                <article class="group bg-white shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://x02.me/i/N5BP.jpg" alt="BIM y VR" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-blue-900/10 mix-blend-multiply"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-light text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">Aplicaciones reales de BIM y RV inmersiva</h3>
                        <p class="text-gray-600 mb-6 flex-1">
                            Integración de Realidad Virtual inmersiva y Building Information Modeling (BIM) para mejorar la comunicación, comprensión y colaboración en proyectos de construcción.
                        </p>
                        <a href="https://www.sciencedirect.com/science/article/pii/S0926580523004934" target="_blank" rel="noopener noreferrer" class="text-blue-600 font-bold uppercase tracking-widest text-sm hover:text-blue-800 inline-flex items-center mt-auto">
                            Leer Artículo <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="group bg-white shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://x02.me/i/Z6Z8.png" alt="Ingeniería Sísmica" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-blue-900/10 mix-blend-multiply"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-light text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">Curvas de peligro sísmico en Lima</h3>
                        <p class="text-gray-600 mb-6 flex-1">
                            Investigación del CISMID sobre las fuentes sísmicas de influencia y establecimiento de curvas de peligro sísmico para Lima Metropolitana y el Callao.
                        </p>
                        <a href="https://www.cismid.uni.edu.pe/set-de-curvas-de-peligro-sismico-en-lima-con-las-fuentes-sismicas-de-influencia-proyecto-115-2018-fondecyt/" target="_blank" rel="noopener noreferrer" class="text-blue-600 font-bold uppercase tracking-widest text-sm hover:text-blue-800 inline-flex items-center mt-auto">
                            Leer Informe <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </article>
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
                
                <!-- Content Area -->
                <div class="flex-1 p-8 md:p-16 flex flex-col justify-center overflow-y-auto">
                    <h2 class="text-3xl md:text-5xl font-light text-white mb-8">¿Por qué trabajar con Argentoni?</h2>
                    <div class="text-white/90 text-lg md:text-xl leading-relaxed space-y-6 font-light max-w-4xl">
                        <p>
                            En Argentoni, buscamos individuos apasionados por la ingeniería civil, la tecnología avanzada y las soluciones sostenibles.
                        </p>
                        <p>
                            Ofrecemos un entorno dinámico y desafiante donde la innovación y el trabajo en equipo son la clave para el éxito en proyectos de infraestructura inteligente.
                        </p>
                        <p>
                            Únete a nosotros y forma parte de una empresa que está revolucionando la industria de la construcción mediante tecnologías digitales avanzadas, como BIM e IoT.
                        </p>
                    </div>
                    
                    <a href="#vacantes" id="link-vacantes" class="inline-flex items-center text-white text-sm font-bold tracking-widest uppercase mt-8 hover:text-blue-200 transition-colors group w-fit">
                        Ver Vacantes Disponibles
                        <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>
                
                <!-- Image Side -->
                <div class="hidden md:block w-1/3 relative">
                     <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Teamwork" class="absolute inset-0 w-full h-full object-cover">
                     <div class="absolute inset-0 bg-blue-900/20"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Form Panel (Slide-in from Right) -->
    <div id="form-panel" class="fixed inset-0 z-[100] transform translate-x-full transition-transform duration-500 ease-in-out">
        <div class="absolute inset-0 bg-white flex flex-col md:flex-row h-full w-full">
            
            <!-- Mobile Close Button -->
            <button id="close-form-mobile" class="md:hidden absolute top-4 right-4 z-50 text-gray-900 p-2 hover:bg-gray-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Close Button (Left strip) -->
            <div id="close-form" class="hidden md:flex w-16 h-full bg-gray-100 items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors z-50 border-r border-gray-200">
                <span class="text-gray-900 text-sm tracking-widest uppercase -rotate-90 whitespace-nowrap font-bold">Cerrar</span>
            </div>

            <!-- Content Container -->
            <div class="flex-1 flex flex-col md:flex-row overflow-hidden">
                
                <!-- Form Area -->
                <div class="flex-1 p-8 md:p-16 flex flex-col overflow-y-auto bg-white custom-scrollbar">
                    <span class="text-blue-600 font-bold tracking-widest text-xs mb-4 uppercase block">Postulación</span>
                    <h2 id="form-title" class="text-3xl md:text-4xl font-light text-gray-900 mb-8">Postular a {{ old('vacante', '[Vacante]') }}</h2>
                    
                    @if ($errors->any())
                        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700 text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700 text-sm">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700 text-sm">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ app()->environment('local') ? url('/carreras/postulacion') : secure_url('carreras/postulacion') }}" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-2xl">
                        @csrf
                        <input type="hidden" id="vacante-input" name="vacante" value="{{ old('vacante', '') }}">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Nombre</label>
                                <input type="text" name="nombre" required class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="Tu nombre">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Apellidos</label>
                                <input type="text" name="apellidos" required class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="Tus apellidos">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Correo Electrónico</label>
                                <input type="email" name="correo" required class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="tucorreo@ejemplo.com">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Teléfono</label>
                                <input type="tel" name="telefono" required class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="+51 999 999 999">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">LinkedIn / Portafolio</label>
                            <input type="url" name="linkedin" class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="https://linkedin.com/in/tu-perfil">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">CV / Hoja de Vida (PDF)</label>
                            <input type="file" name="cv" accept=".pdf" required class="w-full border border-gray-300 p-3 bg-gray-50 text-gray-600 focus:outline-none focus:border-blue-600">
                            <p class="text-xs text-gray-500 mt-1">Formato PDF, máx. 5MB.</p>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Mensaje Adicional</label>
                            <textarea rows="4" name="mensaje" class="w-full border-gray-300 focus:border-blue-600 focus:ring-blue-600 rounded-none shadow-sm py-3 px-4 bg-gray-50" placeholder="Cuéntanos por qué eres el candidato ideal..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full md:w-auto bg-blue-600 text-white font-bold uppercase tracking-widest py-4 px-12 hover:bg-blue-700 transition-colors">
                                Enviar Postulación
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Image Side (Optional context) -->
                <div class="hidden md:block w-1/3 relative bg-blue-900">
                     <img src="https://images.pexels.com/photos/3760069/pexels-photo-3760069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Únete al equipo" class="absolute inset-0 w-full h-full object-cover opacity-50 mix-blend-overlay">
                     <div class="absolute inset-0 flex items-center justify-center p-12">
                         <div class="text-white text-center">
                             <h3 class="text-3xl font-light mb-4">Tu futuro empieza aquí</h3>
                             <p class="text-blue-200 font-light">Únete a un equipo que está construyendo el mañana.</p>
                         </div>
                     </div>
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

            // Move side panel to body to avoid stacking context issues
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
                        setTimeout(() => {
                            sidePanel.classList.add('translate-x-full');
                            isScrolling = false;
                        }, 50);
                    }
                }, { passive: true });

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

            // Handle Link Vacantes
            const linkVacantes = document.getElementById('link-vacantes');
            if (linkVacantes && sidePanel) {
                linkVacantes.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Close panel
                    sidePanel.classList.add('translate-x-full');
                    
                    // Scroll to vacantes section
                    const vacantesSection = document.getElementById('vacantes');
                    if (vacantesSection) {
                        // Wait a bit for the panel to start closing
                        setTimeout(() => {
                            vacantesSection.scrollIntoView({ behavior: 'smooth' });
                        }, 300);
                    }
                });
            }
            // Form Panel Logic
            const formPanel = document.getElementById('form-panel');
            const closeForm = document.getElementById('close-form');
            const closeFormMobile = document.getElementById('close-form-mobile');
            const formTitle = document.getElementById('form-title');
            const vacanteInput = document.getElementById('vacante-input');
            const postularBtns = document.querySelectorAll('.btn-postular');

            const shouldOpenForm = {{ ($errors->any() || session('status') || session('error')) ? 'true' : 'false' }};
            if (formPanel) {
                document.body.appendChild(formPanel); // Move to body for proper stacking
                if (shouldOpenForm) {
                    formPanel.classList.remove('translate-x-full');
                }
                
                // Open Panel on Postular Click
                postularBtns.forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        const vacante = this.getAttribute('data-vacante');
                        
                        // Update Form Context
                        if (formTitle) formTitle.textContent = `Postular a ${vacante}`;
                        if (vacanteInput) vacanteInput.value = vacante;
                        
                        // Show Panel
                        formPanel.classList.remove('translate-x-full');
                    });
                });

                // Close Panel Actions
                const closeActions = [closeForm, closeFormMobile];
                closeActions.forEach(el => {
                    if (el) {
                        el.addEventListener('click', () => {
                            formPanel.classList.add('translate-x-full');
                        });
                    }
                });
            }
        });

        // Vacancy Tabs Logic
        window.showVacancy = function(index) {
            // Update Tabs
            const tabs = document.querySelectorAll('.vacancy-tab');
            tabs.forEach(tab => {
                const tabIndex = parseInt(tab.getAttribute('data-index'));
                if (tabIndex === index) {
                    // Active State
                    tab.classList.remove('opacity-50', 'border-transparent', 'hover:border-white/30');
                    tab.classList.add('opacity-100', 'border-white');
                } else {
                    // Inactive State
                    tab.classList.remove('opacity-100', 'border-white');
                    tab.classList.add('opacity-50', 'border-transparent', 'hover:border-white/30');
                }
            });

            // Update Content
            const contents = document.querySelectorAll('.vacancy-content');
            contents.forEach((content, i) => {
                if (i === index) {
                    content.classList.remove('opacity-0', 'pointer-events-none', 'z-0', 'hidden');
                    content.classList.add('opacity-100', 'z-10', 'grid');
                } else {
                    content.classList.remove('opacity-100', 'z-10', 'grid');
                    content.classList.add('opacity-0', 'pointer-events-none', 'z-0', 'hidden');
                }
            });
        };
    </script>
@endsection
