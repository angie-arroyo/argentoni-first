@extends('layouts.app')

@section('title', 'Constructora Perú | Estructuras Metálicas en Trujillo')
@section('meta_description', 'Constructora Perú experta en estructuras metálicas para montaje eficiente. Cotiza en Trujillo y asegura optimización de acero y seguridad regional para tu obra.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white')

@section('content')
<section class="relative w-full h-[60vh] md:h-[80vh] overflow-hidden">
    <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
        <source src="https://x02.me/i/P2TW.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-5xl font-bold text-white">Capacidades en Estructuras Metálicas</h1>
        </div>
    </div>
</section>
<main class="pt-24 pb-16 bg-transparent relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-8">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Capacidades en Estructuras Metálicas
                </h1>

                <div class="rounded-xl overflow-hidden shadow-lg mb-10 aspect-w-16 aspect-h-9 relative">
                    <img src="https://i.postimg.cc/Y97dLsLm/factory-worker-working-warehouse-handling-metal-material-production.jpg" alt="Estructuras Metálicas" class="w-full h-full object-cover" loading="lazy">
                </div>

                <div class="prose prose-lg prose-blue text-gray-600 mb-12 max-w-none text-justify">
                    <p>Diseñamos estructuras metálicas con precisión, enfocándonos en eficiencia de material, seguridad y facilidad de montaje. Integramos análisis avanzado y coordinación de detalle para obras industriales de alto desempeño.</p>
                    <p>Nuestro proceso considera cargas dinámicas, fatiga y condiciones operativas específicas para garantizar desempeño estructural y durabilidad. Optimizamos secciones, conexiones y sistemas de apoyo para lograr soluciones livianas y confiables, sin sacrificar rigidez ni estabilidad.</p>
                    <p>Entregamos documentación clara de fabricación y montaje, facilitando la trazabilidad, el control de calidad y la ejecución en obra. La coordinación temprana reduce interferencias y acorta los plazos de construcción.</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 mb-12 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-blue-600 mr-3 rounded-full"></span>
                        Capacidades Clave
                    </h2>
                    <ul class="grid md:grid-cols-2 gap-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Diseño y cálculo de estructuras metálicas</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Optimización por elementos finitos</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Especialización en obras industriales complejas</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">Planos de fabricación y montaje coordinados</span>
                        </li>
                    </ul>
                </div>
                <div class="prose prose-lg prose-blue text-gray-600 max-w-none text-justify">
                    <p>Combinamos ingeniería de detalle y análisis estructural para entregar soluciones metálicas seguras, eficientes y listas para fabricar. El resultado es una ejecución más ordenada y un desempeño confiable en operación.</p>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Calidad y desempeño</h2>
                    <div class="text-gray-600 text-base leading-relaxed space-y-4">
                        <p>Definimos criterios de diseño y verificación estructural para garantizar estabilidad, servicio y durabilidad en condiciones reales de operación.</p>
                        <p>Priorizamos soluciones eficientes en material y montaje, reduciendo tiempos de fabricación sin comprometer la seguridad.</p>
                        <p>Coordinamos detalle de conexiones y planos de taller para una ejecución ordenada y con control de calidad desde origen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
