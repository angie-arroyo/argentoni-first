<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ServiceController;

Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, ['Content-Type' => 'application/xml']);
});

Route::get('/vacantes_argentoni.pdf', function () {
    $publicPath = public_path('vacantes_argentoni.pdf');
    if (file_exists($publicPath)) {
        return response()->file($publicPath, ['Content-Type' => 'application/pdf']);
    }

    $storagePath = storage_path('app/public/vacantes_argentoni.pdf');
    if (file_exists($storagePath)) {
        return response()->file($storagePath, ['Content-Type' => 'application/pdf']);
    }

    abort(404);
})->name('vacantes.pdf');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nuestra-identidad', function () {
    return view('nuestra-identidad');
})->name('nuestra-identidad');

Route::get('/nuestra-identidad/sobre-nosotros', function () {
    return view('nuestra-identidad.sobre-nosotros');
})->name('nuestra-identidad.sobre-nosotros');

Route::get('/nuestra-identidad/nuestro-liderazgo', function () {
    return view('nuestra-identidad.nuestro-liderazgo');
})->name('nuestra-identidad.nuestro-liderazgo');

Route::get('/nuestra-identidad/sectores-de-mercado', function () {
    return view('nuestra-identidad.sectores-de-mercado');
})->name('nuestra-identidad.sectores-de-mercado');

Route::get('/nuestra-identidad/fundacion-argentoni', function () {
    return view('nuestra-identidad.fundacion-argentoni');
})->name('nuestra-identidad.fundacion-argentoni');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');

Route::post('/carreras/postulacion', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'vacante' => ['required', 'string'],
        'nombre' => ['required', 'regex:/^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s\'.-]+$/u'],
        'apellidos' => ['required', 'regex:/^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s\'.-]+$/u'],
        'correo' => ['required', 'email'],
        'telefono' => ['required', 'digits_between:7,15'],
        'linkedin' => ['nullable', 'url'],
        'cv' => ['required', 'file', 'mimes:pdf', 'max:5120'],
        'mensaje' => ['nullable', 'string', 'max:2000'],
    ]);
    if ($validator->fails()) {
        return redirect()->to(url('/carreras#form-panel'))->withErrors($validator)->withInput();
    }
    $validated = $validator->validated();

    $smtpConfig = [
        'transport' => env('MAIL_MAILER_2', 'smtp'),
        'host' => env('MAIL_HOST_2'),
        'port' => env('MAIL_PORT_2'),
        'encryption' => env('MAIL_SCHEME_2'),
        'username' => env('MAIL_USERNAME_2'),
        'password' => env('MAIL_PASSWORD_2'),
        'timeout' => null,
        'local_domain' => env('MAIL_EHLO_DOMAIN'),
    ];
    config(['mail.mailers.carreras' => $smtpConfig]);
    config(['mail.from' => [
        'address' => env('MAIL_FROM_ADDRESS_2'),
        'name' => env('MAIL_FROM_NAME_2'),
    ]]);

    $missing = [];
    if (empty($smtpConfig['host'])) {
        $missing[] = 'MAIL_HOST_2';
    }
    if (empty($smtpConfig['port'])) {
        $missing[] = 'MAIL_PORT_2';
    }
    if (empty($smtpConfig['username'])) {
        $missing[] = 'MAIL_USERNAME_2';
    }
    if (empty($smtpConfig['password'])) {
        $missing[] = 'MAIL_PASSWORD_2';
    }
    if (empty($smtpConfig['encryption'])) {
        $missing[] = 'MAIL_SCHEME_2';
    }
    if (empty($smtpConfig['transport'])) {
        $missing[] = 'MAIL_MAILER_2';
    }
    if ($missing) {
        Log::warning('Faltan variables SMTP para enviar postulación', ['missing' => $missing]);
        return redirect()->to(url('/carreras#form-panel'))->withInput()->with('error', 'No se pudo enviar la postulación. Configura: ' . implode(', ', $missing) . '.');
    }

    $body = implode("\n", array_filter([
        'Nueva postulación',
        '',
        'Vacante: ' . $validated['vacante'],
        'Nombre: ' . $validated['nombre'],
        'Apellidos: ' . $validated['apellidos'],
        'Correo: ' . $validated['correo'],
        'Teléfono: ' . $validated['telefono'],
        $validated['linkedin'] ? 'LinkedIn/Portafolio: ' . $validated['linkedin'] : null,
        $validated['mensaje'] ? 'Mensaje: ' . $validated['mensaje'] : null,
    ]));

    $file = $request->file('cv');

    try {
        Mail::mailer('carreras')->raw($body, function ($message) use ($validated, $file) {
            $message->to('argentonicarreras@veltherion.com')
                ->subject('Nueva postulación - ' . $validated['vacante'])
                ->replyTo($validated['correo'], $validated['nombre'] . ' ' . $validated['apellidos']);
            if ($file) {
                $message->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
            }
        });
    } catch (\Throwable $exception) {
        Log::error('Fallo al enviar postulación: ' . $exception->getMessage());
        return redirect()->to(url('/carreras#form-panel'))->withInput()->with('error', 'No se pudo enviar la postulación. Inténtalo de nuevo.');
    }

    return redirect()->to(url('/carreras#form-panel'))->with('status', 'Postulación enviada correctamente.');
})->name('carreras.postular');

Route::get('/capacitaciones', function () {
    return view('capacitaciones');
});

Route::get('/capacitaciones/diseno-geometrico-carreteras-civil-3d-seguridad-vial', function () {
    return view('capacitaciones-civil-3d');
});

Route::get('/cotizar-proyecto', function () {
    return view('cotizar-proyecto');
})->name('cotizar');

Route::post('/cotizar-proyecto', function (Request $request) {
    $validated = $request->validate([
        'tipo_obra' => ['required', 'string'],
        'tiempo_inicio' => ['required', 'string'],
        'nombre_completo' => ['required', 'regex:/^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s\'.-]+$/u'],
        'numero_contacto' => ['required', 'digits_between:7,15'],
        'correo_contacto' => ['required', 'email'],
    ]);

    $body = implode("\n", [
        'Nueva solicitud de cotización',
        '',
        'Tipo de obra: ' . $validated['tipo_obra'],
        'Tiempo de inicio: ' . $validated['tiempo_inicio'],
        'Nombre completo: ' . $validated['nombre_completo'],
        'Número de contacto: ' . $validated['numero_contacto'],
        'Correo de contacto: ' . $validated['correo_contacto'],
    ]);

    $currentMailer = config('mail.default');
    if ($currentMailer !== 'smtp') {
        Log::warning('Mailer no configurado para SMTP', ['mailer' => $currentMailer]);
        return redirect()->back()->withInput()->with('error', 'No se pudo enviar la cotización. MAIL_MAILER actual: ' . $currentMailer . '.');
    }

    $smtpConfig = config('mail.mailers.smtp', []);
    $missing = [];

    if (empty($smtpConfig['host'])) {
        $missing[] = 'MAIL_HOST';
    }
    if (empty($smtpConfig['port'])) {
        $missing[] = 'MAIL_PORT';
    }
    if (empty($smtpConfig['username'])) {
        $missing[] = 'MAIL_USERNAME';
    }
    if (empty($smtpConfig['password'])) {
        $missing[] = 'MAIL_PASSWORD';
    }

    if ($missing) {
        Log::warning('Faltan variables SMTP para enviar cotización', ['missing' => $missing]);
        return redirect()->back()->withInput()->with('error', 'No se pudo enviar la cotización. Configura: ' . implode(', ', $missing) . '.');
    }

    try {
        Mail::raw($body, function ($message) use ($validated) {
            $message->to('argentonicotizar@veltherion.com')
                ->subject('Nueva solicitud de cotización')
                ->replyTo($validated['correo_contacto'], $validated['nombre_completo']);
        });
    } catch (\Throwable $exception) {
        Log::error('Error al enviar cotización', ['message' => $exception->getMessage()]);
        return redirect()->back()->withInput()->with('error', 'No se pudo enviar la cotización. Inténtalo de nuevo.');
    }

    return redirect()->back()->with('status', 'Cotización enviada correctamente.');
})->name('cotizar.enviar');

Route::get('/capacidades/industrial-mineria', function () {
    return view('capacidades.industrial-mineria');
});

Route::get('/capacidades/infraestructura-publica', function () {
    return view('capacidades.infraestructura-publica');
});

Route::get('/capacidades/estructuras-metalicas', function () {
    return view('capacidades.estructuras-metalicas');
});

Route::get('/alerta-de-fraude', function () {
    return view('legal.alerta-fraude');
})->name('legal.alerta-fraude');

Route::get('/politica-de-privacidad', function () {
    return view('legal.politica-privacidad');
})->name('legal.privacidad');

Route::get('/configuracion-de-cookies', function () {
    return view('legal.configuracion-cookies');
})->name('legal.cookies');

Route::get('/servicios/tecnologia-topografica-aerea', [ServiceController::class, 'equipos'])->name('servicios.equipos');

Route::get('/soporte-y-posventa', function () {
    return view('soporte-posventa');
})->name('soporte.posventa');

Route::get('/servicios/{slug}', [ServiceController::class, 'show'])->name('servicios.show');
