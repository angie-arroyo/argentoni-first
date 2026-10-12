@extends('layouts.app')

@section('title', 'Constructora Perú | Curso Civil 3D Carreteras en Lima')
@section('meta_description', 'Curso Civil 3D para diseño geométrico de carreteras en Perú. Inscríbete en Lima y domina alineamientos, perfiles, corredores y metrado regional.')
@section('header_class', 'bg-black')
@section('header_style', 'black')
@section('body_class', 'bg-white grid-under-content')

@section('content')
<style>
    .grid-under-content #grid-white,
    .grid-under-content #grid-gray {
        z-index: 0 !important;
    }
</style>
<main class="pt-28 md:pt-32 pb-20 bg-transparent relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-7">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs md:text-sm">Capacitación Especializada</span>
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 tracking-tight leading-tight mt-3">
                    Diseño Geométrico de Carreteras con Civil 3D
                    <span class="text-blue-700">+ Seguridad Vial</span>
                </h1>
                <p class="mt-6 text-base md:text-lg text-gray-600 leading-relaxed">
                    El participante adquirirá un dominio avanzado de las herramientas de Civil 3D, lo que le permitirá trabajar de manera eficiente en el diseño y la edición de superficies, la importación de puntos, y el trazado de la gradiente. También podrá crear alineamientos, ensamblajes, perfiles longitudinales, corredores, grading y secciones transversales, todo en concordancia con los criterios establecidos en el Manual de Diseño Geométrico de Carreteras DG-2018 y las normativas de Seguridad Vial.
                </p>
                <p class="mt-4 text-base md:text-lg text-gray-600 leading-relaxed">
                    Además, se abordará el diseño de Obras Auxiliares, incluyendo Canteras, DME y Muros de Contención, asegurando que los proyectos cumplan con los estándares técnicos adecuados. Como parte de la capacitación, el participante también aprenderá a realizar el metrado de materiales y el cálculo del movimiento de tierras, lo cual es esencial para una planificación precisa y eficiente de las obras viales.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="https://wa.me/51906119928?text=Hola,%20deseo%20m%C3%A1s%20detalles%20sobre%20la%20capacitaci%C3%B3n%20de%20Dise%C3%B1o%20Geom%C3%A9trico%20de%20Carreteras%20con%20Civil%203D%20y%20Seguridad%20Vial" target="_blank" class="inline-flex items-center justify-center px-6 py-3 bg-blue-700 text-white font-bold uppercase tracking-widest text-xs md:text-sm hover:bg-blue-600 transition-colors rounded-none">
                        Más detalles
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-gray-50 border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">Ficha rápida</h2>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mt-2"></span>
                            <div><span class="font-semibold text-gray-900">Modalidad:</span> Virtual</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mt-2"></span>
                            <div><span class="font-semibold text-gray-900">Duración:</span> 27 horas</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mt-2"></span>
                            <div><span class="font-semibold text-gray-900">Acceso:</span> Grabaciones y material de clases</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-14 md:mt-20 grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Dirigido a</h2>
                <p class="text-gray-600 leading-relaxed">
                    Este curso está diseñado especialmente para ingenieros civiles, técnicos y profesionales relacionados con la ingeniería vial que desean profundizar en el diseño geométrico de carreteras y seguridad vial. Se enfoca en ofrecer conocimientos avanzados en herramientas y normativas aplicadas al diseño de infraestructuras viales.
                </p>
            </div>
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Material</h2>
                <p class="text-gray-600 leading-relaxed">
                    Los participantes tendrán acceso exclusivo a los archivos y presentaciones utilizadas durante las clases, las cuales serán proporcionadas en la modalidad de capacitación virtual. Este material formará una base sólida para afianzar los conocimientos adquiridos en cada sesión.
                </p>
            </div>
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Metodología</h2>
                <p class="text-gray-600 leading-relaxed">
                    El curso se impartirá de manera virtual a través de la plataforma Zoom, lo cual facilitará una interacción directa entre los instructores y los participantes, asegurando una experiencia dinámica y participativa. Este enfoque flexible permitirá a los estudiantes adaptarse a su propio ritmo mientras se benefician de la calidad de un aprendizaje en vivo.
                </p>
            </div>
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Duración y Frecuencia</h2>
                <p class="text-gray-600 leading-relaxed">
                    Este curso tendrá una duración total de 27 horas distribuidas en 11 sesiones, que se realizarán en horarios accesibles durante la semana y los fines de semana, permitiendo a los profesionales con agendas apretadas participar sin dificultades.
                </p>
            </div>
        </div>

        <div class="mt-14 md:mt-20 border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Objetivos del Curso</h2>
            <ul class="space-y-4 text-gray-600">
                <li class="flex items-start gap-3">
                    <span class="w-2 h-2 bg-red-500 rounded-full mt-2"></span>
                    <span>Adquirir los conocimientos y criterios técnicos que establece la normativa vigente del Manual de Diseño Geométrico de Carreteras DG-2018.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-2 h-2 bg-red-500 rounded-full mt-2"></span>
                    <span>Dominar las herramientas de diseño de Civil 3D, aplicando los criterios adecuados para el diseño geométrico de carreteras.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-2 h-2 bg-red-500 rounded-full mt-2"></span>
                    <span>Elaborar diseños geométricos de carreteras en planta, así como perfiles longitudinales y secciones transversales.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-2 h-2 bg-red-500 rounded-full mt-2"></span>
                    <span>Diseñar corredores viales, grading y áreas auxiliares como DME, Canteras y Muros de Contención dentro de la infraestructura vial.</span>
                </li>
            </ul>
        </div>

        <div class="mt-14 md:mt-20 grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-10">
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Instructores de Alta Capacitación</h2>
                <p class="text-gray-600 leading-relaxed">
                    Este curso será impartido por ingenieros civiles con amplia experiencia, provenientes de la Universidad Nacional de Ingeniería (UNI), quienes han trabajado en proyectos de gran envergadura y son expertos en la aplicación práctica de las herramientas de diseño y planificación vial.
                </p>
                <p class="text-gray-600 leading-relaxed mt-4">
                    Uno de nuestros instructores será
                    <a href="https://www.linkedin.com/in/wilmar-david-de-la-cruz-puma-b619a4272/" target="_blank" class="font-semibold text-blue-800 hover:text-blue-900 transition-colors">Wilmar David de la Cruz Puma</a>.
                </p>
            </div>
            <div class="border border-gray-100 rounded-3xl p-6 md:p-10 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Beneficios</h2>
                <p class="text-gray-600 leading-relaxed">
                    Los participantes no solo aprenderán a diseñar infraestructuras viales utilizando tecnología de punta, sino que también obtendrán un certificado oficial que potenciará su perfil profesional y los preparará para enfrentar proyectos de gran escala en el sector de la construcción.
                </p>
            </div>
        </div>

        <div class="mt-14 md:mt-20 bg-blue-700 text-white rounded-3xl p-8 md:p-12 shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Impulsa tu carrera profesional</h2>
            <p class="text-blue-100 leading-relaxed">
                Este curso representa una oportunidad única para actualizar y especializarse en áreas clave del diseño vial, lo cual es fundamental para aquellos que buscan desarrollarse y posicionarse como líderes en la industria de la construcción de carreteras. ¡No pierdas la oportunidad de llevar tu carrera al siguiente nivel! Inscríbete hoy y transforma tu futuro profesional.
            </p>
        </div>
    </div>
</main>
@endsection
