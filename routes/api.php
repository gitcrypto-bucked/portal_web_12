<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\AuthApi;



Route::get('getUser/token/{token}/id/{id}',[\Api\testApi::class,'test']);





/*---API @Pedro Leão ---*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//// Autenticação
//Route::post('/api/login', [Api\controllers\LoginController::class, 'index']);
//
//////////////////////////
//// Dashboard ///////////
//////////////////////////
//
//// Dashboard | Read
//Route::get('/api/faturamento/{idCliente}/total/{data_inicio?}/{data_fim?}', [Api\controllers\graphController::class, 'getTotalFaturamento']);
//Route::get('/api/paginas/{idCliente}/mes/{data_fim?}', [Api\controllers\graphController::class, 'getTotalFaturamento']graphController::class, 'getPaginasMes']);
//Route::get('/api/chamados/{idCliente}/{data_inicio?}/{data_fim?}', [Api\controllers\graphController::class, 'getTotalFaturamento']graphController::class, 'getChamadosGraph']);
//Route::get('/api/sla-percentual/{idCliente}/{periodo_inicio?}/{periodo_fim?}', [Api\controllers\graphController::class, 'getTotalFaturamento']GraphController::class, 'getSLADentroPercent']);
//
//
//////////////////////////
//// Inventário //////////
//////////////////////////
//
//// Inventário | Read
//Route::get('/api/inventario', [Api\controllers\Inventario::class, 'getInventario']);
//Route::get('/api/inventario/{id}', [Api\controllers\Inventario::class, 'getInventarioDetails']);
//
//
//////////////////////////
//// Faturamento /////////
//
//// Faturamento | Read
//Route::get('/api/faturamento', [Api\controllers\Invoice::class, 'getFaturamento']);
//Route::get('/api/faturamento/{id}', [Api\controllers\Invoice::class, 'getDetailsFaturamento']);
//Route::get('/api/faturamento/total', [Api\controllers\Invoice::class, 'getDashFaturamento']);
//
//// Faturamento | Update
//Route::post('/api/faturamento/{id}/update/upload', [Api\controllers\Invoice::class, 'uploadInvoice']);
//
//
//////////////////////////
//// Chamados ////////////
//
//// Chamados | Read
//Route::get('/api/chamados', [Api\controllers\Chamados::class, 'getChamados']);
//Route::get('/api/chamados/dashboard', [Api\controllers\Chamados::class, 'getDashboardChamados']);
//// Chamados | Update
//Route::post('/api/chamados/update/upload', [Api\controllers\Chamados::class, 'uploadChamados']);
//////////////////////////
//// Rastreio ////////////
//// Tracking | Read
//Route::get('/api/rastreio', [Api\controllers\TrackingController::class, 'getTracking'])->middleware('auth');
//
//////////////////////////
//// Notícias ////////////
//
//Route::get('/api/noticias', [Api\controllers\NewsController::class, 'dashboard']);
//Route::post('/api/noticias/create', [Api\controllers\NewsController::class, 'registerNews']);
//
//// Notícias | Update
//Route::post('/api/noticias/{id}/desativar', [Api\controllers\NewsController::class, 'deactivateNews']);
//
//// Notícias | Delete
//Route::post('/api/noticias/{id}/delete', [Api\controllers\NewsController::class, 'deleteNews']);
//
//
//////////////////////////
//// Notificações ////////
//
//// Notificações | Read
//Route::get('/api/notificacoes', [Api\controllers\NotificationController::class, 'getNotifications']);
//
//// Notificações | Create
//Route::post('/api/notificacoes/create', [Api\controllers\NotificationController::class, 'addNewNotification']);
//
//// Notificações | Update
//Route::post('/api/notificacoes/{id}/update/desativar', [Api\controllers\NotificationController::class, 'disableNotification']);
//
//
//////////////////////////
//// Usuários ////////////
//
//// Usuários | Create
//Route::get('/api/usuarios/create', [Api\controllers\UserController::class, 'newUser']);
//
//// Usuários | Update
//Route::post('/api/usuarios/{id}/update', [Api\controllers\UserController::class, 'updateUser']);
//Route::post('/api/usuarios/{id}/update/senha', [Api\controllers\UserController::class, 'registerUserPassword']);
//
//// Usuários | Check
//Route::get('/api/usuarios/{token}', [Api\controllers\UserController::class, 'checkUserToken'])->name('user-token');
//
//// Usuários | Recover
//Route::post('/api/usuarios/{id}/recover/senha', [Api\controllers\UserController::class, 'recoverPassword']);
//
//// Usuários | Filters
//Route::get('/api/usuarios/filter', [Api\controllers\UserController::class, 'filterUsers']);
//
//
//////////////////////////
//// Clientes ////////////
//
//// Clientes | Read
//Route::get('/api/clientes', [Api\controllers\LoginController::class, 'index']);
//Route::get('/api/clientes/userlist', [Api\controllers\ClienteController::class, 'getClienteUserList']); //??
//Route::get('/api/clientes/{id}/usuarios', [Api\controllers\ClienteController::class, 'getUsersFromCliente']); //??
//
//// Cliente | Update
//Route::post('/api/clientes/{id}/update/ativar', [Api\controllers\ClienteController::class, 'ActiveClientes']);
//Route::post('/api/clientes/{id}/update/desativar', [Api\controllers\ClienteController::class, 'DeactiveClientes']);
//Route::post('/api/clientes/{id}/update/logo', [Api\controllers\ClienteController::class, 'UpdateLogoClientes']);
//
//// Cliente | Delete
//Route::delete('/api/clientes/{id}/delete', [Api\controllers\ClienteController::class, 'RemoveClientes']);
//
//// Clientes | Filters
//Route::get('/api/clientes/filters', [Api\controllers\ClienteController::class, 'filterClientes']);
