@extends('layouts.app')

@section('title', 'Alerta de Fraude | Argentoni Constructora')
@section('meta_description', 'Recomendaciones para prevenir fraudes y confirmar comunicaciones oficiales de Argentoni Constructora. Protege tu información y opera con confianza.')
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
                <source src="https://cdn.pixabay.com/video/2024/07/13/220941_large.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Transparencia y Seguridad</span>
            <h1 class="responsive-title font-light text-white mt-4">Alerta de Fraude</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Protegemos a nuestros clientes, aliados y postulantes frente a comunicaciones falsas. Confirma siempre los canales oficiales antes de compartir información.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">Señales de alerta</h2>
                <ul class="space-y-4 text-gray-600 text-lg">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Solicitudes de pagos anticipados a cuentas personales o no verificadas.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Mensajes con presión o urgencia inusual para cerrar acuerdos.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Correos desde dominios no corporativos o con errores de escritura.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 mt-2 bg-blue-600"></span>
                        <span>Ofertas con condiciones económicas poco realistas o sin sustento técnico.</span>
                    </li>
                </ul>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1600&h=1000&dpr=1" alt="Reunión de verificación" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-transparent">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Verifica identidad</h3>
                <p class="text-gray-600 leading-relaxed">Solicita siempre un correo corporativo y un número de contacto oficial antes de compartir datos o documentos sensibles.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Confirma propuestas</h3>
                <p class="text-gray-600 leading-relaxed">Revisa la validez de cotizaciones y contratos con nuestro equipo antes de realizar cualquier transacción.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Reporta incidentes</h3>
                <p class="text-gray-600 leading-relaxed">Si detectas una comunicación sospechosa, avísanos para activar el protocolo de seguridad y prevención.</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="bg-blue-700 text-white p-10 md:p-14 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-light">Canales oficiales de contacto</h2>
                <p class="text-white/80 text-lg mt-3 max-w-2xl">Escríbenos para validar propuestas, procesos de contratación o comunicaciones comerciales.</p>
            </div>
            <a href="https://wa.me/51906119928" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-700 font-bold uppercase tracking-widest text-sm hover:bg-blue-50 transition-colors">
                Contactar soporte
            </a>
        </div>
    </section>
</main>
@endsection
