<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registerUser extends Controller
{
    public function index(Request $request){
        return view('auth.register', [
            'data' => $this->getData($request)
        ]);
    }

    public function getData(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));

        $data = (object) array(
            'user' => (object) array(
                 'name' => $name,
                 'email' => $email,
                 'password' => $password
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $user = new User;

        $user->name = $data->user->name;
        $user->email = $data->user->email;
        $user->password = $data->user->password;

        if (!User::where('email', $data->user->email)->get()->isEmpty()) {
            return redirect()->route('register')
            ->with('error','Este email já foi utilizado!');
        }else{
            $user->save();
        }
        return redirect()->route('login')
        ->with('info','Você foi redirecionado para a página de login. Utilize o seu email e senha para acessar o sistema.');
    }
}
