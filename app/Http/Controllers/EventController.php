<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function ctreateEvent(Request $request){
      
        $Event =$request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'normal_price' => ['required'],
            'VIP_price' => ['required'],
            'date' => ['required'],
            'lieu' => ['required'],
            'places' => ['required'],
            'category_id' => ['required'],
            'event_time' => ['required'],
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/img', $imageName);
            $Event['image'] = $imageName;
        }
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
