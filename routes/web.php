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
 //Vistas Principales
 Route::get('/departamentos', function () {
     return view('departamentos/index_dep');
 })->name('departamentos');


 Auth::routes();

 Route::get('/users', 'UserController@usuarios');

 //LOGIN
 Route::post('/login', 'Auth/LoginController@login')->name('login');

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
     return view('sucursales/index_suc');
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



