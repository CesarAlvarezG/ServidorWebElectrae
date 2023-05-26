<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;


class logincontroller extends Controller
{
    public function login(Request $request){

        //$credentials= $request->validated();
    
        $remember = $request-> filled('remember');
    
        if(Auth::attempt($request->only('email', 'password'), $remember )){
            $request->session()->regenerate();
    
            return redirect('mediciones') ;
        }
        return redirect('login');
       

        throw ValidationException::withMessages([
            //'email' => __('auth.failed')
            'email' => 'Credenciales invalidas' 
        ]);
    }

    public function logout( Request $request, Redirector $redirect){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return $redirect -> to('/');


    }




}
