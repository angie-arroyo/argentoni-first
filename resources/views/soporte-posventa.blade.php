@extends('layouts.app')

@section('title', 'Constructora Perú | Soporte y Posventa de Equipos Lima')
@section('meta_description', 'Soporte técnico, garantía y mantenimiento para equipos topográficos y drones en Perú. Capacitación post-venta y repuestos originales con atención especializada.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<main class="bg-white relative z-20 min-h-screen">

    <!-- Hero Banner -->
    <div class="relative h-[60vh] min-h-[420px] w-full overflow-hidden">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Surveyor_on_site.jpg"
             alt="Técnico realizando trabajo de campo con equipo topográfico"
             class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20"></div>
        <div class="relative z-10 h-full flex items-end">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 w-full">
                <span class="text-blue-400 font-bold tracking-widest uppercase text-xs mb-3 block">Soporte y Posventa</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight leading-tight max-w-2xl">
                    Acompañamiento Técnico Después de tu Compra
                </h1>
                <p class="mt-4 text-lg text-gray-200 font-light leading-relaxed max-w-2xl">
                    Comprar el equipo es solo el primer paso. Te acompañamos con garantía, mantenimiento, capacitación y repuestos para que tu inversión siga rindiendo en obra.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">

        <!-- Support Pillars -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">

            <!-- 01 Garantía -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Questionnaire-checklist-completed.png"
                         alt="Checklist de control de calidad"
                         class="absolute inset-0 w-full h-full object-cover">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        01 · Garantía
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Garantía de Fábrica</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Los equipos que comercializamos cuentan con garantía del fabricante contra defectos de fabricación. El plazo y la cobertura varían según la marca y el modelo adquirido; te los confirmamos antes de cerrar tu compra.
                    </p>
                </div>
            </article>

            <!-- 02 Soporte Técnico -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Electronics_workbench.jpg"
                         alt="Banco técnico de reparación y calibración de equipos"
                         class="absolute inset-0 w-full h-full object-cover">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        02 · Soporte
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Soporte Técnico Especializado</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Nuestro equipo técnico te ayuda con la configuración inicial, calibración y resolución de dudas de uso en campo, ya sea de forma remota o presencial según la complejidad del caso.
                    </p>
                </div>
            </article>

            <!-- 03 Mantenimiento Preventivo -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Leica_TC305_total_station.JPG"
                         alt="Calibración de estación total"
                         class="absolute inset-0 w-full h-full object-contain p-4 mix-blend-multiply">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        03 · Mantenimiento
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Mantenimiento Preventivo</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Ofrecemos revisiones periódicas de calibración y mantenimiento para estaciones totales, niveles y receptores GNSS, ayudando a preservar la precisión del equipo a lo largo de su vida útil.
                    </p>
                </div>
            </article>

            <!-- 04 Capacitación Post-Venta -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Drafting_Classroom_3.jpg"
                         alt="Capacitación técnica en aula de ingeniería"
                         class="absolute inset-0 w-full h-full object-cover">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        04 · Capacitación
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Capacitación Post-Venta</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Al adquirir un equipo, coordinamos una inducción de uso con tu equipo de topografía. Si necesitas formación más profunda, revisa nuestro catálogo de
                        <a href="{{ url('/capacitaciones') }}" class="text-blue-600 font-semibold hover:underline">capacitaciones especializadas</a>.
                    </p>
                </div>
            </article>

            <!-- 05 Repuestos y Accesorios -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://x02.me/i/8PENW9.jpg"
                         alt="Prisma y accesorios topográficos de repuesto"
                         class="absolute inset-0 w-full h-full object-contain p-6 mix-blend-multiply">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        05 · Repuestos
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Repuestos y Accesorios</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Gestionamos la provisión de repuestos y accesorios de reposición (baterías, prismas, miras, cables) para que una pieza desgastada no detenga tu obra. Consulta disponibilidad en nuestro
                        <a href="{{ route('servicios.equipos') }}#accesorios-repuestos" class="text-blue-600 font-semibold hover:underline">catálogo de accesorios</a>.
                    </p>
                </div>
            </article>

            <!-- 06 Atención Personalizada -->
            <article class="flex flex-col h-full bg-white border border-gray-100 hover:border-gray-300 transition-colors duration-200">
                <div class="aspect-[4/3] w-full bg-gray-50 border-b border-gray-50 relative overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Work_Meeting.jpg"
                         alt="Reunión de atención personalizada con el cliente"
                         class="absolute inset-0 w-full h-full object-cover">
                    <span class="absolute top-3 left-3 inline-block bg-white/90 backdrop-blur-sm border border-gray-100 text-[11px] font-bold px-2 py-1 text-gray-900 uppercase tracking-wider">
                        06 · Atención
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-900 mb-3">Atención Personalizada</h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Cada caso de soporte es distinto. Escríbenos por WhatsApp contándonos el equipo y el problema, y te derivamos con la persona indicada para resolverlo en el menor tiempo posible.
                    </p>
                </div>
            </article>

        </div>

        <!-- CTA -->
        <div class="bg-gray-900 text-white p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="max-w-xl">
                <h2 class="text-2xl md:text-3xl font-bold mb-3">¿Necesitas soporte para tu equipo?</h2>
                <p class="text-gray-300 leading-relaxed">
                    Cuéntanos qué equipo tienes y qué necesitas. Nuestro equipo técnico te responde directamente por WhatsApp.
                </p>
            </div>
            <a href="https://wa.me/51906119928?text=Hola,%20necesito%20soporte%20t%C3%A9cnico%20para%20un%20equipo."
               target="_blank"
               class="flex-shrink-0 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold uppercase tracking-widest py-4 px-8 transition-colors duration-200 text-center">
                Contactar Soporte
            </a>
        </div>

    </div>
</main>
@endsection
