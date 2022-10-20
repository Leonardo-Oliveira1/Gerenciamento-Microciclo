<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class adminsControl extends Controller
{

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

        return $users;
    }
}
