<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

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



    public function showReservation(){


    }

    public function updateReservation(){

    }

    public function deleteReservation(){

    }
}
