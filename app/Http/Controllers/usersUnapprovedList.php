<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\adminsControl;

class usersUnapprovedList extends Controller
{
    public function index()
    {

        $users = new adminsControl;

        return view('admin.approve_users', [
            'users' => $users->showUnapprovedUsers()
        ]);
    }
}
