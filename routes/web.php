<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class, 'create']);
*/
Route::resource('empleado',EmpleadoController::class); //genera recursos desde Controller de manera automatica. 
Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});