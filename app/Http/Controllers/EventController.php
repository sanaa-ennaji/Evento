<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($Event);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/img', $imageName);
            $Event['image'] = $imageName;
        }
        $Event['user_id'] = auth()->id();
        Event::create($Event);
        // return response()->json($Event, 200);
        return view('/creator/event');

    }

    public function displayEvent()
    {
        $events = Event::where('status', 0)
                        ->orderBy('date', 'asc')
                        ->get();
    
        return view('client.events', ['events' => $events]);
    }
    public function showDetails($id)
    {
        $event = Event::findOrFail($id);
        return view('/eventDetails/{id}', compact('event'));
    }
    

    public function showEventAdmin(){
    $events = Event::all();
    return view('/admin/events' , ['events' => $events]);

    }

    public function accepteEvent(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
    
        $event = Event::findOrFail($id);
        if (Auth::id() !== $event->user_id) {
            return view('/evento');
        }
    
        $event->update(['status' => $request->input('status')]);
   
        return redirect()->back()->with('success', 'status updated successfully');
    }



    public function getEventById (){


    }
    public function updateEvent(){

    }

    public function deleteEvent(){

    }
}
