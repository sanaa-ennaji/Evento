<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function ctreateReservation(Request $request){
       
      
            $reservation =$request->validate([
                'type' => ['required'],
                'event_id' => ['required'],
               
          
            ]);
            // dd($reservation);
            $reservation['user_id'] = auth()->id();
            Reservation::create($reservation);
            // return response()->json($reservation, 200);
            return redirect()->back()->with('success', 'done successfully');
    
        }


// manuallyu accepetation
        public function accepteReservation(Request $request, $id)
        {
            $request->validate([
                'is_validated' => 'required',
            ]);
       
            $reservation = Reservation::findOrFail($id);
            if (Auth::id() !== $reservation->user_id) {
                return view('/evento');
            }
        
            $reservation->update(['is_validated' => $request->input('is_validated')]);
       
            return redirect()->back()->with('success', 'status updated successfully');
        }


    public function showReservation(){
            $userId = Auth::id();
            $reservations = Reservation::where('user_id', $userId)->get();
        
            return view('client.reservation', compact('reservations'));
        

    }

 
    public function showticket($id)
    {
        $userId = Auth::id();
        $reservation = Reservation::where('user_id', $userId)
            ->where('id', $id)
            ->where(function ($query) {
                $query->where('is_validated', 'accepted')
                    ->orWhereHas('event', function ($eventQuery) {
                        $eventQuery->where('reservation_approval', true);
                    });
            })
            ->first();
        if (!$reservation) {
            return abort(404);
        }
    
        return view('client.ticket', compact('reservation'));
    }
    




   
}
