@extends('layouts.app')

@section('title', 'Constructora Perú | Identidad Corporativa Regional Arequipa')
@section('meta_description', 'Conoce la identidad y valores de nuestra constructora en Perú. Agenda una reunión en Arequipa y define la estrategia con asesoría técnica.')

@section('content')
<style>
    .responsive-hero-title {
        font-size: clamp(2.5rem, 5vw + 1rem, 5rem);
        line-height: 1.1;
    }

    .responsive-hero-subtitle {
        font-size: clamp(1.1rem, 2vw + 0.6rem, 1.75rem);
    }
</style>

<main class="bg-white">
    <section class="relative min-h-[70vh] w-full overflow-hidden" data-grid-hero>
        <div class="absolute inset-0">
            <img src="https://x02.me/i/4FKHU3.jpg" alt="Nuestra Identidad" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/70 to-blue-900/30"></div>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 md:py-32">
            <span class="text-xs tracking-[0.3em] uppercase text-white/70">Nuestra Identidad</span>
            <h1 class="responsive-hero-title text-white font-light mt-4">Nuestra Identidad</h1>
            <p class="responsive-hero-subtitle text-white/85 mt-6 max-w-3xl">Somos una firma de ingeniería nacida del rigor técnico y la vocación de servicio. Nuestra identidad se define por la búsqueda constante de soluciones que aporten estabilidad y valor real a cada proyecto.</p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="#sobre-nosotros" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white/10 text-white text-xs font-bold uppercase tracking-widest hover:bg-white/20 transition-colors">Sobre Nosotros</a>
                <a href="#nuestro-liderazgo" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white/10 text-white text-xs font-bold uppercase tracking-widest hover:bg-white/20 transition-colors">Nuestro Liderazgo</a>
                <a href="#sectores-mercado" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white/10 text-white text-xs font-bold uppercase tracking-widest hover:bg-white/20 transition-colors">Sectores de Mercado</a>
                <a href="#fundacion-argentoni" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white/10 text-white text-xs font-bold uppercase tracking-widest hover:bg-white/20 transition-colors">Fundación Argentoni</a>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <section id="sobre-nosotros" class="relative bg-blue-600 p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600 overflow-hidden group transition-all duration-500">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 -mr-10 -mt-10 opacity-40"></div>
                <div class="relative z-10 space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-widest text-white/80">Sobre Nosotros</span>
                        <span class="text-sm font-bold text-white/40">01</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-light text-white">Propósito y Origen</h2>
                    <p class="text-white/80 text-lg leading-relaxed">"Nuestra trayectoria no se mide solo en años, sino en la confianza de quienes nos permiten ser parte de su infraestructura. Trabajamos para materializar proyectos que mejoren la operatividad industrial con una visión honesta y sostenible."</p>
                    <a href="{{ route('nuestra-identidad.sobre-nosotros') }}" class="inline-flex items-center justify-center px-5 py-3 border border-white/60 text-white text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-blue-700 transition-colors rounded-none w-fit">Saber más</a>
                </div>
            </section>

            <section id="nuestro-liderazgo" class="relative bg-blue-600 p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600 overflow-hidden group transition-all duration-500">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 -mr-10 -mt-10 opacity-40"></div>
                <div class="relative z-10 space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-widest text-white/80">Nuestro Liderazgo</span>
                        <span class="text-sm font-bold text-white/40">02</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-light text-white">Nuestra Gente y Visión</h2>
                    <p class="text-white/80 text-lg leading-relaxed">"Creemos en el talento como motor de cambio. Contamos con un equipo de especialistas que combinan experiencia en campo con una visión estratégica, permitiéndonos afrontar desafíos técnicos con serenidad y precisión."</p>
                    <a href="{{ route('nuestra-identidad.nuestro-liderazgo') }}" class="inline-flex items-center justify-center px-5 py-3 border border-white/60 text-white text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-blue-700 transition-colors rounded-none w-fit">Saber más</a>
                </div>
            </section>

            <section id="sectores-mercado" class="relative bg-blue-600 p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600 overflow-hidden group transition-all duration-500">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 -mr-10 -mt-10 opacity-40"></div>
                <div class="relative z-10 space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-widest text-white/80">Sectores de Mercado</span>
                        <span class="text-sm font-bold text-white/40">03</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-light text-white">Sectores que Impulsamos</h2>
                    <p class="text-white/80 text-lg leading-relaxed">"Intervenimos en las industrias que sostienen el progreso: minería, energía e infraestructura civil. Nuestro enfoque es potenciar estos mercados mediante una ejecución técnica impecable y estándares de calidad internacional."</p>
                    <a href="{{ route('nuestra-identidad.sectores-de-mercado') }}" class="inline-flex items-center justify-center px-5 py-3 border border-white/60 text-white text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-blue-700 transition-colors rounded-none w-fit">Saber más</a>
                </div>
            </section>

            <section id="fundacion-argentoni" class="relative bg-blue-600 p-8 md:p-12 shadow-xl shadow-blue-900/20 border border-blue-600 overflow-hidden group transition-all duration-500">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 -mr-10 -mt-10 opacity-40"></div>
                <div class="relative z-10 space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-widest text-white/80">Fundación Argentoni</span>
                        <span class="text-sm font-bold text-white/40">04</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-light text-white">Compromiso y Legado</h2>
                    <p class="text-white/80 text-lg leading-relaxed">"Entendemos nuestra labor como un aporte a la sociedad. Nos enfocamos en la seguridad técnica y la responsabilidad ambiental, impulsando iniciativas que generen bienestar y progreso sostenible."</p>
                    <a href="{{ route('nuestra-identidad.fundacion-argentoni') }}" class="inline-flex items-center justify-center px-5 py-3 border border-white/60 text-white text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-blue-700 transition-colors rounded-none w-fit">Saber más</a>
                </div>
            </section>
        </div>
    </section>
</main>
@endsection
