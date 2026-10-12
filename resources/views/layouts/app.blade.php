<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Argentoni Constructora')</title>
    <meta name="description" content="@yield('meta_description', 'Argentoni Constructora - Líderes en construcción y servicios de ingeniería.')">
    <meta name="application-name" content="Argentoni">
    <meta name="apple-mobile-web-app-title" content="Argentoni">
    <meta property="og:site_name" content="Argentoni">
    @php
        $schemaOrganization = [
            "@context" => "https://schema.org",
            "@type" => "ConstructionCompany",
            "name" => "Argentoni Constructora",
            "alternateName" => "Argentoni",
            "url" => url('/'),
            "logo" => url('/logo/logo.webp'),
            "image" => url('/logo/logo.webp'),
            "telephone" => "+51906119928",
            "sameAs" => [
                "https://www.instagram.com/argentoni.sac/",
                "https://www.youtube.com/@ARGENTONIS.A.C",
                "https://www.tiktok.com/@argentoni_engineering"
            ],
            "address" => [
                [
                    "@type" => "PostalAddress",
                    "streetAddress" => "Lima, Perú",
                    "addressLocality" => "Lima",
                    "addressRegion" => "Lima",
                    "addressCountry" => "PE"
                ],
                [
                    "@type" => "PostalAddress",
                    "streetAddress" => "Arequipa, Perú",
                    "addressLocality" => "Arequipa",
                    "addressRegion" => "Arequipa",
                    "addressCountry" => "PE"
                ],
                [
                    "@type" => "PostalAddress",
                    "streetAddress" => "Cusco, Perú",
                    "addressLocality" => "Cusco",
                    "addressRegion" => "Cusco",
                    "addressCountry" => "PE"
                ]
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => -12.0464,
                "longitude" => -77.0428
            ],
            "areaServed" => [
                "Perú",
                "Lima",
                "Cusco",
                "Arequipa",
                "Trujillo"
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens" => "08:00",
                    "closes" => "18:00",
                    "timeZone" => "America/Lima"
                ]
            ],
            "openingHours" => "Mo-Sa 08:00-18:00",
            "contactPoint" => [
                [
                    "@type" => "ContactPoint",
                    "contactType" => "ventas",
                    "telephone" => "+51906119928",
                    "areaServed" => "PE",
                    "availableLanguage" => ["es"]
                ]
            ],
            "department" => [
                [
                    "@type" => "LocalBusiness",
                    "name" => "Argentoni Constructora Arequipa",
                    "address" => [
                        "@type" => "PostalAddress",
                        "addressLocality" => "Arequipa",
                        "addressRegion" => "Arequipa",
                        "addressCountry" => "PE"
                    ],
                    "geo" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => -16.409,
                        "longitude" => -71.5375
                    ],
                    "telephone" => "+51906119928"
                ],
                [
                    "@type" => "LocalBusiness",
                    "name" => "Argentoni Constructora Cusco",
                    "address" => [
                        "@type" => "PostalAddress",
                        "addressLocality" => "Cusco",
                        "addressRegion" => "Cusco",
                        "addressCountry" => "PE"
                    ],
                    "geo" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => -13.5319,
                        "longitude" => -71.9675
                    ],
                    "telephone" => "+51906119928"
                ],
                [
                    "@type" => "LocalBusiness",
                    "name" => "Argentoni Constructora Trujillo",
                    "address" => [
                        "@type" => "PostalAddress",
                        "streetAddress" => "Trujillo, Perú",
                        "addressLocality" => "Trujillo",
                        "addressRegion" => "La Libertad",
                        "addressCountry" => "PE"
                    ],
                    "geo" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => -8.1116,
                        "longitude" => -79.0288
                    ],
                    "telephone" => "+51906119928"
                ]
            ]
        ];
        $schemaWebsite = [
            "@context" => "https://schema.org",
            "@type" => "WebSite",
            "name" => "Argentoni",
            "alternateName" => "Argentoni Constructora",
            "url" => url('/')
        ];
        $schemaData = [$schemaOrganization, $schemaWebsite];
    @endphp
    <script type="application/ld+json">{!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <style>
        @font-face {
            font-family: 'Rockness';
            src: url('/font/Rockness.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Apercu Medium Pro';
            src: url('/font/apercu_medium_pro.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .font-rockness {
            font-family: 'Rockness', sans-serif;
        }

        body {
            font-family: 'Apercu Medium Pro', sans-serif;
        }
        
        /* Apply to all headings and specific elements to ensure consistency */
        h1, h2, h3, h4, h5, h6, header a, footer a, nav a, .font-heading, button, input, textarea {
            font-family: 'Apercu Medium Pro', sans-serif;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1a1a1a; 
        }
        ::-webkit-scrollbar-thumb {
            background: #ffffff; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #e5e5e5; 
        }

        /* Lenis Recommended CSS */
        html.lenis, html.lenis body {
            height: auto;
        }
        .lenis.lenis-smooth {
            scroll-behavior: auto !important;
        }
        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }
        .lenis.lenis-stopped {
            overflow: hidden;
        }
        .lenis.lenis-scrolling iframe {
            pointer-events: none;
        }
    </style>
</head>
<body class="@yield('body_class', 'bg-white') text-gray-800 flex flex-col min-h-screen relative overflow-x-hidden">
    @php
        $randomServiceSlug = collect([
            'diseno-elementos-estructurales',
            'diseno-instalaciones-sanitarias',
            'ajustes-poligonales-topograficas'
        ])->random();
    @endphp

    <!-- Header Overlay -->
    <header id="main-header" data-header-style="@yield('header_style', 'black')" class="absolute top-0 left-0 w-full z-50 border-b border-white/50 @yield('header_class', 'bg-black') transition-all duration-300">
        <div class="max-w-[1920px] mx-auto px-4 md:px-6 h-20 grid grid-cols-2 lg:grid-cols-4 items-center">
            
            <!-- Left: Logo (Col 1) -->
            <div id="header-col-1" class="flex-shrink-0 lg:col-span-1 flex items-center justify-start lg:justify-center h-full border-r border-transparent transition-colors duration-300">
                <a href="/">
                    <img id="header-logo" src="/logo/logo.webp" alt="Argentoni" class="h-8 md:h-10 lg:h-10 xl:h-14 w-auto object-contain brightness-0 invert transition-all duration-300">
                </a>
            </div>

            <!-- Mobile Menu Toggle (Visible only on mobile) -->
            <div class="lg:hidden col-span-1 flex justify-end items-center h-full gap-4">

                
                <button id="mobile-menu-btn" class="group flex flex-col justify-center items-end w-8 h-8 space-y-1.5 focus:outline-none z-[70] relative">
                    <span class="block w-8 h-0.5 bg-white transition-all duration-300 group-hover:w-6"></span>
                    <span class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="block w-8 h-0.5 bg-white transition-all duration-300 group-hover:w-6"></span>
                </button>
            </div>

            <!-- Center: Navigation (Col 2 & 3) -->
            <nav id="header-nav" class="hidden lg:flex lg:col-span-2 items-center justify-center gap-0 text-[10px] xl:text-sm font-medium tracking-wide uppercase text-white h-full border-r border-transparent transition-colors duration-300">
                
                <!-- Mega Menu Wrapper: Nuestra Empresa -->
                <div class="group h-full flex items-center">
                    <a href="{{ route('nuestra-identidad') }}" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Nuestra Identidad
                    </a>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="max-w-[1920px] mx-auto px-6 grid grid-cols-4 min-h-[400px]">
                            
                            <!-- Col 1: Intro (Blue) -->
                            <div class="col-span-1 bg-blue-600 p-10 text-white flex flex-col relative">
                                <!-- Extend Blue Background to Left Edge -->
                                <div class="absolute top-0 right-full w-screen h-full bg-blue-600"></div>
                                
                                <h3 class="text-3xl font-normal mb-6">Sobre Nosotros</h3>
                                <p class="text-blue-100 leading-relaxed text-lg mb-8">
                                    Argentoni es una empresa internacional de servicios de construcción y es un constructor líder en diversos segmentos del mercado.
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('nuestra-identidad') }}" class="font-bold uppercase tracking-widest text-sm hover:text-blue-200 inline-flex items-center group/link">
                                        Conócenos <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Col 2: Who We Are (Part 1) -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Quiénes Somos</h4>
                                <ul class="space-y-4 text-gray-600">
                                    <li><a href="{{ route('nuestra-identidad.sobre-nosotros') }}" class="hover:text-blue-600 transition-colors block">Sobre Nosotros</a></li>
                                    <li><a href="{{ route('nuestra-identidad.nuestro-liderazgo') }}" class="hover:text-blue-600 transition-colors block">Nuestro Liderazgo</a></li>
                                    <li><a href="{{ route('nuestra-identidad.sectores-de-mercado') }}" class="hover:text-blue-600 transition-colors block">Sectores de Mercado</a></li>
                                    <li><a href="{{ route('nuestra-identidad.fundacion-argentoni') }}" class="hover:text-blue-600 transition-colors block">Fundación Argentoni</a></li>
                                </ul>
                            </div>

                            <div class="col-span-2 p-6 bg-gray-50 flex flex-col">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Destacado</h4>
                                <a href="{{ route('nuestra-identidad') }}" class="flex-1 rounded-lg overflow-hidden relative group/card cursor-pointer shadow-sm block">
                                    <img src="https://x02.me/i/4FKHU3.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Nuestra Identidad">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-6">
                                        <div>
                                            <span class="text-white font-bold text-xl block mb-2">Nuestra Identidad</span>
                                            <span class="text-white/80 text-sm">Conoce lo que nos inspira y nos define.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mega Menu Wrapper -->
                <div class="group h-full flex items-center">
                    <a href="{{ route('servicios.show', $randomServiceSlug) }}" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Nuestros Servicios
                    </a>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="max-w-[1920px] mx-auto px-6 grid grid-cols-4 min-h-[400px]">
                            
                            <!-- Col 1: Intro (Blue) -->
                            <div class="col-span-1 bg-blue-600 p-10 text-white flex flex-col relative">
                                <!-- Extend Blue Background to Left Edge -->
                                <div class="absolute top-0 right-full w-screen h-full bg-blue-600"></div>
                                
                                <h3 class="text-3xl font-normal mb-6">Nuestros Servicios</h3>
                                <p class="text-blue-100 leading-relaxed text-lg mb-8">
                                    La empresa se dedica a la ejecución de obras en general, prestación de servicios de ingeniería y servicios técnicos especializados.
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('servicios.show', $randomServiceSlug) }}" class="font-bold uppercase tracking-widest text-sm hover:text-blue-200 inline-flex items-center group/link">
                                        Ver Todos <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Col 2: Services List -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Servicios Especializados</h4>
                                <ul class="space-y-4 text-gray-600">
                                    <li><a href="{{ route('servicios.show', 'diseno-elementos-estructurales') }}" class="hover:text-blue-600 transition-colors block">Diseños de elementos estructurales</a></li>
                                    <li><a href="{{ route('servicios.show', 'diseno-instalaciones-sanitarias') }}" class="hover:text-blue-600 transition-colors block">Diseño de instalaciones sanitarias</a></li>
                                    <li><a href="{{ route('servicios.show', 'ajustes-poligonales-topograficas') }}" class="hover:text-blue-600 transition-colors block">Ajustes de polígonales topográficas</a></li>
                                    <li><a href="{{ route('servicios.show', 'diseno-viales') }}" class="hover:text-blue-600 transition-colors block">Diseño viales</a></li>
                                    <li><a href="{{ route('servicios.show', 'diseno-aceros') }}" class="hover:text-blue-600 transition-colors block">Diseño de aceros</a></li>
                                    <li><a href="{{ route('servicios.show', 'levantamiento-geometrico-fotogrametria') }}" class="hover:text-blue-600 transition-colors block">Levantamiento geométrico mediante fotogrametría</a></li>
                                    <li><a href="{{ route('servicios.show', 'diseno-instalaciones-electricas') }}" class="hover:text-blue-600 transition-colors block">Diseños de instalaciones eléctricas</a></li>
                                    <li><a href="{{ route('servicios.show', 'mecanica-suelos-pavimentos') }}" class="hover:text-blue-600 transition-colors block">Mecánica de suelos y pavimentos</a></li>
                                    <li>
                                        <a href="{{ route('servicios.equipos') }}" class="transition-colors relative inline-block font-bold text-gray-800 hover:text-blue-700 pb-1 group/tech">
                                            <span class="relative z-10">Tecnología Topográfica y Aérea</span>
                                            <div class="absolute -bottom-3 -left-[35%] w-[170%] h-full -z-0 bg-blue-600 opacity-90 pointer-events-none rotate-2" 
                                                 style="-webkit-mask-image: url('/svg/linea.svg'); mask-image: url('/svg/linea.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: 100% 100%; mask-size: 100% 100%; -webkit-mask-position: center bottom; mask-position: center bottom;">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Col 3: Featured Image -->
                            <div class="col-span-2 p-6 bg-gray-50 flex flex-col">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Destacado</h4>
                                <a href="{{ route('servicios.show', $randomServiceSlug) }}" class="flex-1 rounded-lg overflow-hidden relative group/card cursor-pointer shadow-sm block">
                                    <img src="https://images.pexels.com/photos/8482865/pexels-photo-8482865.jpeg?auto=compress&cs=tinysrgb&w=800" class="absolute inset-0 w-full h-full object-cover" alt="Service Highlight">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-6">
                                        <div>
                                            <span class="text-white font-bold text-xl block mb-2">Soluciones Integrales</span>
                                            <span class="text-white/80 text-sm">Descubre cómo transformamos ideas en realidad.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Mega Menu Wrapper: Tecnología -->
                <div class="group h-full flex items-center">
                    <a href="{{ route('servicios.equipos') }}" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Tecnología
                    </a>

                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="max-w-[1920px] mx-auto px-6 grid grid-cols-4 min-h-[400px]">

                            <!-- Col 1: Intro (Blue) -->
                            <div class="col-span-1 bg-blue-600 p-10 text-white flex flex-col relative">
                                <!-- Extend Blue Background to Left Edge -->
                                <div class="absolute top-0 right-full w-screen h-full bg-blue-600"></div>

                                <h3 class="text-3xl font-normal mb-6">Tecnología</h3>
                                <p class="text-blue-100 leading-relaxed text-lg mb-8">
                                    Equipos de precisión, drones y servicios de fotogrametría para llevar tus proyectos al siguiente nivel.
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('servicios.equipos') }}" class="font-bold uppercase tracking-widest text-sm hover:text-blue-200 inline-flex items-center group/link">
                                        Ver Catálogo <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Col 2: Equipos -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Equipos</h4>
                                <ul class="space-y-4 text-gray-600">
                                    <li><a href="{{ route('servicios.equipos') }}#estaciones-totales" class="hover:text-blue-600 transition-colors block">Estaciones Totales y Teodolitos</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#gps-gnss-rtk" class="hover:text-blue-600 transition-colors block">GPS/GNSS y Sistemas RTK</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#niveles-opticos" class="hover:text-blue-600 transition-colors block">Niveles Ópticos y Láser</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#drones-fotogrametria" class="hover:text-blue-600 transition-colors block">Drones y Fotogrametría Aérea</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#escaneres-3d" class="hover:text-blue-600 transition-colors block">Escáneres 3D y Captura de Realidad</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#software-procesamiento" class="hover:text-blue-600 transition-colors block">Software y Procesamiento</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}#accesorios-repuestos" class="hover:text-blue-600 transition-colors block">Accesorios y Repuestos</a></li>
                                </ul>
                            </div>

                            <!-- Col 3: Servicios Geoespaciales -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Servicios Geoespaciales</h4>
                                <ul class="space-y-4 text-gray-600">
                                    <li><a href="{{ route('servicios.show', 'ajustes-poligonales-topograficas') }}" class="hover:text-blue-600 transition-colors block">Levantamientos Topográficos</a></li>
                                    <li><a href="{{ route('servicios.show', 'levantamiento-geometrico-fotogrametria') }}" class="hover:text-blue-600 transition-colors block">Fotogrametría y Levantamiento con Drones</a></li>
                                    <li><a href="{{ route('soporte.posventa') }}" class="hover:text-blue-600 transition-colors block">Soporte y Posventa</a></li>
                                    <li><a href="{{ route('servicios.equipos') }}" class="hover:text-blue-600 transition-colors block font-bold">Ver Catálogo Completo</a></li>
                                </ul>
                            </div>

                            <!-- Col 4: Featured Image -->
                            <div class="col-span-1 p-6 bg-gray-50 flex flex-col">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Destacado</h4>
                                <a href="{{ route('servicios.equipos') }}" class="flex-1 rounded-lg overflow-hidden relative group/card cursor-pointer shadow-sm block">
                                    <img src="https://images.pexels.com/photos/9875441/pexels-photo-9875441.jpeg?auto=compress&cs=tinysrgb&w=800" class="absolute inset-0 w-full h-full object-cover" alt="Tecnología y Drones">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-6">
                                        <div>
                                            <span class="text-white font-bold text-xl block mb-2">Equipos y Drones</span>
                                            <span class="text-white/80 text-sm">Precisión topográfica con tecnología de última generación.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Mega Menu Wrapper: Capacitaciones -->
                <div class="group h-full flex items-center">
                    <a href="/capacitaciones" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Capacitaciones
                    </a>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="max-w-[1920px] mx-auto px-6 grid grid-cols-4 min-h-[400px]">
                            
                            <!-- Col 1: Intro (Blue) -->
                            <div class="col-span-1 bg-blue-600 p-10 text-white flex flex-col relative">
                                <!-- Extend Blue Background to Left Edge -->
                                <div class="absolute top-0 right-full w-screen h-full bg-blue-600"></div>
                                
                                <h3 class="text-3xl font-normal mb-6">Capacitaciones</h3>
                                <p class="text-blue-100 leading-relaxed text-lg mb-8">
                                    Potencia tus habilidades con nuestros cursos especializados en software y técnicas de ingeniería y construcción.
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ url('/capacitaciones') }}" class="font-bold uppercase tracking-widest text-sm hover:text-blue-200 inline-flex items-center group/link">
                                        Ver Cursos <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Col 2: Software -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
            <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Software de Ingeniería</h4>
            <ul class="space-y-4 text-gray-600">
                <li><a href="{{ url('/capacitaciones') }}#autocad" class="hover:text-blue-600 transition-colors block">Autocad</a></li>
                <li><a href="{{ url('/capacitaciones') }}#revit" class="hover:text-blue-600 transition-colors block">Revit</a></li>
                <li><a href="{{ url('/capacitaciones') }}#msproject" class="hover:text-blue-600 transition-colors block">Ms Project</a></li>
                <li><a href="{{ url('/capacitaciones') }}#s10" class="hover:text-blue-600 transition-colors block">S10</a></li>
                <li><a href="{{ url('/capacitaciones') }}#etabs" class="hover:text-blue-600 transition-colors block">Etabs</a></li>
                <li><a href="{{ url('/capacitaciones') }}#sap2000-analisis-diseno-estructural" class="hover:text-blue-600 transition-colors block">SAP2000</a></li>
                <li><a href="{{ url('/capacitaciones') }}#analisis-diseno-estructuras-metalicas-conexiones" class="hover:text-blue-600 transition-colors block">Estructuras Metálicas + Conexiones</a></li>
                <li><a href="{{ url('/capacitaciones') }}#agisoft-metashape" class="hover:text-blue-600 transition-colors block">Agisoft Metashape</a></li>
                <li><a href="{{ url('/capacitaciones') }}#programacion-matematica-cpp" class="hover:text-blue-600 transition-colors block">Programación matemática en C++</a></li>
                <li><a href="{{ url('/capacitaciones/diseno-geometrico-carreteras-civil-3d-seguridad-vial') }}" class="hover:text-blue-600 transition-colors block">Diseño Geométrico de Carreteras con Civil 3D + Seguridad Vial</a></li>
            </ul>
        </div>

                            <!-- Col 3 & 4: Featured Image -->
                            <div class="col-span-2 p-6 bg-gray-50 flex flex-col">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Aprende con Expertos</h4>
                                <a href="{{ url('/capacitaciones') }}" class="flex-1 rounded-lg overflow-hidden relative group/card cursor-pointer shadow-sm block">
                                    <img src="https://x02.me/i/NH5F.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Training Session">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-6">
                                        <div>
                                            <span class="text-white font-bold text-xl block mb-2">Formación Continua</span>
                                            <span class="text-white/80 text-sm">Mejora tu perfil profesional.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Mega Menu Wrapper: Carreras -->
                <div class="group h-full flex items-center">
                    <a href="/carreras" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Carreras
                    </a>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="max-w-[1920px] mx-auto px-6 grid grid-cols-4 min-h-[400px]">
                            
                            <!-- Col 1: Intro (Blue) -->
                            <div class="col-span-1 bg-blue-600 p-10 text-white flex flex-col relative">
                                <!-- Extend Blue Background to Left Edge -->
                                <div class="absolute top-0 right-full w-screen h-full bg-blue-600"></div>
                                
                                <h3 class="text-3xl font-normal mb-6">Carreras</h3>
                                <p class="text-blue-100 leading-relaxed text-lg mb-8">
                                    ¡Una carrera gratificante te espera en Argentoni! Únete a nuestro equipo y construye algunos de los proyectos más emocionantes e innovadores.
                                </p>
                                <div class="mt-auto">
                                    <a href="/carreras" class="font-bold uppercase tracking-widest text-sm hover:text-blue-200 inline-flex items-center group/link">
                                        Explorar Carreras <span class="ml-2 group-hover/link:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Col 2: Join The Team -->
                            <div class="col-span-1 p-10 bg-white border-r border-gray-100">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Secciones de Carreras</h4>
                                <ul class="space-y-4 text-gray-600">
                                    <li><a href="/carreras#vacantes" class="hover:text-blue-600 transition-colors block">Vacantes Disponibles</a></li>
                                    <li><a href="/carreras#beneficios" class="hover:text-blue-600 transition-colors block">Beneficios</a></li>
                                    <li><a href="/carreras#proceso-postulacion" class="hover:text-blue-600 transition-colors block">Proceso de Postulación</a></li>
                                    <li><a href="/carreras#enviar-cv" class="hover:text-blue-600 transition-colors block">Enviar CV</a></li>
                                    <li><a href="/carreras#articulos-recomendados" class="hover:text-blue-600 transition-colors block">Artículos Recomendados</a></li>
                                </ul>
                            </div>

                            <!-- Col 3 & 4: Argentoni & You (Featured Image) -->
                            <div class="col-span-2 p-10 bg-white flex flex-col">
                                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs">Argentoni y Tú</h4>
                                <a href="/carreras" class="flex-1 rounded-lg overflow-hidden relative group/card cursor-pointer shadow-sm block">
                                    <img src="https://x02.me/i/AEQGVZ.jpg" class="absolute inset-0 w-full h-full object-cover object-top" alt="Your Career Starts Here">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-8">
                                        <div>
                                            <h5 class="text-white font-bold text-2xl mb-2">Tu Carrera Comienza Aquí</h5>
                                            <p class="text-white/90 text-sm">Descubre las oportunidades que tenemos para ti y construye tu futuro con nosotros.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Mega Menu Wrapper: Capacidades -->
                <div class="group h-full flex items-center">
                    <a href="#" class="hover:text-gray-300 transition-all duration-300 font-bold h-full flex items-center relative z-10 px-2 xl:px-3 group-hover:bg-white group-hover:text-gray-900">
                        <!-- Orange Top Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        Capacidades
                    </a>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-0 top-full w-full bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t border-gray-100 text-gray-800 z-50">
                        <div class="w-full grid grid-cols-3 min-h-[400px]">
                            <a href="{{ url('/capacidades/industrial-mineria') }}" class="relative overflow-hidden flex flex-col justify-end p-8 text-white min-h-[400px] group/card">
                                <img src="https://i.postimg.cc/8cQNvDBh/view-ialomitei-cave-bucegi-mountains-romania.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Industrial y Minería">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent"></div>
                                <div class="relative z-10">
                                    <h3 class="text-xl font-bold uppercase tracking-widest mb-4">Industrial y Minería</h3>
                                    <ul class="text-sm text-white/90 space-y-2 mb-6">
                                        <li>Plataformas estructurales</li>
                                        <li>Simulación geotécnica</li>
                                        <li>Modelado de plantas industriales</li>
                                    </ul>
                                    <span class="inline-flex items-center bg-red-700 hover:bg-red-600 transition-colors text-white text-xs font-bold uppercase tracking-widest px-4 py-2">Descubre nuestras capacidades</span>
                                </div>
                            </a>
                            <a href="{{ url('/capacidades/infraestructura-publica') }}" class="relative overflow-hidden flex flex-col justify-end p-8 text-white min-h-[400px] group/card border-l border-gray-100">
                                <img src="https://i.postimg.cc/43909c8j/young-businessman-working-talking-phone.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Infraestructura Pública">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent"></div>
                                <div class="relative z-10">
                                    <h3 class="text-xl font-bold uppercase tracking-widest mb-4">Infraestructura Pública</h3>
                                    <ul class="text-sm text-white/90 space-y-2 mb-6">
                                        <li>Diseño de carreteras y puentes</li>
                                        <li>Optimización de transporte público</li>
                                        <li>Gestión de activos de infraestructura</li>
                                    </ul>
                                    <span class="inline-flex items-center bg-red-700 hover:bg-red-600 transition-colors text-white text-xs font-bold uppercase tracking-widest px-4 py-2">Descubre nuestras capacidades</span>
                                </div>
                            </a>
                            <a href="{{ url('/capacidades/estructuras-metalicas') }}" class="relative overflow-hidden flex flex-col justify-end p-8 text-white min-h-[400px] group/card border-l border-gray-100">
                                <img src="https://i.postimg.cc/Y97dLsLm/factory-worker-working-warehouse-handling-metal-material-production.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Estructuras Metálicas">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent"></div>
                                <div class="relative z-10">
                                    <h3 class="text-xl font-bold uppercase tracking-widest mb-4">Estructuras Metálicas</h3>
                                    <ul class="text-sm text-white/90 space-y-2 mb-6">
                                        <li>Diseño y cálculo de estructuras</li>
                                        <li>Optimización por elementos finitos</li>
                                        <li>Especialización en obras complejas industriales</li>
                                    </ul>
                                    <span class="inline-flex items-center bg-red-700 hover:bg-red-600 transition-colors text-white text-xs font-bold uppercase tracking-widest px-4 py-2">Descubre nuestras capacidades</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Right: Contact Actions (Col 4) -->
            <div id="header-actions" class="hidden lg:flex lg:col-span-1 items-center justify-end gap-4 xl:gap-6 text-[10px] xl:text-sm font-medium tracking-wide uppercase text-white h-full lg:pr-4 xl:pr-8 transition-colors duration-300">
                <a href="{{ route('cotizar') }}" class="group h-full flex items-center relative px-4 xl:px-6 font-bold transition-all duration-300 hover:bg-white hover:text-gray-900">
                    <div class="absolute top-0 left-0 w-full h-1 bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span>COTIZA</span>
                </a>
            </div>
            
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-white transform translate-x-full transition-transform duration-300 lg:hidden flex flex-col overflow-y-auto">
        
        <!-- Close Button Area -->
        <div class="flex justify-end p-6">
            <button id="mobile-menu-close" class="text-gray-900 hover:text-gray-600 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <nav class="flex flex-col px-6 py-6 space-y-4">
            <!-- Nuestra Empresa -->
            <div class="group">
                <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Nuestra Identidad
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <a href="{{ route('nuestra-identidad') }}#sobre-nosotros" class="block text-base text-gray-600 hover:text-blue-600 transition-colors">Sobre Nosotros</a>
                    <a href="{{ route('nuestra-identidad') }}#nuestro-liderazgo" class="block text-base text-gray-600 hover:text-blue-600 transition-colors">Nuestro Liderazgo</a>
                    <a href="{{ route('nuestra-identidad') }}#sectores-mercado" class="block text-base text-gray-600 hover:text-blue-600 transition-colors">Sectores de Mercado</a>
                    <a href="{{ route('nuestra-identidad') }}#fundacion-argentoni" class="block text-base text-gray-600 hover:text-blue-600 transition-colors">Fundación Argentoni</a>
                </div>
            </div>

            <!-- Servicios -->
            <div class="group">
                <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Servicios
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <a href="{{ route('servicios.show', 'diseno-elementos-estructurales') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseños de elementos estructurales</a>
                    <a href="{{ route('servicios.show', 'diseno-instalaciones-sanitarias') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseño de instalaciones sanitarias</a>
                    <a href="{{ route('servicios.show', 'ajustes-poligonales-topograficas') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Ajustes de polígonales topográficas</a>
                    <a href="{{ route('servicios.show', 'diseno-viales') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseño viales</a>
                    <a href="{{ route('servicios.show', 'diseno-aceros') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseño de aceros</a>
                    <a href="{{ route('servicios.show', 'levantamiento-geometrico-fotogrametria') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Levantamiento geométrico mediante fotogrametría</a>
                    <a href="{{ route('servicios.show', 'diseno-instalaciones-electricas') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseños de instalaciones eléctricas</a>
                    <a href="{{ route('servicios.show', 'mecanica-suelos-pavimentos') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Mecánica de suelos y pavimentos</a>
                    <a href="{{ route('servicios.equipos') }}" class="mobile-menu-link block text-base font-bold text-blue-700 hover:text-blue-800 transition-colors">Tecnología Topográfica y Aérea</a>
                </div>
            </div>

            <!-- Tecnología -->
            <div class="group">
                <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Tecnología
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest pt-1">Equipos</p>
                    <a href="{{ route('servicios.equipos') }}#estaciones-totales" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Estaciones Totales y Teodolitos</a>
                    <a href="{{ route('servicios.equipos') }}#gps-gnss-rtk" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">GPS/GNSS y Sistemas RTK</a>
                    <a href="{{ route('servicios.equipos') }}#niveles-opticos" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Niveles Ópticos y Láser</a>
                    <a href="{{ route('servicios.equipos') }}#drones-fotogrametria" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Drones y Fotogrametría Aérea</a>
                    <a href="{{ route('servicios.equipos') }}#escaneres-3d" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Escáneres 3D y Captura de Realidad</a>
                    <a href="{{ route('servicios.equipos') }}#software-procesamiento" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Software y Procesamiento</a>
                    <a href="{{ route('servicios.equipos') }}#accesorios-repuestos" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Accesorios y Repuestos</a>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest pt-3">Servicios Geoespaciales</p>
                    <a href="{{ route('servicios.show', 'ajustes-poligonales-topograficas') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Levantamientos Topográficos</a>
                    <a href="{{ route('servicios.show', 'levantamiento-geometrico-fotogrametria') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Fotogrametría y Levantamiento con Drones</a>
                    <a href="{{ route('soporte.posventa') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Soporte y Posventa</a>
                    <a href="{{ route('servicios.equipos') }}" class="mobile-menu-link block text-base font-bold text-blue-700 hover:text-blue-800 transition-colors">Ver Catálogo Completo</a>
                </div>
            </div>

            <!-- Capacidades -->
            <div class="group">
                 <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Capacidades
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <a href="{{ url('/capacidades/industrial-mineria') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Industrial y Minería</a>
                    <a href="{{ url('/capacidades/infraestructura-publica') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Infraestructura Pública</a>
                    <a href="{{ url('/capacidades/estructuras-metalicas') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Estructuras Metálicas</a>
                </div>
            </div>

            <!-- Capacitaciones -->
            <div class="group">
                <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Capacitaciones
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <a href="{{ url('/capacitaciones') }}#autocad" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Autocad</a>
                    <a href="{{ url('/capacitaciones') }}#revit" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Revit</a>
                    <a href="{{ url('/capacitaciones') }}#msproject" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Ms Project</a>
                    <a href="{{ url('/capacitaciones') }}#s10" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">S10</a>
                    <a href="{{ url('/capacitaciones') }}#etabs" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Etabs</a>
                    <a href="{{ url('/capacitaciones') }}#sap2000-analisis-diseno-estructural" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">SAP2000</a>
                    <a href="{{ url('/capacitaciones') }}#analisis-diseno-estructuras-metalicas-conexiones" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Estructuras Metálicas + Conexiones</a>
                    <a href="{{ url('/capacitaciones') }}#agisoft-metashape" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Agisoft Metashape</a>
                    <a href="{{ url('/capacitaciones') }}#programacion-matematica-cpp" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Programación matemática en C++</a>
                    <a href="{{ url('/capacitaciones/diseno-geometrico-carreteras-civil-3d-seguridad-vial') }}" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Diseño Geométrico de Carreteras con Civil 3D + Seguridad Vial</a>
                </div>
            </div>

            <!-- Carreras -->
            <div class="group">
                <button class="flex items-center justify-between w-full text-gray-900 font-bold text-xl uppercase tracking-wide focus:outline-none mobile-dropdown-btn hover:text-blue-600 transition-colors py-2">
                    Carreras
                    <svg class="w-5 h-5 transform transition-transform duration-300 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 space-y-3 pl-4 border-l-2 border-gray-100 mobile-dropdown-content">
                    <a href="/carreras#vacantes" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Vacantes Disponibles</a>
                    <a href="/carreras#beneficios" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Beneficios</a>
                    <a href="/carreras#proceso-postulacion" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Proceso de Postulación</a>
                    <a href="/carreras#enviar-cv" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Enviar CV</a>
                    <a href="/carreras#articulos-recomendados" class="mobile-menu-link block text-base text-gray-600 hover:text-blue-600 transition-colors">Artículos Recomendados</a>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="pt-8 mt-4">
                <div class="flex flex-col gap-6">
                    <!-- Cotiza Button Mobile -->
                    <a href="{{ route('cotizar') }}" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-all duration-300 shadow-lg flex items-center justify-center gap-2 uppercase tracking-wide">
                        <span>COTIZA CON NOSOTROS</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    
                    <div class="flex gap-12 items-start">
                        <!-- Vertical Divider removed as layout changed to column -->
                        
                        <!-- Social Links -->
                        <div class="flex flex-col space-y-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 font-normal text-lg transition-colors">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 font-normal text-lg transition-colors">Instagram</a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 font-normal text-lg transition-colors">LinkedIn</a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 font-normal text-lg transition-colors">YouTube</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="flex-grow relative">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white pt-12 pb-6 relative z-20 overflow-hidden">
        <div class="max-w-[1920px] mx-auto px-6 relative z-10">
            
            <!-- Top Row -->
            <div class="grid grid-cols-1 lg:grid-cols-4 border-b border-white/50 pb-12 mb-8 gap-y-8 lg:gap-y-0">
                
                <!-- Left: Logo (Col 1) -->
                <div class="lg:col-span-1 flex flex-col items-center justify-center h-full px-4 text-center">
                    <img src="/logo/logo.webp" alt="Argentoni" class="h-14 w-auto object-contain brightness-0 invert mb-4">
                </div>

                <!-- Center: Navigation Links (Col 2 & 3) -->
                <div class="lg:col-span-2 flex items-center justify-center h-full px-4">
                    <ul class="flex flex-wrap justify-center gap-12 text-base font-medium">
                        <li><a href="{{ route('nuestra-identidad') }}" class="hover:text-blue-200 transition-colors">Nuestra Identidad</a></li>
                        <li><a href="{{ route('servicios.show', $randomServiceSlug) }}" class="hover:text-blue-200 transition-colors">Servicios</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors">Proyectos</a></li>
                        <li><a href="/capacitaciones" class="hover:text-blue-200 transition-colors">Capacitaciones</a></li>
                        <li><a href="/carreras" class="hover:text-blue-200 transition-colors">Carreras</a></li>
                    </ul>
                </div>

                <!-- Right: Social Icons (Col 4) -->
                <div class="lg:col-span-1 flex flex-col items-center justify-center h-full px-4">
                    <div class="flex space-x-6">
                        <a href="https://www.facebook.com/profile.php?id=61588093034582" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.073C22 6.504 17.523 2 12 2S2 6.504 2 12.073c0 4.995 3.657 9.127 8.438 9.927v-7.02H7.898v-2.907h2.54V9.797c0-2.522 1.492-3.915 3.777-3.915 1.094 0 2.238.197 2.238.197v2.475h-1.26c-1.243 0-1.63.775-1.63 1.57v1.887h2.773l-.443 2.907h-2.33v7.02C18.343 21.2 22 17.068 22 12.073z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/argentoni.sac/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/111976578/admin/dashboard/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.48 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 23.5h4V7.5h-4v16zM8.5 7.5h3.8v2.2h.1c.5-1 1.8-2.2 3.8-2.2 4.1 0 4.8 2.7 4.8 6.2v9.8h-4v-8.7c0-2.1 0-4.8-3-4.8-3 0-3.4 2.3-3.4 4.6v8.9h-4v-16z"/></svg>
                        </a>
                        <a href="https://x.com/argentoni050" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2H21l-6.418 7.338L22 22h-6.172l-4.826-6.305L5.478 22H2.72l6.862-7.846L2 2h6.316l4.364 5.73L18.244 2zm-1.083 18h1.872L6.86 4h-2l12.301 16z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@argentoni_engineering" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5 1c.3 2.6 2 4.3 4.6 4.5v3.2c-1.7 0-3.3-.5-4.7-1.5v6.6c0 4-3.3 7.2-7.3 7.2-4 0-7.2-3.2-7.2-7.2 0-4 3.2-7.2 7.2-7.2.4 0 .8 0 1.2.1v3.4c-.4-.1-.8-.2-1.2-.2-2.1 0-3.8 1.7-3.8 3.9 0 2.1 1.7 3.8 3.8 3.8 2.2 0 3.9-1.7 3.9-3.8V1h3.5z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@ARGENTONIS.A.C" target="_blank" rel="noopener noreferrer" class="hover:text-blue-200 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="grid grid-cols-1 lg:grid-cols-4 text-xs text-blue-200 gap-y-4 lg:gap-y-0">
                
                <!-- Left: Copyright (Col 1) -->
                <div class="lg:col-span-1 flex flex-col justify-center items-center lg:items-center h-full px-4 text-center">
                    <p>&copy; 2026 Argentoni Constructora.</p>
                    <p>Todos los derechos reservados.</p>
                </div>

                <!-- Center: Legal Text (Col 2 & 3) -->
                <div class="lg:col-span-2 flex flex-col justify-center items-center h-full px-4 text-center">
                    <p class="mb-2">Argentoni es un empleador que ofrece igualdad de oportunidades: raza, color, religión, sexo, orientación sexual, identidad de género, origen nacional, discapacidad, estado de veterano protegido u otras características protegidas por la ley aplicable.</p>
                    <a href="#" class="font-bold hover:text-white transition-colors">Política de Derechos Humanos</a>
                </div>

                <!-- Right: Legal Links (Col 4) -->
                <div class="lg:col-span-1 flex flex-col justify-center items-center h-full px-4 text-center">
                    <div class="flex space-x-2">
                        <a href="{{ route('legal.alerta-fraude') }}" class="hover:text-white transition-colors">Alerta de Fraude</a>
                        <span>|</span>
                        <a href="{{ route('legal.privacidad') }}" class="hover:text-white transition-colors">Política de Privacidad</a>
                        <span>|</span>
                        <a href="{{ route('legal.cookies') }}" class="hover:text-white transition-colors">Configuración de Cookies</a>
                    </div>
                    
                    <!-- Developer Credit -->
                    <a href="https://llamatech.vercel.app/" target="_blank" rel="noopener noreferrer" class="mt-4 text-[10px] uppercase tracking-wider opacity-60 hover:opacity-100 hover:text-white transition-all">
                        Desarrollado por LlamaTech
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>
    <script>
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>

    <!-- Header Scroll Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('main-header');
            const logo = document.getElementById('header-logo');
            const nav = document.getElementById('header-nav');
            const actions = document.getElementById('header-actions');
            const col1 = document.getElementById('header-col-1'); 
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuCloseBtn = document.getElementById('mobile-menu-close');
            const dropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
            
            // Mobile Menu Toggle
            mobileMenuBtn.addEventListener('click', () => {
                const isOpen = !mobileMenu.classList.contains('translate-x-full');
                
                if (isOpen) {
                    // Close Menu
                    mobileMenu.classList.add('translate-x-full');
                    document.body.style.overflow = '';
                    
                    // Reset Hamburger Icon
                    const spans = mobileMenuBtn.querySelectorAll('span');
                    spans[0].style.transform = '';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = '';
                } else {
                    // Open Menu
                    mobileMenu.classList.remove('translate-x-full');
                    document.body.style.overflow = 'hidden';
                    
                    // Animate Hamburger Icon to X
                    const spans = mobileMenuBtn.querySelectorAll('span');
                    spans[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
                    spans[1].style.opacity = '0';
                    spans[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
                }
            });

            // Mobile Menu Close Button
            if (mobileMenuCloseBtn) {
                mobileMenuCloseBtn.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                    document.body.style.overflow = '';
                    
                    // Reset Hamburger Icon
                    const spans = mobileMenuBtn.querySelectorAll('span');
                    spans[0].style.transform = '';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = '';
                });
            }


            // Mobile Dropdown Toggles
            dropdownBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const content = btn.nextElementSibling;
                    const icon = btn.querySelector('svg');
                    
                    content.classList.toggle('hidden');
                    icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                });
            });

            let lastScrollY = window.scrollY;
            
            const updateHeader = () => {
                const currentScrollY = window.scrollY;
                const headerStyle = header.dataset.headerStyle || 'transparent';
                
                if (currentScrollY <= 0) {
                    // AT TOP: Reset to absolute
                    header.classList.remove('fixed', 'bg-white', 'shadow-md', 'translate-y-0');
                    header.classList.add('absolute', 'border-b', 'border-white/50');
                    
                    // Handle Background based on style
                    if (headerStyle === 'black') {
                        header.classList.remove('bg-transparent');
                        header.classList.add('bg-black');

                        // White Borders for Service Pages
                        col1.classList.remove('border-transparent', 'border-gray-200');
                        col1.classList.add('border-white/50');
                        
                        nav.classList.remove('border-transparent', 'border-gray-200');
                        nav.classList.add('border-white/50');
                    } else {
                        header.classList.remove('bg-black');
                        header.classList.add('bg-transparent');

                        // Transparent Borders for Home/Others
                        col1.classList.remove('border-gray-200', 'border-white/50');
                        col1.classList.add('border-transparent');
                        
                        nav.classList.remove('border-gray-200', 'border-white/50');
                        nav.classList.add('border-transparent');
                    }
                    
                    header.style.transform = ''; // Clear transform
                    
                    // Reset Text Colors (White)
                    nav.classList.remove('text-gray-800');
                    nav.classList.add('text-white');
                    
                    actions.classList.remove('text-gray-800');
                    actions.classList.add('text-white');
                    
                    // Reset Logo (White)
                    logo.classList.add('brightness-0', 'invert');
                    
                    // Mobile Toggle: Ensure white
                    if(mobileMenuBtn) {
                        const spans = mobileMenuBtn.querySelectorAll('span');
                        spans.forEach(span => span.classList.replace('bg-gray-900', 'bg-white'));
                    }
                    
                } else if (currentScrollY > lastScrollY) {
                    // SCROLLING DOWN
                    // If it is fixed (was shown), hide it.
                    if (header.classList.contains('fixed')) {
                         header.style.transform = 'translateY(-100%)';
                    }
                    // If it is absolute, do nothing (it scrolls away naturally).
                    
                } else if (currentScrollY < lastScrollY) {
                    // SCROLLING UP
                    if (header.classList.contains('absolute')) {
                         // Switch to fixed
                         header.classList.remove('absolute', 'bg-transparent', 'bg-black', 'border-b', 'border-white/50');
                         header.classList.add('fixed', 'bg-white', 'shadow-md');
                         
                         // Set styles (Dark)
                         nav.classList.remove('text-white');
                         nav.classList.add('text-gray-800');
                         actions.classList.remove('text-white');
                         actions.classList.add('text-gray-800');
                         logo.classList.remove('brightness-0', 'invert');
                         
                         // Set Borders (Gray)
                        col1.classList.remove('border-transparent', 'border-white/50');
                        col1.classList.add('border-gray-200');
                        
                        nav.classList.remove('border-transparent', 'border-white/50');
                        nav.classList.add('border-gray-200');

                         // Mobile Toggle: Ensure dark
                         if(mobileMenuBtn) {
                             const spans = mobileMenuBtn.querySelectorAll('span');
                             spans.forEach(span => span.classList.replace('bg-white', 'bg-gray-900'));
                         }

                         // Prepare for animation
                         header.style.transform = 'translateY(-100%)';
                         void header.offsetWidth; // Force reflow
                         header.style.transform = 'translateY(0)';
                    } else {
                        // Already fixed, ensure visible
                        header.style.transform = 'translateY(0)';
                    }
                }
                
                lastScrollY = currentScrollY;
            };

            window.addEventListener('scroll', updateHeader);
            updateHeader();

            // Close mobile menu when a link is clicked
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                     const mobileMenu = document.getElementById('mobile-menu');
                     const mobileMenuBtn = document.getElementById('mobile-menu-btn');

                     if (mobileMenu) {
                        mobileMenu.classList.add('translate-x-full');
                        document.body.style.overflow = '';
                     }
                     if (mobileMenuBtn) {
                        const spans = mobileMenuBtn.querySelectorAll('span');
                        spans[0].style.transform = '';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = '';
                     }
                });
            });
        });
    </script>
    <a id="whatsapp-button" href="https://wa.me/51906119928?text=Hola%20Argentoni%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n." aria-label="Contactar por WhatsApp" class="fixed bottom-4 left-4 z-50">
        <div class="w-12 h-12 rounded-full bg-[#25D366] shadow-lg flex items-center justify-center transition-transform hover:scale-105">
            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"/>
                <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"/>
                <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"/>
                <defs>
                    <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5BD066"/>
                        <stop offset="1" stop-color="#27B43E"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </a>
    <div id="whatsapp-chat" class="fixed bottom-20 left-4 z-50 w-80 bg-white rounded-xl shadow-2xl border border-gray-200 opacity-0 translate-y-2 scale-95 pointer-events-none transition-all duration-200 ease-out hidden">
        <div class="flex items-center justify-between px-4 py-3 bg-[#25D366] text-white rounded-t-xl">
            <div class="flex items-center gap-2">
                <img src="{{ asset('logo/bot.webp') }}" alt="Bot Argentoni" class="w-6 h-6 rounded-full ring-1 ring-white/30 object-cover">
                <span class="font-semibold text-sm">Chat con Argentoni</span>
            </div>
            <button id="whatsapp-chat-close" class="p-1 rounded hover:bg-white/10">
                <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="p-4 space-y-3">
            <p class="text-sm text-gray-700">¿Qué necesitas?</p>
            <textarea id="whatsapp-chat-input" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-400" rows="3" placeholder="Escribe tu mensaje"></textarea>
            <button id="whatsapp-chat-send" class="w-full bg-[#25D366] hover:bg-green-600 text-white font-medium py-2 rounded-lg">Enviar a WhatsApp</button>
        </div>
    </div>
    <script>
        (function () {
            var btn = document.getElementById('whatsapp-button');
            var chat = document.getElementById('whatsapp-chat');
            var closeBtn = document.getElementById('whatsapp-chat-close');
            var input = document.getElementById('whatsapp-chat-input');
            var sendBtn = document.getElementById('whatsapp-chat-send');
            var number = '51906119928';
            if (!btn || !chat) return;
            function openChat() {
                chat.classList.remove('hidden');
                requestAnimationFrame(function () {
                    chat.classList.remove('opacity-0', 'translate-y-2', 'scale-95', 'pointer-events-none');
                });
            }
            function closeChat() {
                chat.classList.add('opacity-0', 'translate-y-2', 'scale-95', 'pointer-events-none');
                setTimeout(function () {
                    chat.classList.add('hidden');
                }, 180);
            }
            btn.addEventListener('click', function (e) {
                var isDesktop = window.matchMedia('(min-width: 1024px)').matches;
                if (isDesktop) {
                    e.preventDefault();
                    if (chat.classList.contains('hidden')) {
                        openChat();
                    } else {
                        closeChat();
                    }
                }
            });
            closeBtn.addEventListener('click', function () {
                closeChat();
            });
            sendBtn.addEventListener('click', function () {
                var text = (input.value || '').trim();
                if (!text) return;
                var url = 'https://wa.me/' + number + '?text=' + encodeURIComponent(text);
                window.open(url, '_blank');
                closeChat();
                input.value = '';
            });
        })();
    </script>

</body>
</html>
