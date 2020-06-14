<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::apiResources([
        'condominios'=>'CondominiosController',
        'invitado'=>'InvitadoController',
        'contratos'=>'ContratosController',
        'ticketsolicitud'=>'TicketsolicitudController',
        'casas'=>'CasasController',
        'invitadosfrecuentes'=>'InvitadosfrecuentesController',
        'reportes'=>'ReportesController',
        'registrovisita'=>'RegistrovisitaController',
        'automovil'=>'AutomovilController'
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

