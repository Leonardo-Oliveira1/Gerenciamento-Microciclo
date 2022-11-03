<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContainerType;

class tablesOperations extends Controller
{
    public function deleteContainerType($id)
    {
        ContainerType::where('id', $id)->delete();

        return redirect()->route('containers');
    }

    public function editContainerType($id)
    {
        ContainerType::where('id', $id)->delete();

        return redirect()->route('containers');
    }
}
