@extends('layouts.app')

@section('title', 'Política de Privacidad | Argentoni Constructora')
@section('meta_description', 'Conoce cómo Argentoni Constructora recopila, utiliza y protege tus datos personales. Transparencia y responsabilidad en el tratamiento de información.')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<style>
    .responsive-title {
        font-size: clamp(2.5rem, 5vw + 1rem, 5rem);
        line-height: 1.1;
    }
    .responsive-container {
        padding-left: clamp(1rem, 5vw, 8rem);
        padding-right: clamp(1rem, 5vw, 8rem);
    }
</style>

<main class="relative z-20">
    <section class="relative min-h-[55vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="https://cdn.pixabay.com/video/2023/07/25/173137-848555631_large.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Confianza y Resguardo</span>
            <h1 class="responsive-title font-light text-white mt-4">Política de Privacidad</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Administramos la información personal con rigor técnico y respeto. Esta política describe cómo tratamos y protegemos tus datos.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">Datos que recopilamos</h2>
                <ul class="space-y-4 text-gray-600 text-lg">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Información de contacto proporcionada en formularios, cotizaciones o postulaciones.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Datos técnicos necesarios para la gestión de proyectos, servicios y capacitaciones.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Información operativa para coordinar visitas, entregables y soporte.</span>
                    </li>
                </ul>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100">
                <img src="https://x02.me/i/QTEJFP.jpg" alt="Equipo trabajando con datos" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-transparent">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Finalidad</h3>
                <p class="text-gray-600 leading-relaxed">Usamos los datos para gestionar solicitudes, brindar servicios técnicos, emitir propuestas y cumplir obligaciones legales.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Conservación</h3>
                <p class="text-gray-600 leading-relaxed">Mantenemos la información solo por el tiempo necesario para cumplir con la relación contractual o la normativa aplicable.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Seguridad</h3>
                <p class="text-gray-600 leading-relaxed">Aplicamos controles técnicos y administrativos para asegurar la integridad, confidencialidad y disponibilidad de los datos.</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="bg-blue-700 text-white p-10 md:p-14">
            <h2 class="text-2xl md:text-3xl font-light">Tus derechos</h2>
            <p class="text-white/80 text-lg mt-3 max-w-3xl">Puedes solicitar acceso, actualización, rectificación o eliminación de tus datos personales conforme a la normativa vigente.</p>
            <div class="mt-6">
                <a href="https://wa.me/51906119928" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-700 font-bold uppercase tracking-widest text-sm hover:bg-blue-50 transition-colors">
                    Gestionar solicitud
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
