@extends('layouts.app')

@section('title', 'Cotiza tu proyecto | Argentoni Constructora')
@section('meta_description', 'Solicita una cotización para tu obra con Argentoni Constructora. Déjanos los datos de tu proyecto y te contactamos pronto.')

@section('content')
    <section class="w-full py-20 bg-white relative">
        <div class="absolute inset-0 bg-white"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-20">
            <div class="mb-10">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Cotización</span>
                <h1 class="text-3xl md:text-5xl font-light text-gray-900 mt-4">Cuéntanos sobre tu obra</h1>
                <p class="text-gray-600 mt-4 text-lg">Completa el formulario y nuestro equipo te contactará con una propuesta.</p>
            </div>

            @if (session('status'))
                <div class="mb-6 border border-emerald-200 bg-emerald-50 text-emerald-700 px-4 py-3 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-6 border border-red-200 bg-red-50 text-red-700 px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 border border-red-200 bg-red-50 text-red-700 px-4 py-3 rounded-lg">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ secure_url('cotizar-proyecto') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Tipo de Obra</label>
                    <select name="tipo_obra" required class="w-full border border-gray-300 bg-gray-50 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        <option value="" selected>Selecciona una opción</option>
                        <option value="residencial">Residencial</option>
                        <option value="comercial">Comercial</option>
                        <option value="industrial">Industrial</option>
                        <option value="infraestructura">Infraestructura Pública</option>
                        <option value="remodelacion">Remodelación</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Tiempo de inicio</label>
                    <select name="tiempo_inicio" required class="w-full border border-gray-300 bg-gray-50 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        <option value="" selected>Selecciona una opción</option>
                        <option value="inmediato">Inmediato</option>
                        <option value="1-3_meses">1 - 3 Meses</option>
                        <option value="3-6_meses">3 - 6 Meses</option>
                        <option value="mas_6_meses">Más de 6 Meses</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Nombre completo</label>
                    <input type="text" name="nombre_completo" required pattern="^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ ]+$" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚÜÑáéíóúüñ ]/g, '')" class="w-full border border-gray-300 bg-gray-50 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600" placeholder="Ingresa tu nombre">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Número de contacto</label>
                    <input type="tel" name="numero_contacto" required pattern="^[0-9]{7,15}$" inputmode="numeric" minlength="7" maxlength="15" oninput="this.value = this.value.replace(/\D/g, '')" class="w-full border border-gray-300 bg-gray-50 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600" placeholder="Ej. 999999999">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Correo de contacto</label>
                    <input type="email" name="correo_contacto" required class="w-full border border-gray-300 bg-gray-50 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600" placeholder="correo@ejemplo.com">
                </div>

                <div class="md:col-span-2">
                    <button type="submit" class="w-full md:w-auto bg-blue-600 text-white font-bold uppercase tracking-widest py-4 px-10 hover:bg-blue-700 transition-colors">
                        Enviar solicitud
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
