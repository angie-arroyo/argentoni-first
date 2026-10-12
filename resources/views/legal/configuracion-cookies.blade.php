@extends('layouts.app')

@section('title', 'Configuración de Cookies | Argentoni Constructora')
@section('meta_description', 'Gestiona tus preferencias de cookies y conoce cómo se utilizan para mejorar tu experiencia en Argentoni Constructora.')
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
                <source src="https://videos.pexels.com/video-files/7817046/7817046-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-28">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Preferencias Digitales</span>
            <h1 class="responsive-title font-light text-white mt-4">Configuración de Cookies</h1>
            <p class="text-white/85 text-lg md:text-xl mt-6 max-w-3xl">Las cookies nos ayudan a ofrecer una experiencia segura, personalizada y eficiente. Aquí puedes conocer su uso y gestionar preferencias.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-light text-gray-900">¿Qué son las cookies?</h2>
                <p class="text-gray-600 text-lg leading-relaxed">Son pequeños archivos que se almacenan en tu navegador para recordar preferencias, mejorar el rendimiento y analizar el uso del sitio.</p>
                <p class="text-gray-600 text-lg leading-relaxed">Puedes controlarlas desde tu navegador en cualquier momento, sin afectar la seguridad de tu información personal.</p>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100">
                <img src="https://x02.me/i/UFPYH.jpg" alt="Preferencias digitales" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-transparent">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 border border-gray-100 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Necesarias</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Permiten funciones básicas como seguridad, navegación y acceso a formularios.</p>
            </div>
            <div class="bg-white p-6 border border-gray-100 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Analíticas</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Ayudan a entender el uso del sitio para optimizar contenidos y rendimiento.</p>
            </div>
            <div class="bg-white p-6 border border-gray-100 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Preferencias</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Guardan ajustes de idioma, ubicación y configuración personalizada.</p>
            </div>
            <div class="bg-white p-6 border border-gray-100 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Marketing</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Permiten mostrar comunicaciones relevantes según tus intereses.</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="bg-blue-700 text-white p-10 md:p-14 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-light">Administra tus preferencias</h2>
                <p class="text-white/80 text-lg mt-3 max-w-2xl">Puedes desactivar o eliminar cookies desde la configuración de tu navegador. Esto puede afectar algunas funcionalidades del sitio.</p>
            </div>
            <a href="https://wa.me/51906119928" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-700 font-bold uppercase tracking-widest text-sm hover:bg-blue-50 transition-colors">
                Consultar soporte
            </a>
        </div>
    </section>
</main>
@endsection
