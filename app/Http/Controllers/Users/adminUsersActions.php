<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;

use App\User;

class adminUsersActions extends Controller
{
    public function index()
    {
        return view('admin.users_list', [
            'collaborators' => $this->showCollaborators(),
            'admins' => $this->showAdmins(),
        ]);
    }

    //GET USER BY ACCOUNT TYPE FROM DATABASE
    public function showCollaborators(){
        $users = User::where('account_type', "Colaborador(a)")->get();

        return $users;
    }

    public function showAdmins(){
        $users = User::where('account_type', "Administrador(a)")->get();

        return $users;
    }

    public function showUnapprovedUsers(){
        $users = User::where('account_type', "Not Accepted")->get();

        return view('admin.approve_users', [
            'users' => $users
        ]);
    }

    //ACTIONS
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
