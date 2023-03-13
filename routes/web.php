<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ParaderoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ResolucionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TipoOrganizacionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ZonaController;
use App\Models\TipoOrganizacion;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('cmd/{command}', function ($command) {
    Artisan::call($command);
    dd(Artisan::output());
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('usuario', UserController::class)->names('usuario');
Route::get('/usuario/{usuario}/editarol',[UserController::class, 'editrol'])->name('usuario.roles');
Route::put('usuario/{usuario}/updaterol', [UserController::class, 'updaterol'])->name('usuario.updaterole');
Route::resource('admin', AdminController::class)->names('admin');
Route::post('persona/{persona}/activar', [PersonaController::class, 'activar'])->name('persona.activar');

Route::resource('persona', PersonaController::class)->names('persona');
Route::get('view-verification/{vehiculo}', [VehiculoController::class, 'verificacion'])->name('vehiculo.verificacion');
Route::post('empresa/{empresa}/activar', [EmpresaController::class, 'activar'])->name('empresa.activar');

Route::resource('empresa', EmpresaController::class)->middleware('auth')->names('empresa');
Route::post('resolucion/{resolucion}/activar', [ResolucionController::class, 'activar'])->name('resolucion.activar');

Route::resource('resolucion', ResolucionController::class)->middleware('auth')->names('resolucion');
Route::post('tipo-organizacion/{tipo_organizacion}/activar', [TipoOrganizacionController::class, 'activar'])->name('tipo-organizacion.activar');

Route::resource('tipo-organizacion', TipoOrganizacionController::class)->middleware('auth')->names('tipo-organizacion');

Route::post('zona/{zona}/activar', [ZonaController::class, 'activar'])->name('zona.activar');

Route::resource('zona',ZonaController::class)->middleware('auth')->names('zona');
Route::post('paradero/{paradero}/activar', [ParaderoController::class, 'activar'])->name('paradero.activar');

Route::resource('paradero', ParaderoController::class)->middleware('auth')->names('paradero');
Route::post('vehiculo/{vehiculo}/activar', [VehiculoController::class, 'activar'])->name('vehiculo.activar');

Route::get('/vehiculo/{vehiculo}/pdf', [VehiculoController::class, 'descargar_pdf'])->name('vehiculo.pdf');

Route::resource('vehiculo', VehiculoController::class)->middleware('auth')->names('vehiculo');
Route::resource('roles', RoleController::class)->names('role');
