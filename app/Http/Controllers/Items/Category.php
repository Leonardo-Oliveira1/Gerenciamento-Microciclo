<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\CategoryItem;

use App\Http\Controllers\historyController;

class Category extends Controller
{
    public function index()
    {
        return view('itens_categories', [
            'categories' => $this->showCategories()
        ]);
    }

    public function indexEdit($id)
    {
        return view('editLayouts.itens_categories', [
            'category' => $this->showCategory($id),
        ]);
    }

    public function showCategories()
    {
        $category = CategoryItem::orderBy('name', 'ASC')->get();

        return $category;
    }

    public function showCategory($id)
    {
        $category = CategoryItem::where('id', "=", $id)->first();

        return $category;
    }

    public function getData(Request $request)
    {
        $category = $request->input('category_name');

        $data = (object) array(
            'category' => (object) array(
                'name' => $category,
                'last_activity' => Auth::user()->name
            )
        );

        return $data;
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);

        $category = new CategoryItem;
        $history = new historyController;

        $category->name = $data->category->name;
        $category->add_by = $data->category->last_activity;

        if (!CategoryItem::where('name', $data->category->name)->get()->isEmpty()) {
            return redirect()->route('categories')
                ->with('error', 'Categoria já cadastrada!');
        } else {
            $category->save();
        }
        return redirect('/categorias');
    }

    public function edit(Request $request, $id)
    {
        $data = $this->getData($request);

        $category = CategoryItem::find($id);

        $category->name = $data->category->name;
        $category->add_by = $data->category->last_activity;

        $category->save();

        return redirect()->route('categories')
            ->with('success', 'Categoria alterada com sucesso!');
    }

    public function delete($id)
    {
        CategoryItem::where('id', $id)->delete();

        return redirect()->route('categories');
    }
}
