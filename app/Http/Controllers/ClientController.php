<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients, 200);
    }

    public function show($id)
    {
        // Implementación de acuerdo a tus necesidades
    }
}
