<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function Register (Request $request){
       
        $datad = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
            'address' =>['required'],
            'role'=>['required'],
            // 'profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'],
        ]);
       
       
        // if ($request->hasFile('profile')) {
        //     $file = $request->file('profile');
        //     $imageName = time() . '.' . $file->extension();
        //     $file->storeAs('public/img', $imageName);
        //     $datad['profile'] = $imageName;
        // }
        
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
    
        
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'creator') {
                return redirect('/creator/event');
            } elseif ($user->role === 'client') {
                return redirect('/evento');
            }

        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }
    

    public function updateprofile (){

    }

    public function updateuser (){
        
    }
}
