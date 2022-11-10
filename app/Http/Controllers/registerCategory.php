<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryItem;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\historyController;

class registerCategory extends Controller
{
    public function index(Request $request){
        return view('itens_categories', [
            'data' => $this->getData($request),
            'categories' => $this->showCategories()]);
    }

    public function showCategories(){
        $category = CategoryItem::orderBy('name', 'ASC')->get();

        return $category;
    }

    public function showCategory($id){
        $category = CategoryItem::where('id', "=", $id)->first();

        return $category;
    }

    public function getData(Request $request){

        $category = $request->input('category_name');
        $add_by = Auth::user()->name;

        $data = (object) array(
            'category' => (object) array(
                 'name' => $category,
                 'add_by' => $add_by
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $category = new CategoryItem;
        $history = new historyController;

        $category->name = $data->category->name;
        $category->add_by = $data->category->add_by;

        if (!CategoryItem::where('name', $data->category->name)->get()->isEmpty()) {
            return redirect()->route('categories')
            ->with('error','Categoria já cadastrada!');
        }else{
            $category->save();
            $history->saveDataHistory(Auth::user()->name, 'adicionou uma nova categoria chamada', $category->name);
        }
        return redirect('/categorias');
    }
}

