<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function Register (Request $request){
       
        $datad = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
            'address' =>['required'],
            'role'=>['required'],
        ]);
       
        
        $datad['password'] = bcrypt($datad['password']);
       $user= User::create($datad);
       auth()->login($user);

          return redirect('/evento');
      
    }

    public function logout (){
        auth()->logout();
        return redirect('/evento') ;
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'logemail' => 'required',
            'logpassword' => 'required'
        ]);
    
        if (auth()->attempt(['email' => $data['logemail'], 'password' => $data['logpassword']])) {
            $request->session()->regenerate();
    
            $user = auth()->user();
    
            if ($user->status == 0) {
               
                abort(404, 'User not found');
            }
    
            if ($user->role === 'admin') {
                return redirect('/admin/events');
            } elseif ($user->role === 'organisator') {
                return redirect('/creator/event');
            } elseif ($user->role === 'client') {
                return redirect('/evento');
            }
        }
    
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    
    

    public function showUsers(){
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function updateuserstatus(Request $request , $id){
        
        $request->validate([
            'status' => 'required',
        ]);
       
    
        $user = User::findOrFail($id);
     
    
        $user->update(['status' => $request->input('status')]);
   
        return redirect()->back()->with('success', 'status updated successfully');
    }


    

public function userStatistics()
{
    $userId = Auth::id();
    $numberOfEvents = Event::where('user_id', $userId)->count();
    $numberOfReservations = Reservation::whereIn('event_id', function ($query) use ($userId) {
        $query->select('id')->from('events')->where('user_id', $userId);
    })->count();

    return view('creator.statistique', compact('numberOfEvents', 'numberOfReservations'));
}

public function statistics()
{
    $userCount = User::count();
    $acceptedEventsCount = Event::where('status', 'accepted')->count();
    $acceptedReservationsCount = Reservation::where('is_validated', 'accepted')->count();

    return view('admin.statistique', compact('userCount', 'acceptedEventsCount', 'acceptedReservationsCount'));
}

}
