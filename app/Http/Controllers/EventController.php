<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
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
        return redirect()->back()->with('success', 'status updated successfully');

    }

    
    public function displayEvent(Request $request)
    {
        // Start with the base query
        $query = Event::where('status', 'accepted')
                       ->orderBy('date', 'asc')
                       ->with('creator', 'category'); 
    
       
        if ($request->has('category') && $request->input('category') != '') {
            $categoryId = $request->input('category');
            $query->where('category_id', $categoryId);
        }
        $events = $query->paginate(10);
        return view('client.events', ['events' => $events]);
    }
    


//     public function displayEvent()
// {
//     $events = Event::where('status', 'accepted')
//                    ->orderBy('date', 'asc')
//                    ->with('creator') 
//                    ->paginate(10);

//     return view('client.events', ['events' => $events]);
// }
    
    public function showDetails($id)
    {
        $event = Event::findOrFail($id);
        if (!$event) {
            return abort(404); 
        }
        return view('client.eventDetails', compact('event'));
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

    public function approvementType(Request $request, $id)
    {
        
        $request->validate([
            'reservation_approval' => 'required',
        ]);
       
    
        $event = Event::findOrFail($id);
        if (Auth::id() !== $event->user_id) {
            return view('/evento');
        }
    
        $event->update(['reservation_approval' => $request->input('reservation_approval')]);
   
        return redirect()->back()->with('success', 'status updated successfully');
    }

    public function showCategoryAndEvents()
{
    $userId = Auth::id();
    $categories = Category::all();
    $events = Event::where('user_id', $userId)->get();

    return view('creator.event', compact('categories', 'events'));
}


public function deleteEvent(Event $event){
    if (auth()->user()->id == $event['user_id'] ){
        $event->reservations()->delete();
        $event->delete();
     } 
     return redirect('/creator/event');
}
    

    public function showReservationsForUserEvents()
    {
        $userId = Auth::id();
        $reservations = Event::where('user_id', $userId)->with('reservations')->get()->pluck('reservations')->flatten();
        return view('creator.reservations', compact('reservations'));
    }

   

    public function search(Request $request)
    {
     $query = $request->input('query');
 
     $events = Event::where('title', 'like', '%' . $query . '%')->get();
 
     return view('client.events', ['events' => $events , 'query' => $query]);
 }
 

 public function updateEvent(){

 }

   










   // public function creatorEvents()
    // {
    //     $userId = Auth::id();
    //     $events =  Event::where('user_id', $userId)->get();
    //     return view('creator.event', compact('events'));
    // }
    
}
