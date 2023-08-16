<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('Bienvenido', function () {
    // "hola a todos";
    $noticias = [
        ['id' => '1',
        'titulo' => 'Vista pastoral',
        'descripcion' => 'Pastor distrital llegara de visita '],
        ['id' => '2',
            'titulo' => 'Vista pastoral',
            'descripcion' => 'Pastor distrital llegara de visita ']
    ];
    return view('noticia',['noticias' => $noticias ]);
});

Route::get('Bienvenido/{id}', function ($id) {
    return $id;
});

Route::get('tarea', function () {
    // "hola a todos";
    $personas  = [
        ['nombre' => 'Valentin',
        'edad' => '18'],
        ['nombre' => 'kelly',
        'edad' => '15']
    ];
    return view('personas',['personas' => $personas ]);
});

Route::get('comment',[PostController::class, 'index']);