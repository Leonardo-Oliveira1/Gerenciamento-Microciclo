<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryItem;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\registerCategory;

class editCategory extends Controller
{
    public function index(Request $request, $id)
    {
        $category = new registerCategory;

        return view('editLayouts.itens_categories', [
            'data' => $this->getData($request, $id),
            'category' => $category->showCategory($id),
        ]);
    }

    public function getData(Request $request){

        $name = $request->input('name');
        $data = (object) array(
            'category' => (object) array(
                    'name' => $name,
                    'last_activity' => Auth::user()->name
                )
            );

        return $data;
    }

    public function edit(Request $request, $id){

        $data = $this->getData($request);

        $category = CategoryItem::find($id);

        $category->name = $data->category->name;
        $category->add_by = $data->category->last_activity;

        $category->save();

        return redirect()->route('categories')
        ->with('success','Categoria alterada com sucesso!');
    }
}
