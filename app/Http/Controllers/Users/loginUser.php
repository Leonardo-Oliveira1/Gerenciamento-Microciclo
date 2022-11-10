<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class loginUser extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function auth(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
            ->with('error','Email ou senha inválidas!');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
