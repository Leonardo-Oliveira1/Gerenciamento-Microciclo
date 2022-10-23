<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\adminsControl;
use App\User;


class adminUsersActions extends Controller
{
    public function index(Request $request)
    {
        $users = new adminsControl;

        return view('admin.users_list', [
            'collaborators' => $users->showCollaborators(),
            'admins' => $users->showAdmins(),
        ]);
    }

    public function makeAdmin($id)
    {
        User::where('id', $id)
        ->update(['account_type' => "Administrador(a)"]);

        return redirect('/lista_de_usuarios');
    }

    public function makeCollaborator($id)
    {
        User::where('id', $id)
        ->update(['account_type' => 'Colaborador(a)']);

        return redirect('/aprovar_usuarios');
    }

    public function declineCollaborator($id)
    {
        User::where('id', $id)->delete();

        return redirect('/aprovar_usuarios');
    }
}
