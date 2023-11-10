<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('Administrador', [App\Http\Controllers\AdminController::class, 'index'])->name('Administrador');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('cursos', App\Http\Controllers\CursoController::class)->names('cursos');
Route::resource('asignaturas', App\Http\Controllers\AsignaturaController::class)->names('asignaturas');
Route::resource('tiposervicios', App\Http\Controllers\TiposervicioController::class);
Route::resource('tipoAsignaturas', App\Http\Controllers\TipoAsignaturaController::class)->names('tipoAsignaturas');
Route::resource('profesores', App\Http\Controllers\ProfesorController::class)->names('profesores');
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->names('alumnos');
Route::resource('directivos', App\Http\Controllers\DirectivoController::class)->names('directivos');
Route::resource('documentos', App\Http\Controllers\DocumentoController::class)->names('documentos');
Route::resource('tipoDocumentos', App\Http\Controllers\TipoDocumentoController::class)->names('tipoDocumentos');
Route::resource('personas', App\Http\Controllers\PersonaController::class)->names('personas');
Route::resource('logros', App\Http\Controllers\LogroController::class)->names('logros');
Route::resource('periodos', App\Http\Controllers\PeriodoController::class)->names('periodos');
Route::resource('tipoPersonas', App\Http\Controllers\TipoPersonaController::class)->names('tipoPersonas');
//rutas para el controller grado
Route::resource('grados', App\Http\Controllers\GradoController::class)->names('grados');
Route::post('/grados/agregarEstudiantes', [App\Http\Controllers\GradoController::class, 'agregarEstudianteAGrado'])->name('asignarEstudiantes');
Route::get('agregarEstudiantes/{id}', [App\Http\Controllers\GradoController::class, 'viewAgregar'])->name('agregarEstudiantes');
Route::delete('/eliminarDelGrado/{id}', [App\Http\Controllers\GradoController::class, 'eliminarDelGrado'])->name('eliminarDelGrado');


Route::resource('actualizarPerfil', App\Http\Controllers\PersonaController::class)->names('actualizarPerfil');
Route::get('/editar/{id}', [App\Http\Controllers\PersonaController::class, 'edit'])->name('editarPerfil');

//rutas para el controller notas
Route::resource('calificar', App\Http\Controllers\NotaController::class)->names('calificar');
Route::get('notasPeriodos',  [App\Http\Controllers\NotaController::class, 'notasPeriodo'])->name('notasPeriodos');
Route::get('notasPeriodoIndividual',  [App\Http\Controllers\NotaController::class, 'notaPeridoIndividual'])->name('notasPeriodoIndividual');
Route::post('capturarPeriodo',  [App\Http\Controllers\NotaController::class, 'capturarIdPeriodo'])->name('capturarPeriodo');


// perfil y foto de perfil 
Route::put('/personas/{id}', [App\Http\Controllers\PersonaController::class, 'update']);
Route::post('perfil', [App\Http\Controllers\UserAjustesController::class,'avatar'])->name('Avatar');
Route::get('perfil', [App\Http\Controllers\UserAjustesController::class, 'perfil'])->name('perfil');
Route::get('/Miperfil', [App\Http\Controllers\UserAjustesController::class, 'Miperfil'])->name('ActualizarPerfil')->middleware('auth');
Route::post('Actualizarperfil', [App\Http\Controllers\UserAjustesController::class,'Actualizar'])->name('Actualizar');
//  para los users
Route::resource('usuarios', App\Http\Controllers\Usercontroller::class);