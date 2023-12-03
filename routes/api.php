<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PurchaseController;


Route::prefix('v1')->group(function () {
    Route::get('/clients', [ClientController::class, 'index']); // Obtiene todos los clientes
    Route::get('/events', [EventController::class, 'index']); // Obtiene el listado de eventos disponibles con la informacion mas importante (artista / lugar / fecha)
    Route::get('/event/{id}', [EventController::class, 'show']); // Obtiene la información completa de UN evento

    Route::post('/purchase', [PurchaseController::class, 'store']); // Crea una compra


    Route::get('/tickets', [TicketController::class, 'index']); // Obtiene el listado de tickets disponibles

    Route::get('/clients/{clientId}/purchases', [PurchaseController::class, 'getClientPurchases']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
