<?php

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
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('login', function (){
    return view('login');
})->name('login');

Route::post('nuevocliente', 'clienteAlta@altaDecliente')->name('altaDeCliente'); 

Route::get('nuevocliente', function () {
    return view('ClienteAlta');
});

Route::post('login', 'login@loginCliente')->name('loginCliente');

Route::get('menuPrincipal', function () {
    return view('menu');
})->name('menuPrincipal')->middleware('autenticacion');


Route::get('pedidos', 'pedidos@realizarPedidos')->name('pedidos');

Route::post('pedidos', 'pedidos@finalizarPedido')->name('finalizarPedido');


Route::get('altaCadete', function() {
    return view('cadeteAlta');
})->name('altaCadete');

Route::post('altaCadete', 'cadeteAlta@altaDeCadete')->name('altaDeCadete');

Route::get('loginCadete', function () {
    return view('loginCadete');
})->name('loginCadete');

Route::post('loginCadete', 'loginCadete@loginCadete');

Route::get('menuCadete', function ()
{
    return view('menuCadete');
})->name('menuCadetes');