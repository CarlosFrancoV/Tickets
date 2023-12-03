<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;



class PurchaseController extends Controller
{
    
    public function getClientPurchases($clientId)
    {
        $client = Client::findOrFail($clientId);
        $purchases = $client->purchases()->get();
        return response()->json($purchases, 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $validatedData = $request->validate([
            'client_id' => 'required',
            'ticket_id' => 'required',
            'cantidad' => 'required',
            'total' => 'required' 

        ]);
    
    
        // Crear la compra con cantidad y total
        $purchase = Purchase::create([
            'client_id' => $validatedData['client_id'],
            'ticket_id' => $validatedData['ticket_id'],
            'cantidad' => $validatedData['cantidad'],
            'total' => $validatedData['total']

        ]);
    
        // Retornar una respuesta adecuada
        return response()->json(['message' => 'Compra creada con éxito', 'compra' => $purchase], 201);
    }

    
}
