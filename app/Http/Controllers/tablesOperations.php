<?php

namespace App\Http\Controllers;

use App\CategoryItem;
use Illuminate\Http\Request;

use App\ContainerType;

class tablesOperations extends Controller
{
    public function deleteContainerType($id)
    {
        ContainerType::where('id', $id)->delete();

        return redirect()->route('containers');
    }

    public function deleteCategory($id)
    {
        CategoryItem::where('id', $id)->delete();

        return redirect()->route('categories');
    }
}
