<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;



class EventController extends Controller
{
    public function all()
    {
        $events = Event::with('event')->get();
        return response()->json($event, 200);
    }
    
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }
    

    public function index()
    {
        $event = Event::select('nombre','fecha', 'lugar')->get();
        return response()->json($event, 200);
    }
    
    
}

