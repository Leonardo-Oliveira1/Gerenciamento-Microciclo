<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\adminsControl;
use App\User;


class usersList extends Controller
{
    public function index(Request $request)
    {
        $users = new adminsControl;

        return view('admin.users_list', [
            'collaborators' => $users->showCollaborators(),
            'admins' => $users->showAdmins()
        ]);
    }

    public function store($id)
    {

        $admin = "Administrador(a)";

        User::where('id', $id)
        ->update(['account_type' => $admin]);

        return redirect('/lista_de_usuarios');
    }
}
