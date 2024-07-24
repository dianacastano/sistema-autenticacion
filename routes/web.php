<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/maquinaria/list', function () {
        return 'Listar Maquinaria';
    })->name('maquinaria.list');

    Route::get('/maquinaria/create', function () {
        return 'Añadir Maquinaria';
    })->name('maquinaria.create');

    Route::get('/maquinaria/update', function () {
        return 'Actualizar Maquinaria';
    })->name('maquinaria.update');

    Route::get('/maquinaria/delete', function () {
        return 'Eliminar Maquinaria';
    })->name('maquinaria.delete');

    Route::get('/parcelas/list', function () {
        return 'Listar Parcelas';
    })->name('parcelas.list');

    Route::get('/parcelas/create', function () {
        return 'Añadir Parcela';
    })->name('parcelas.create');

    Route::get('/parcelas/update', function () {
        return 'Actualizar Parcela';
    })->name('parcelas.update');

    Route::get('/parcelas/delete', function () {
        return 'Eliminar Parcela';
    })->name('parcelas.delete');

    Route::get('/acciones/list', function () {
        return 'Listar Acciones';
    })->name('acciones.list');

    Route::get('/acciones/create', function () {
        return 'Añadir Acción';
    })->name('acciones.create');

    Route::get('/acciones/update', function () {
        return 'Actualizar Acción';
    })->name('acciones.update');

    Route::get('/acciones/delete', function () {
        return 'Eliminar Acción';
    })->name('acciones.delete');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaginaTemporalController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/maquinaria', [PaginaTemporalController::class, 'index'])->name('maquinaria');
    Route::get('/terrenos', [PaginaTemporalController::class, 'index'])->name('terrenos');
    Route::get('/acciones', [PaginaTemporalController::class, 'index'])->name('acciones');
});

