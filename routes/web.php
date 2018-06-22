<?php

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

//Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::middleware(['auth'])->group(function () {
    Route::get('/auditoria_login', 'DepartamentosController@auditoria_login')->name('auditoria_login')
        ->middleware('permission:departamentos_login.auditoria_acceso');

    Route::get('/compras_login', 'DepartamentosController@compras_login')->name('compras_login')
        ->middleware('permission:departamentos_login.compras_acceso');

    Route::get('/conta_login', 'DepartamentosController@conta_login')->name('conta_login')
        ->middleware('permission:departamentos_login.conta_acceso');

    Route::get('/marketing_login', 'DepartamentosController@marketing_login')->name('marketing_login')
        ->middleware('permission:departamentos_login.marketing_acceso');

    Route::get('/rrhh_login', 'DepartamentosController@rrhh_login')->name('rrhh_login')
        ->middleware('permission:departamentos_login.rrhh_acceso');

    Route::get('/sistemas_login', 'DepartamentosController@sistemas_login')->name('sistemas_login')
        ->middleware('permission:departamentos_login.sistemas_acceso');
});

//<!------------------RUTAS PRINICIPALES-------------------------->
Route::get('/home', 'HomeController@index');
Route::view('/adminuser', 'admin.usuarios');

Route::get('/departamentos', 'DepartamentosController@index');
//<!------------------DEPARTAMENTOS------------------------------->
//Vista Departamento Auditoria
Route::get('/dep_auditoria', 'DepartamentosController@dep_auditoria');

//Vista Departamento Compras
Route::get('/dep_compras', 'DepartamentosController@dep_compras');

//Vista Departamento Contabilidad
Route::get('/dep_conta', 'DepartamentosController@dep_conta');

//Vista Departamento Marketing
Route::get('/dep_marketing', 'DepartamentosController@dep_marketing');

//Vista Departamento Recursos Humanos
Route::get('/dep_rrhh', 'DepartamentosController@dep_rrhh');

//Vista Departamento Sistemas
Route::get('/dep_sis', 'DepartamentosController@dep_sis');

//<!------------------SUCURSALES------------------------------->
Route::get('/sucursales', function () {
    return view('sucursales/index');
})->name('sucursales');

//<!------------------SUCURSALES QUITO------------->
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');
Route::get('/suc_quito_calderon', 'SucursalesController@suc_quito_calderon')->name('suc_quito_calderon');
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');
Route::get('/suc_quito_matriz', 'SucursalesController@suc_quito_matriz')->name('suc_quito_matriz');

//Vista Sucursal Ambato
Route::get('/suc_ambato', 'SucursalesController@suc_ambato')->name('suc_ambato');

//Vista Sucursal Ibarra
Route::get('/suc_ibarra', 'SucursalesController@suc_ibarra')->name('suc_ibarra');

//Vista Sucursal Portoviejo
Route::get('/suc_portoviejo', 'SucursalesController@suc_portoviejo')->name('suc_portoviejo');

//Vista Sucursal Santo Domingo
Route::get('/suc_santo', 'SucursalesController@suc_santo')->name('suc_santo');
//<!------------------SUCURSALES STO DOMINGO------------->
Route::get('/suc_sto1', 'SucursalesController@suc_sto1')->name('suc_sto1');
Route::get('/suc_sto2', 'SucursalesController@suc_sto1')->name('suc_sto2');
Route::get('/suc_sto3', 'SucursalesController@suc_sto1')->name('suc_sto3');
