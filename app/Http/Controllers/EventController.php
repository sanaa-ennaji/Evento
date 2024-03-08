<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function ctreateEvent(Request $request){
      
        $Event =$request->validate([
            'departure' => ['required'],
            'destination' => ['required'],
        ]);
        
        $Event['user_id'] = auth()->id();
        Event::create($Event);
       return response()->json($Event, 200);

    }


    public function showEvent (){


    }

    public function getEventById (){


    }
    public function updateEvent(){

    }

    public function deleteEvent(){

    }
}
