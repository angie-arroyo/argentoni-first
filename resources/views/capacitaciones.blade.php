@extends('layouts.app')

@section('title', 'Constructora Perú | Capacitaciones en Construcción Lima')
@section('meta_description', 'Capacitaciones en construcción e ingeniería para Perú. Inscríbete en Lima y potencia tus habilidades con cursos técnicos para profesionales de obra.')

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
        <!-- Video Carousel Container -->
        <div id="hero-carousel" class="absolute inset-0 w-full h-full bg-black">
            <!-- Video 1 -->
            <video id="video-1" class="hero-video absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" muted playsinline preload="auto">
                <source src="https://x02.me/i/GARX.mp4" type="video/mp4">
            </video>

            <!-- Video 2 -->
            <video id="video-2" class="hero-video absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" muted playsinline preload="auto">
                <source src="https://x02.me/i/AHEK.mp4" type="video/mp4">
            </video>
        </div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        
        <!-- Content -->
        <div class="relative z-20 flex flex-col items-start justify-center h-full text-left responsive-container">
            <div class="w-fit flex flex-col">
                <h1 class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                    Capacitaciones <span class="responsive-title text-white mb-6 drop-shadow-lg leading-tight">
                        Argentoni
                    </span>
                </h1>
                <div id="trigger-panel" class="relative font-rockness text-white responsive-subtitle self-end cursor-pointer hover:opacity-80 transition-opacity">
                    <span class="relative z-10">
                        Potencia tu futuro
                        <span class="text-red-600 responsive-arrow">&rarr;</span>
                    </span>
                    <div class="absolute -bottom-2 left-0 w-full h-full -z-0 bg-red-500 pointer-events-none" 
                         style="-webkit-mask-image: url('/svg/linea.svg'); mask-image: url('/svg/linea.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: 80%; mask-size: 80%; -webkit-mask-position: 20% bottom; mask-position: 20% bottom;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AutoCAD Course Section -->
    <section id="autocad" class="relative w-full py-12 md:py-32 bg-white">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        AutoCAD 2D y 3D <br>
                            <span class="font-bold text-blue-800">Básico-Intermedio</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="http://www.linkedin.com/in/joseph-retuerto-santiago-a5b228238" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Joseph Retuerto Santiago</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20AutoCAD%202D%20y%203D%20B%C3%A1sico-Intermedio" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">BIM y Construcción 4.0</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">40 Horas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -84 55 -49 0 -113 41 -139 90 -29 55 -29 105 0 160 26 49 90 90 139 90 16 0 38 5 50 11 41 22 48 65 48 289 l0 210 174 0 173 0 18 -47z m225 -2168 l0 -85 -680 0 -680 0 0 85 0 85 680 0 680 0 0 -85z m0 -315 c0 -51 -4 -65 -25 -85 l-24 -25 -631 0 -631 0 -24 25 c-21 20 -25 34 -25 85 l0 60 680 0 680 0 0 -60z m-190 -285 c0 -44 -110 -146 -203 -190 -180 -84 -394 -84 -574 0 -93 44 -203 146 -203 190 0 3 221 5 490 5 270 0 490 -2 490 -5z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Impresión y exportación de planos con configuraciones avanzadas</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Diseño y edición de planos arquitectónicos en 2D y 3D</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Gestión y configuración de capas y estilos de acotación</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Creación y modificación de bloques y atributos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Modelado tridimensional de estructuras y objetos</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 286 c0 246 -2 291 -17 321 -33 70 -118 92 -204 53 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 178 0 178 0 10 -80z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Precisión y eficiencia en el dibujo técnico digital</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Análisis y resolución de problemas en diseño estructural</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Organización y planificación de proyectos de construcción</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Trabajo colaborativo con equipos multidisciplinarios</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Optimización del tiempo y gestión de tareas en AutoCAD</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20AutoCAD%202D%20y%203D%20B%C3%A1sico-Intermedio" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Revit Course Section -->
    <section id="revit" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        Autodesk Revit <br>
                            <span class="font-bold text-blue-800">Especialista Modelador BIM</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/wilmar-david-de-la-cruz-puma-b619a4272/" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Wilmar David de la Cruz Puma</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Revit%20Especialista%20Modelador%20BIM" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">BIM y Construcción 4.0</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">60 Horas Lectivas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -84 55 -49 0 -113 41 -139 90 -29 55 -29 105 0 160 26 49 90 90 139 90 16 0 38 5 50 11 41 22 48 65 48 289 l0 210 174 0 173 0 18 -47z m225 -2168 l0 -85 -680 0 -680 0 0 85 0 85 680 0 680 0 0 -85z m0 -315 c0 -51 -4 -65 -25 -85 l-24 -25 -631 0 -631 0 -24 25 c-21 20 -25 34 -25 85 l0 60 680 0 680 0 0 -60z m-190 -285 c0 -44 -110 -146 -203 -190 -180 -84 -394 -84 -574 0 -93 44 -203 146 -203 190 0 3 221 5 490 5 270 0 490 -2 490 -5z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Habilidades avanzadas en el manejo de Autodesk Revit</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Especialidades de Arquitectura, Estructura y MEP</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Comprensión integral de conceptos fundamentales BIM</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 286 c0 246 -2 291 -17 321 -33 70 -118 92 -204 53 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 178 0 178 0 10 -80z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Desarrollo de proyectos de construcción reales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Integración en entornos de trabajo BIM</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Metodología práctica apoyada en base teórica</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Revit%20Especialista%20Modelador%20BIM" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MS Project Course Section -->
    <section id="msproject" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        Programación de Obras con <br>
                            <span class="font-bold text-blue-800">Ms Project</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/wilmar-david-de-la-cruz-puma-b619a4272/" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Wilmar David de la Cruz Puma</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Ms%20Project" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Gestión de la Construcción</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">29 Horas Lectivas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -63 87 -14 20 -24 74 -24 126 l0 92 230 0 230 0 0 -170 c0 -94 4 -174 8 -179 4 -5 57 -22 118 -39 123 -33 135 -31 166 22z m-1549 -1023 c29 -32 29 -77 0 -109 -43 -45 -74 -36 -240 71 -128 82 -186 117 -186 112 -2 -4 30 -54 71 -112 87 -123 88 -135 15 -208 -44 -44 -60 -45 -180 -15 -110 27 -143 45 -156 83 -9 26 -20 28 -74 15 -104 -25 -204 -10 -255 38 -79 73 -64 196 32 263 51 36 67 41 168 53 66 8 132 22 147 31 43 28 35 156 -13 207 -56 58 -163 29 -186 -50 -12 -39 -13 -69 -2 -119 21 -93 -15 -136 -123 -148 -144 -16 -181 44 -90 148 68 76 177 151 292 199 47 20 90 36 96 36 6 0 35 -21 64 -47 50 -44 54 -55 54 -135 0 -53 6 -98 13 -100 24 -6 186 -52 235 -67 122 -37 253 -102 253 -126 0 -10 22 -31 49 -47 27 -16 56 -42 66 -58 15 -25 38 -34 51 -20z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Uso avanzado de Microsoft Project v.2021</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Métodos Gantt, PERT y CPM para programación</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Gestión de recursos y costos en proyectos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Seguimiento y control de cronogramas</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Planeamiento y análisis de tareas críticas</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Crear cronogramas detallados en MS Project</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Asignar recursos y establecer líneas base</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Analizar rutas críticas y optimizar tiempos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Supervisar avances físicos y financieros</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Aplicar habilidades blandas en gestión de proyectos</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Ms%20Project" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- S10 Course Section -->
    <section id="s10" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        S10 Costos y <br>
                            <span class="font-bold text-blue-800">Presupuestos</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/wilmar-david-de-la-cruz-puma-b619a4272/" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Wilmar David de la Cruz Puma</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20S10%20Costos%20y%20Presupuestos" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Gestión de la Construcción</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">29 Horas Lectivas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 c-40 26 -51 29 -91 23 -27 -5 -76 -18 -109 -29 -53 -18 -61 -24 -65 -49 -5 -27 1 -57 15 -76 8 -11 32 -26 53 -33 55 -18 135 -16 195 5 24 8 47 15 51 15 5 0 9 -55 9 -122 l0 -123 -142 -3 c-160 -3 -157 -1 -182 -118 -13 -62 -5 -119 23 -160 25 -38 48 -47 127 -51 90 -4 95 -6 82 -32 -22 -44 -128 -108 -181 -108 -24 0 -77 -18 -118 -40 -76 -40 -81 -40 -120 1 0 0 -15 11 -33 24 -61 44 -119 46 -159 6 -52 -53 -40 -151 25 -199 43 -32 54 -33 283 -33 l240 0 0 -52 c0 -117 -40 -203 -116 -249 -73 -44 -182 -44 -264 0 -43 23 -69 28 -103 20 -25 -6 -73 -24 -107 -40 -34 -17 -70 -29 -80 -27 -10 2 -40 21 -66 43 -69 57 -94 135 -78 238 22 144 140 274 278 307 43 10 52 17 52 38 0 16 -12 28 -37 38 -74 29 -153 101 -175 160 -13 35 -14 62 -4 145 13 113 12 113 -44 137 -28 12 -75 22 -105 22 -50 0 -54 3 -54 37 0 21 5 44 11 51 21 24 186 26 250 3 41 -15 45 -15 45 -5 0 6 -13 25 -29 42 -50 53 -220 148 -275 154 -24 3 -51 1 -60 -4 -8 -6 -35 -43 -60 -83 -25 -40 -50 -72 -55 -72 -6 0 -19 14 -30 30 -31 46 -33 60 -12 100 24 45 150 143 218 170 120 48 243 47 362 -3z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Uso avanzado del software S10 v.2005</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Análisis de costos unitarios y presupuestos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Creación y manejo de bases de datos personalizadas</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Aplicación de fórmulas polinómicas en presupuestos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Programación de tiempos y recursos en proyectos</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Crear cronogramas valorizados y optimizar recursos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Analizar costos directos y gastos generales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Exportar e importar presupuestos eficientemente</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Configurar vistas y personalizar interfaces en S10</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Elaborar presupuestos completos y detallados</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20S10%20Costos%20y%20Presupuestos" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ETABS Course Section -->
    <section id="etabs" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        ETABS Concreto <br>
                            <span class="font-bold text-blue-800">Armado</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/joseph-retuerto-santiago-a5b228238/" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Joseph Retuerto Santiago</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20ETABS%20Concreto%20Armado" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Ingeniería estructural</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">36 Horas Lectivas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -58 37 -28 -32 -27 -37 7 -37 20 0 32 -7 28 -16 -4 -9 -56 -61 -116 -115 l-110 -99 -54 24 c-75 34 -148 107 -182 182 -24 54 -24 55 21 110 94 116 142 271 136 438 -5 130 -33 227 -93 320 -82 127 -208 202 -362 215 -54 5 -103 14 -110 20 -7 7 14 36 45 65 31 29 66 52 78 52 11 0 52 14 91 30 156 65 306 208 393 376 40 76 102 249 119 328 l12 59 311 -3 311 -3 0 -507 0 -508 -53 -24z m-1150 -1050 c-5 -5 -12 -53 -16 -108 -10 -150 -7 -161 72 -230 46 -40 109 -73 140 -73 31 0 94 33 140 73 79 69 82 80 72 230 -4 55 -11 103 -16 108 -5 5 -196 9 -424 9 l-415 0 24 -9z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Modelado estructural en ETABS</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Análisis sísmico estático y dinámico</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Diseño de elementos de concreto armado</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Gestión y asignación de cargas estructurales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Evaluación y optimización de estructuras</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Dominio avanzado de ETABS</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Aplicación de normativas sísmicas</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Optimización de estabilidad estructural</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Validación y control de modelos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Resolución de problemas técnicos</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20ETABS%20Concreto%20Armado" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

     <section id="agisoft-metashape" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        Agisoft <br>
                            <span class="font-bold text-blue-800">Metashape</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/giancarlo-kevin-alberco-javier-280a9039a?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAGIMMoABKCCNI7GiGXbIWtafBvc79z94dms&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BeJZ5ymoySwGV%2BhCzIlwb1w%3D%3D" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Giancarlo Kevin Alberco Javier</a>
                    </div>
                </div>
                
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Agisoft%20Metashape" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Topografía y fotogrametría</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">20 Horas</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -100 71 l-47 13 0 171 0 171 253 0 c242 0 254 1 279 21 15 12 33 43 41 72 18 67 64 115 125 134 59 18 126 6 167 -30 32 -28 45 -61 54 -129 8 -60 29 -68 183 -68 l139 0 0 185 0 185 -43 23 c-63 34 -121 98 -146 162 -18 47 -22 73 -19 129 5 87 35 149 98 203 66 56 147 73 233 50z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Conceptos de GCPs, puntos de control y sistemas de coordenadas.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Alineación de fotos y generación de nube de puntos.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Generación de ortomosaicos y modelos digitales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Manejo de errores comunes y optimización de tiempos de procesamiento.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Procesar proyectos fotogramétricos completos desde cero.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Generar modelos 3D georreferenciados con precisión técnica.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Crear ortofotos y modelos digitales para análisis topográfico.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Agisoft%20Metashape" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="programacion-matematica-cpp" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        Introducción a la <br>
                            <span class="font-bold text-blue-800">programación matemática en C++</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="https://www.linkedin.com/in/giancarlo-kevin-alberco-javier-280a9039a?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAGIMMoABKCCNI7GiGXbIWtafBvc79z94dms&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BeJZ5ymoySwGV%2BhCzIlwb1w%3D%3D" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Giancarlo Kevin Alberco Javier</a>
                    </div>
                </div>
                
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Programaci%C3%B3n%20Matem%C3%A1tica%20en%20C%2B%2B" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Programación científica</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">40 Horas</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -100 71 l-47 13 0 171 0 171 253 0 c242 0 254 1 279 21 15 12 33 43 41 72 18 67 64 115 125 134 59 18 126 6 167 -30 32 -28 45 -61 54 -129 8 -60 29 -68 183 -68 l139 0 0 185 0 185 -43 23 c-63 34 -121 98 -146 162 -18 47 -22 73 -19 129 5 87 35 149 98 203 66 56 147 73 233 50z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Sintaxis básica de C++.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Tipos de datos, estructuras de control y funciones.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Vectores y matrices.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Operaciones numéricas.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Manejo de archivos de datos experimentales.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Automatizar cálculos repetitivos complejos.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Procesar grandes volúmenes de datos numéricos.</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Optimizar tiempos de cálculo frente a Excel o software comercial.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20Programaci%C3%B3n%20Matem%C3%A1tica%20en%20C%2B%2B" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SAP2000 Course Section -->
    <section id="sap2000-analisis-diseno-estructural" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <!-- Header Info -->
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        SAP2000 <br>
                            <span class="font-bold text-blue-800">Análisis y Diseño Estructural</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="http://www.linkedin.com/in/joseph-retuerto-santiago-a5b228238" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Joseph Retuerto Santiago</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20SAP2000%20An%C3%A1lisis%20y%20Dise%C3%B1o%20Estructural" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                    <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                        <div class="flex items-center gap-3">
                            <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                        <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">Ingeniería estructural</span>
                        </div>
                    </div>
                    
                    <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                        <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                         <div class="flex items-center gap-3">
                             <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-lg md:text-2xl font-medium text-gray-800">30 Horas Lectivas</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Outcomes -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                    <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                    ¿Qué aprenderás?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                    <!-- Conocimientos -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -86 55 -35 0 -45 -6 -74 -35 l-33 -35 0 -357 0 -358 -100 0 -100 0 0 357 0 357 -29 29 c-41 40 -92 42 -134 4 l-30 -26 0 -360 0 -361 -100 0 -100 0 0 357 0 357 -33 35 c-29 29 -39 35 -74 35 -44 0 -70 -17 -86 -55 -11 -28 -14 -127 -14 -545 l0 -510 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -137 215 -263 341 -272 272 -442 640 -477 1034 -5 52 -5 52 259 52 l259 0 24 -54z"/>
                                        <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                        <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                        <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                        <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                        <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                        <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                        <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                        <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                        <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Introducción al modelado estructural en SAP2000 y consideraciones básicas para la creación de modelos</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Definición y asignación de cargas estáticas y dinámicas según normativa</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Análisis de armaduras, edificaciones rectangulares y naves industriales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Modelado y análisis de elementos tipo membrana (losas y muros)</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Fundamentos de análisis dinámico y análisis no lineal</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Diseño y revisión de estructuras de concreto armado, acero y mampostería</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Análisis sísmico de edificaciones convencionales y con dispositivos de disipación de energía</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                    <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                        <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="leading-relaxed text-sm md:text-lg">Desarrollo de criterios técnicos para interpretación de resultados y verificación estructural</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Habilidades -->
                    <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                        <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-6 md:mb-10">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                    <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                        <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                        <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                        <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z"/>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                            </div>
                            
                            <ul class="space-y-3 md:space-y-5">
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Modelar estructuras completas en SAP2000 desde cero con criterios profesionales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Definir correctamente propiedades de materiales, secciones y condiciones de apoyo</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Aplicar combinaciones de carga y realizar análisis estáticos, dinámicos y no lineales</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Interpretar desplazamientos, derivas, fuerzas internas y modos de vibración</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Diseñar y verificar elementos estructurales de concreto y acero</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Evaluar el comportamiento sísmico de edificaciones y optimizar su desempeño estructural</span>
                                </li>
                                <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                    <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                    <span class="leading-relaxed text-sm md:text-lg">Detectar errores de modelado y mejorar la eficiencia del análisis</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 md:mt-16 text-center md:hidden">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20SAP2000%20An%C3%A1lisis%20y%20Dise%C3%B1o%20Estructural" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                        <span>Solicitar Información</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="analisis-diseno-estructuras-metalicas-conexiones" class="relative w-full py-12 md:py-32 bg-white border-t border-gray-100">
    <div class="responsive-container mx-auto relative z-20">
        <div class="max-w-6xl mx-auto mb-10 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 md:gap-8 mb-8 md:mb-12">
                <div class="space-y-3">
                    <h2 class="text-3xl md:text-6xl font-light text-gray-900 tracking-tight leading-none">
                        Análisis y Diseño de <br>
                            <span class="font-bold text-blue-800">Estructuras Metálicas + Conexiones</span>
                        </h2>
                    <div class="flex flex-wrap items-center gap-2 text-sm md:text-base text-gray-500">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Tutor</span>
                        <a href="http://www.linkedin.com/in/joseph-retuerto-santiago-a5b228238" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Joseph Retuerto Santiago</a>
                    </div>
                </div>
                    
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20An%C3%A1lisis%20y%20Dise%C3%B1o%20de%20Estructuras%20Met%C3%A1licas%20%2B%20Conexiones" target="_blank" class="hidden md:inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl group rounded-none">
                    <span>Solicita más información</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
                
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 border-y border-gray-200 py-6 md:py-10 bg-white/50 backdrop-blur-sm relative z-10">
                <div class="group px-4 flex sm:block items-center justify-between sm:justify-start">
                    <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Modalidad</span>
                    <div class="flex items-center gap-3">
                        <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-lg md:text-2xl font-medium text-gray-800">Virtual</span>
                    </div>
                </div>
                
                <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                    <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Escuela</span>
                    <div class="flex items-center gap-3">
                         <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <span class="text-lg md:text-2xl font-medium text-gray-800">Ingeniería estructural</span>
                    </div>
                </div>
                
                <div class="group px-4 border-l-0 sm:border-l border-gray-100 flex sm:block items-center justify-between sm:justify-start">
                    <span class="block text-gray-400 text-xs font-bold uppercase tracking-widest mb-0 sm:mb-2 mr-4 sm:mr-0">Duración</span>
                     <div class="flex items-center gap-3">
                         <div class="p-1.5 md:p-2 bg-blue-50 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="text-lg md:text-2xl font-medium text-gray-800">35 Horas Lectivas</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 md:mb-12 flex items-center gap-3">
                <span class="w-2 h-6 md:h-8 bg-red-600 rounded-full"></span>
                ¿Qué aprenderás?
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5">
                    <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center gap-4 mb-6 md:mb-10">
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 shadow-lg shadow-blue-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                    <path d="M2360 5109 c-484 -55 -935 -313 -1231 -704 -407 -537 -474 -1268 -174 -1893 99 -206 203 -349 397 -546 177 -180 256 -306 312 -498 36 -125 46 -244 46 -560 0 -275 1 -284 24 -333 25 -55 74 -103 124 -124 19 -8 32 -21 32 -31 0 -9 16 -49 35 -88 68 -136 228 -254 414 -304 109 -30 333 -30 443 0 186 51 344 167 413 304 19 39 35 79 35 88 0 10 13 23 32 31 50 21 99 69 124 124 23 49 24 57 24 340 0 160 5 331 11 380 31 250 137 464 317 639 188 183 326 370 423 571 476 986 24 2130 -991 2508 -238 88 -550 125 -810 96z m112 -478 c3 -308 3 -310 26 -334 16 -17 39 -27 71 -31 91 -12 152 -73 158 -158 7 -94 -57 -169 -155 -182 -34 -4 -56 -14 -73 -32 -24 -25 -24 -28 -27 -255 l-3 -229 -172 0 -172 0 -25 58 c-31 71 -94 136 -168 170 -48 23 -71 27 -142 27 -72 0 -93 -4 -141 -28 -69 -33 -143 -111 -171 -177 l-21 -50 -253 0 c-139 0 -255 3 -257 8 -6 11 10 145 28 237 127 624 641 1138 1260 1259 114 22 124 23 182 25 l52 1 3 -309z m354 294 c718 -123 1263 -702 1343 -1425 5 -41 6 -78 4 -82 -2 -5 -144 -8 -314 -8 l-310 0 -24 -25 c-16 -15 -25 -35 -25 -56 0 -54 -37 -116 -84 -144 -101 -59 -233 -3 -252 106 -11 70 -15 79 -36 99 -21 19 -35 20 -250 20 l-228 0 0 178 0 177 45 19 c65 26 139 97 172 164 24 50 28 69 28 147 0 71 -5 100 -22 137 -31 69 -104 142 -168 169 l-55 24 0 258 0 257 44 0 c24 0 83 -7 132 -15z m-960 -1446 c52 -25 85 -73 95 -142 15 -92 15 -92 279 -95 l230 -3 0 -174 0 -174 -53 -24 c-76 -35 -122 -79 -159 -155 -29 -59 -33 -76 -33 -152 0 -71 4 -94 26 -140 37 -79 81 -125 155 -161 l64 -32 0 -473 0 -474 -298 0 -298 0 -13 88 c-15 108 -68 269 -123 375 -60 116 -138 216 -272 351 -173 175 -272 312 -363 502 -80 170 -139 389 -156 587 l-6 57 302 0 c222 0 309 4 327 13 29 14 47 47 55 98 8 53 44 101 95 127 55 27 92 28 146 1z m1149 -286 c27 -70 115 -154 190 -182 79 -30 195 -26 270 10 66 31 131 97 162 165 l24 54 259 0 259 0 -5 -52 c-45 -447 -202 -775 -528 -1102 -127 -128 -204 -229 -264 -343 -55 -106 -108 -267 -123 -375 l-13 -88 -298 0 -298 0 0 510 c0 418 -3 517 -14 545 -16 38 -42 55 -105 72 l-41 12 0 174 0 173 229 3 c204 3 230 5 239 20 5 9 13 46 16 81 9 87 43 145 101 172 63 30 124 23 177 -20 28 -23 48 -53 62 -94z"/>
                                    <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                    <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                    <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                    <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                    <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                    <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                    <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                    <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                    <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                    <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                </g>
                                </svg>
                            </div>
                            <h4 class="text-xl md:text-3xl font-bold text-gray-900">Conocimientos</h4>
                        </div>
                        
                        <ul class="space-y-3 md:space-y-5">
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Fundamentos del análisis estructural aplicado a estructuras metálicas.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Comportamiento mecánico del acero estructural y criterios de diseño.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Diseño de elementos estructurales: vigas, columnas, arriostres y pórticos.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Diseño de conexiones empernadas, soldadas y sistemas de anclaje.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Aplicación de normativas nacionales e internacionales en acero estructural.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Consideraciones económicas y optimización del diseño.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Proceso constructivo: fabricación, transporte, montaje y lanzamiento de estructuras.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 text-gray-600 group/item hover:text-gray-900 transition-colors">
                                <div class="mt-1 shrink-0 w-5 h-5 md:w-6 md:h-6 rounded-full bg-blue-50 flex items-center justify-center group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="leading-relaxed text-sm md:text-lg">Análisis de problemáticas reales de obra en proyectos ejecutados.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-3xl p-6 md:p-12 shadow-xl shadow-gray-100/50 border border-gray-100 relative overflow-hidden group hover:border-red-200 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/5">
                    <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-red-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center gap-4 mb-6 md:mb-10">
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-red-600 shadow-lg shadow-red-600/20 rounded-2xl flex items-center justify-center text-white transform group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 512 512" fill="currentColor">
                                <g transform="translate(0,512) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                    <path d="M804 5086 c-17 -8 -42 -29 -55 -47 -21 -29 -24 -47 -27 -139 -2 -58 -7 -108 -11 -113 -4 -4 -47 15 -97 43 -66 37 -99 50 -130 50 -74 0 -93 -22 -260 -310 -135 -233 -153 -270 -154 -310 0 -68 26 -101 124 -156 48 -28 86 -56 86 -64 0 -8 -38 -36 -86 -64 -104 -59 -127 -89 -121 -161 3 -43 26 -88 154 -310 164 -283 183 -305 257 -305 31 0 64 13 130 50 50 28 93 47 97 43 4 -5 9 -55 11 -113 3 -92 6 -110 27 -139 42 -59 58 -61 396 -61 281 0 309 2 343 19 60 31 72 63 72 184 0 64 4 108 11 112 5 4 50 -16 98 -44 113 -65 176 -68 230 -10 32 35 310 523 317 557 14 71 -22 120 -136 187 -44 25 -80 50 -80 55 0 5 36 30 80 55 114 66 150 116 136 186 -8 42 -291 530 -326 564 -21 20 -42 29 -79 33 -45 4 -57 0 -140 -48 -49 -28 -95 -49 -100 -45 -7 4 -11 49 -11 112 0 88 -3 111 -20 138 -39 63 -54 65 -397 65 -236 -1 -315 -4 -339 -14z m476 -333 c0 -99 24 -142 103 -183 34 -18 81 -46 103 -62 61 -43 113 -42 197 6 l66 36 42 -72 c23 -40 55 -95 70 -121 l29 -48 -31 -17 c-55 -30 -113 -77 -127 -102 -9 -18 -12 -65 -10 -162 3 -157 7 -164 106 -220 28 -16 52 -35 52 -41 0 -5 -11 -29 -24 -51 -12 -23 -42 -74 -65 -114 l-42 -72 -66 36 c-88 50 -132 50 -204 2 -30 -19 -78 -47 -107 -62 -68 -34 -91 -80 -92 -178 l0 -68 -140 0 -140 0 0 78 c0 88 -19 132 -71 160 -17 9 -63 36 -102 59 -106 61 -120 61 -212 14 -43 -23 -79 -40 -80 -38 -41 62 -136 242 -130 244 32 11 121 72 139 96 19 26 21 42 21 167 0 125 -2 141 -21 167 -18 24 -107 85 -139 96 -6 2 104 211 131 246 2 2 31 -14 65 -35 86 -52 123 -51 222 7 41 24 89 52 106 61 52 28 71 72 71 161 l0 77 140 0 140 0 0 -67z"/>
                                    <path d="M1084 4166 c-104 -46 -103 -208 2 -252 45 -19 78 -18 122 5 47 24 72 67 72 121 0 103 -100 167 -196 126z"/>
                                    <path d="M2492 4600 c-18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -406 0 -329 2 -378 17 -409 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -907 0 c-888 0 -909 -1 -941 -20 -18 -11 -41 -34 -52 -52 -19 -31 -20 -51 -20 -298 l0 -266 -77 -10 c-108 -15 -183 -53 -264 -133 -110 -110 -156 -247 -131 -392 18 -103 55 -173 131 -250 88 -87 203 -139 311 -139 l30 0 0 -269 c0 -262 1 -269 23 -302 49 -74 -50 -69 1315 -69 l1222 0 0 -32 c0 -18 7 -62 15 -97 54 -228 282 -380 515 -344 182 28 333 167 375 344 8 35 15 78 15 96 l0 32 274 3 c385 4 366 -16 366 376 l0 262 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -18 103 -55 173 -131 250 -88 87 -203 139 -311 139 l-30 0 0 500 0 500 30 0 c110 0 237 58 319 146 70 74 106 147 123 243 24 139 -19 275 -123 385 -82 88 -209 146 -319 146 l-30 0 0 263 c0 293 -3 311 -69 354 l-34 23 -996 0 c-976 0 -997 0 -1029 -20z m1848 -546 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 180 0 180 30 0 c110 0 237 58 319 146 104 110 147 246 123 385 -17 96 -53 169 -123 243 -82 88 -209 146 -319 146 l-30 0 0 180 0 180 820 0 820 0 0 -286z m-1920 -1814 l0 -180 -30 0 c-108 0 -223 -52 -311 -139 -145 -145 -178 -344 -87 -528 69 -140 242 -252 391 -253 l37 0 0 -180 0 -180 -820 0 -820 0 0 286 c0 242 -2 291 -16 320 -33 70 -120 93 -205 54 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 820 0 820 0 0 -180z m646 100 c14 -102 56 -188 126 -258 66 -67 122 -100 207 -124 116 -32 238 -18 343 39 62 34 147 119 181 182 28 51 57 156 57 209 l0 32 180 0 180 0 0 -286 c0 -246 2 -291 17 -321 33 -70 118 -92 204 -53 58 26 105 25 159 -2 132 -67 132 -249 0 -315 -54 -28 -101 -29 -159 -3 -86 39 -171 17 -204 -53 -15 -30 -17 -75 -17 -321 l0 -286 -286 0 c-246 0 -291 -2 -321 -17 -70 -33 -92 -118 -53 -204 26 -58 25 -105 -2 -159 -67 -132 -249 -132 -315 0 -28 54 -29 101 -3 159 39 86 17 171 -53 204 -30 15 -75 17 -321 17 l-286 0 0 286 c0 246 -2 291 -17 321 -33 70 -118 92 -204 53 -58 -26 -105 -25 -159 3 -132 66 -132 248 0 315 54 27 101 28 159 2 86 -39 171 -17 204 53 15 30 17 75 17 321 l0 286 180 0 180 0 0 -32z"/>
                                    <path d="M415 4715 c-29 -28 -32 -70 -10 -102 8 -12 86 -67 173 -122 175 -111 204 -120 247 -76 32 31 32 76 3 109 -13 14 -90 68 -173 120 -166 106 -197 115 -240 71z"/>
                                    <path d="M4465 4644 c-181 -115 -189 -123 -189 -170 0 -43 39 -84 81 -84 30 0 303 167 346 211 35 37 36 81 2 114 -43 44 -74 35 -240 -71z"/>
                                    <path d="M154 4100 c-64 -25 -72 -119 -13 -150 28 -15 354 -110 378 -110 36 0 75 43 75 84 0 60 -23 73 -226 132 -101 30 -185 53 -188 53 -3 0 -15 -4 -26 -9z"/>
                                    <path d="M4747 4056 c-197 -59 -221 -73 -221 -132 0 -41 39 -84 75 -84 24 0 350 95 378 110 65 34 45 140 -29 154 -14 2 -105 -19 -203 -48z"/>
                                    <path d="M25 3385 c-32 -31 -32 -75 -1 -112 l24 -28 200 -3 199 -3 32 26 c40 34 43 84 6 120 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                    <path d="M4635 3385 c-37 -36 -34 -86 6 -120 l32 -26 199 3 200 3 24 28 c31 37 31 81 -1 112 -24 25 -25 25 -230 25 -205 0 -206 0 -230 -25z"/>
                                    <path d="M405 2789 c-55 -17 -137 -41 -182 -55 -46 -14 -92 -34 -103 -46 -40 -43 -15 -119 45 -134 23 -6 100 13 308 77 89 28 99 33 114 64 22 45 4 92 -43 111 -19 8 -35 14 -36 13 -2 0 -48 -14 -103 -30z"/>
                                    <path d="M4574 2806 c-18 -8 -36 -27 -44 -46 -11 -27 -11 -36 3 -65 15 -31 25 -36 114 -64 292 -89 313 -92 353 -49 36 39 23 100 -27 126 -16 9 -362 114 -367 112 -1 -1 -15 -7 -32 -14z"/>
                                    <path d="M584 2170 c-87 -56 -167 -110 -176 -122 -10 -11 -18 -35 -18 -53 0 -45 51 -89 92 -81 15 3 99 51 186 106 157 99 182 123 182 171 0 28 -53 79 -83 79 -13 0 -94 -44 -183 -100z"/>
                                    <path d="M4324 2260 c-27 -11 -54 -48 -54 -75 1 -41 29 -67 185 -167 180 -115 209 -123 251 -74 28 32 31 76 7 104 -25 29 -332 222 -352 221 -9 0 -26 -4 -37 -9z"/>
                                </g>
                                </svg>
                            </div>
                            <h4 class="text-xl md:text-3xl font-bold text-gray-900">Habilidades</h4>
                        </div>
                        
                        <ul class="space-y-3 md:space-y-5">
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Diseñar y verificar elementos estructurales de acero bajo criterios normativos.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Analizar el comportamiento global de estructuras metálicas.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Dimensionar y detallar conexiones empernadas, soldadas y de anclaje.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Evaluar estabilidad, resistencia y desempeño estructural.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Optimizar diseños considerando criterios técnicos y económicos.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Interpretar planos de taller y comprender el proceso de fabricación y montaje.</span>
                            </li>
                            <li class="flex items-start gap-3 md:gap-4 group/item hover:text-gray-900 text-gray-600 transition-colors">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-red-500 mt-2 md:mt-3 shrink-0 group-hover/item:scale-125 transition-transform"></span>
                                <span class="leading-relaxed text-sm md:text-lg">Resolver casos prácticos basados en proyectos reales ejecutados.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 md:mt-16 text-center md:hidden">
                <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20capacitaci%C3%B3n%20de%20An%C3%A1lisis%20y%20Dise%C3%B1o%20de%20Estructuras%20Met%C3%A1licas%20%2B%20Conexiones" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-blue-800 text-white font-bold uppercase tracking-widest text-sm hover:bg-blue-700 transition-all duration-300 shadow-lg w-full rounded-none">
                    <span>Solicitar Información</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
    </section>
    
    <div id="side-panel-capacitaciones" class="fixed inset-0 z-[100] transform translate-x-full transition-transform duration-500 ease-in-out">
        <div class="absolute inset-0 bg-blue-700 flex flex-col md:flex-row h-full w-full">
            
            <!-- Mobile Close Button -->
            <button id="close-panel-mobile" class="md:hidden absolute top-4 right-4 z-50 text-white p-2 hover:opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Close Button (Left strip) -->
            <div id="close-panel-capacitaciones" class="hidden md:flex w-16 h-full bg-blue-800 items-center justify-center cursor-pointer hover:bg-blue-900 transition-colors z-50">
                <span class="text-white text-sm tracking-widest uppercase -rotate-90 whitespace-nowrap">Cerrar</span>
            </div>

            <!-- Content Container -->
            <div class="flex-1 flex flex-col md:flex-row overflow-hidden">
                
                <!-- Section 1: Description (Left) -->
                <div class="w-full md:w-1/3 px-6 pt-16 pb-2 md:p-12 border-b md:border-b-0 md:border-r border-blue-600 flex flex-col justify-center shrink-0 md:shrink h-auto md:h-full relative">
                    <div class="hidden md:block aspect-video bg-blue-800 rounded-lg mb-8 overflow-hidden relative shadow-lg">
                        <img src="https://x02.me/i/NNU4XD.jpg" alt="Capacitaciones Argentoni" class="object-cover w-full h-full opacity-80 hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <h2 class="text-2xl md:text-5xl font-light text-white mb-1 md:mb-6 leading-tight">Potencia <br class="hidden md:block">Tu Futuro</h2>
                    <p class="text-blue-100 text-xs md:text-lg leading-relaxed mb-0 md:mb-8 font-light hidden md:block">
                        Nuestras capacitaciones están diseñadas por expertos de la industria para potenciar tus habilidades técnicas y prácticas. 
                        Accede a conocimientos actualizados, certificaciones reconocidas y una red de contactos que impulsará tu carrera.
                    </p>
                    <p class="text-blue-200 text-xs font-light md:hidden max-w-[90%] leading-tight">
                        Capacitaciones de expertos para potenciar tus habilidades técnicas y prácticas.
                    </p>
                </div>

                <!-- Section 2: Benefits Text (Right) -->
                <div class="w-full md:w-2/3 px-6 py-4 md:p-12 flex flex-col flex-1 bg-blue-700 overflow-hidden justify-between">
                    <div class="flex-1 flex flex-col justify-center">
                        <h3 class="text-base md:text-2xl font-bold text-white mb-3 md:mb-8 uppercase tracking-wider border-b border-blue-500 pb-1 md:pb-4 inline-block w-fit">Tu Perfil Profesional</h3>
                        
                        <div class="space-y-4 md:space-y-8 text-blue-100 font-light">
                            <p class="text-xs md:text-xl leading-relaxed hidden md:block">
                                Al finalizar nuestras capacitaciones, no solo obtendrás una certificación, sino que elevarás tu estándar profesional a un nuevo nivel de excelencia en la industria de la construcción.
                            </p>

                            <div class="grid grid-cols-2 md:grid-cols-2 gap-x-2 gap-y-3 md:gap-8 mt-1 md:mt-8">
                                <div class="space-y-0.5 md:space-y-3">
                                    <h4 class="text-white font-bold text-xs md:text-lg uppercase tracking-wide flex items-center gap-1.5 md:gap-2">
                                        <svg class="w-3.5 h-3.5 md:w-6 md:h-6 text-blue-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Dominio
                                    </h4>
                                    <p class="text-[10px] md:text-base text-blue-200 leading-tight">
                                        Normativas y técnicas.
                                    </p>
                                </div>

                                <div class="space-y-0.5 md:space-y-3">
                                    <h4 class="text-white font-bold text-xs md:text-lg uppercase tracking-wide flex items-center gap-1.5 md:gap-2">
                                        <svg class="w-3.5 h-3.5 md:w-6 md:h-6 text-blue-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                        Seguridad
                                    </h4>
                                    <p class="text-[10px] md:text-base text-blue-200 leading-tight">
                                        Mitigación de riesgos.
                                    </p>
                                </div>

                                <div class="space-y-0.5 md:space-y-3">
                                    <h4 class="text-white font-bold text-xs md:text-lg uppercase tracking-wide flex items-center gap-1.5 md:gap-2">
                                        <svg class="w-3.5 h-3.5 md:w-6 md:h-6 text-blue-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        Liderazgo
                                    </h4>
                                    <p class="text-[10px] md:text-base text-blue-200 leading-tight">
                                        Gestión de equipos.
                                    </p>
                                </div>

                                <div class="space-y-0.5 md:space-y-3">
                                    <h4 class="text-white font-bold text-xs md:text-lg uppercase tracking-wide flex items-center gap-1.5 md:gap-2">
                                        <svg class="w-3.5 h-3.5 md:w-6 md:h-6 text-blue-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                        Estrategia
                                    </h4>
                                    <p class="text-[10px] md:text-base text-blue-200 leading-tight">
                                        Optimización de recursos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 md:pt-8 border-t border-blue-600 mt-2 md:mt-8 block shrink-0">
                        <p class="text-blue-200 md:text-white font-medium italic text-[11px] md:text-lg text-center opacity-80 md:opacity-100 leading-tight">
                            "La capacitación constante es la herramienta más poderosa para construir el futuro que deseas."
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts for Hero Video Carousel & Panel -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Video Carousel Logic
            const videos = document.querySelectorAll('.hero-video');
            let currentIndex = 0;
            
            // Start the first video
            if(videos.length > 0) {
                videos[0].play().catch(e => console.log("Autoplay prevented:", e));
            }

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

            // Panel Interaction Logic
            const triggerPanel = document.getElementById('trigger-panel');
            const sidePanel = document.getElementById('side-panel-capacitaciones');
            const closePanel = document.getElementById('close-panel-capacitaciones');
            const closePanelMobile = document.getElementById('close-panel-mobile');

            // Move side panel to body
            if (sidePanel) {
                document.body.appendChild(sidePanel);
            }

            function openPanel() {
                if (sidePanel) {
                    sidePanel.classList.remove('translate-x-full');
                }
            }

            function closePanelFunc() {
                if (sidePanel) {
                    sidePanel.classList.add('translate-x-full');
                }
            }

            if (triggerPanel) {
                triggerPanel.addEventListener('click', openPanel);
            }
            
            if (closePanel) {
                closePanel.addEventListener('click', closePanelFunc);
            }

            if (closePanelMobile) {
                closePanelMobile.addEventListener('click', closePanelFunc);
            }

            // Scroll closure (Welcome pattern)
            let isScrolling = false;
            window.addEventListener('wheel', function(e) {
                if (sidePanel && !sidePanel.classList.contains('translate-x-full') && !isScrolling) {
                    isScrolling = true;
                    setTimeout(() => {
                        closePanelFunc();
                        isScrolling = false;
                    }, 50);
                }
            }, { passive: true });

            // Touch closure (Welcome pattern)
            window.addEventListener('touchmove', function(e) {
                if (sidePanel && !sidePanel.classList.contains('translate-x-full') && !isScrolling) {
                    isScrolling = true;
                    setTimeout(() => {
                        closePanelFunc();
                        isScrolling = false;
                    }, 50);
                }
            }, { passive: true });

            // Custom Select Logic
            const customSelects = document.querySelectorAll('.custom-select');

            customSelects.forEach(select => {
                const trigger = select.querySelector('.select-trigger');
                const options = select.querySelector('.select-options');
                const label = select.querySelector('.select-label');
                const input = select.querySelector('input[type="hidden"]');
                const optionItems = select.querySelectorAll('.option-item');
                const icon = trigger.querySelector('svg');

                // Toggle dropdown
                trigger.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent closing immediately
                    
                    // Close other selects first
                    customSelects.forEach(otherSelect => {
                        if (otherSelect !== select) {
                            const otherOptions = otherSelect.querySelector('.select-options');
                            const otherIcon = otherSelect.querySelector('.select-trigger svg');
                            otherOptions.classList.add('opacity-0', 'invisible', '-translate-y-2');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });

                    const isClosed = options.classList.contains('invisible');

                    if (isClosed) {
                        options.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        options.classList.add('opacity-0', 'invisible', '-translate-y-2');
                        icon.style.transform = 'rotate(0deg)';
                    }
                });

                // Select option
                optionItems.forEach(item => {
                    item.addEventListener('click', (e) => {
                        e.stopPropagation();
                        const value = item.dataset.value;
                        const text = item.querySelector('span').innerText;
                        
                        // Update input
                        input.value = value;
                        
                        // Update label
                        label.innerText = text;
                        label.classList.add('text-gray-900');
                        label.classList.remove('text-gray-500');
                        
                        // Highlight selected
                        optionItems.forEach(opt => {
                            opt.classList.remove('bg-blue-50', 'text-blue-700');
                            opt.querySelector('svg').classList.add('opacity-0');
                        });
                        item.classList.add('bg-blue-50', 'text-blue-700');
                        item.querySelector('svg').classList.remove('opacity-0');
                        
                        // Close dropdown
                        options.classList.add('opacity-0', 'invisible', '-translate-y-2');
                        icon.style.transform = 'rotate(0deg)';
                    });
                });
            });

            // Close selects when clicking outside
            document.addEventListener('click', (e) => {
                customSelects.forEach(select => {
                    const options = select.querySelector('.select-options');
                    const icon = select.querySelector('.select-trigger svg');
                    
                    if (!select.contains(e.target)) {
                        options.classList.add('opacity-0', 'invisible', '-translate-y-2');
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });
        });
    </script>
@endsection
