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

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

 Route::get('/users', 'UserController@usuarios');

 //LOGIN
 Route::post('/login', 'Auth/LoginController@login')->name('login');

 //RUTAS DEPARTAMENTOS
 Route::get('/departamentos', 'DepartamentosController@departamentos');

 //Vista Principal
 Route::get('/index_dep', 'DepartamentosController@dep');

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

//SUCURSALES
 Route::get('/sucursales', function () {
     return view('sucursales/index_suc');
 })->name('sucursales');

 //Vista Sucursal Quito
 Route::get('/suc_quito', 'SucursalesController@suc_quito')->name('suc_quito');

 //Vista Sucursal Ambato
 Route::get('/suc_ambato', 'SucursalesController@suc_ambato')->name('suc_ambato');

 //Vista Sucursal Ibarra
 Route::get('/suc_ibarra', 'SucursalesController@suc_ibarra')->name('suc_ibarra');

 //Vista Sucursal Portoviejo
 Route::get('/suc_portoviejo', 'SucursalesController@suc_portoviejo')->name('suc_portoviejo');

 //Vista Sucursal Santo Domingo
 Route::get('/suc_santo', 'SucursalesController@suc_santo')->name('suc_santo');




