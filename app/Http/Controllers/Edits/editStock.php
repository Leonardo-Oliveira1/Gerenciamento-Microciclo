<?php

namespace App\Http\Controllers\Edits;

use App\ItemStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Registers\registerStock;

class editStock extends Controller
{
    public function index(Request $request, $name)
    {
        $stock = new registerStock;

        return view('editLayouts.stock', [
            'data' => $this->getData($request, $name),
            'items' => $stock->selectItemByName($name),

        ]);
    }

    public function editStock(Request $request, $id){

        $stock = new registerStock;

        return view('editLayouts.stockOff', [
            'data' => $this->getData($request, $id),
            'item' => $stock->selectItemById($id),
        ]);
    }

    public function getData(Request $request){

        $name = $request->input('item_name');
        $category = $request->input('category');

        $data = (object) array(
            'item' => (object) array(
                 'name' => $name,
                 'category' => $category,
                )
            );

        return $data;

    }

    public function edit(Request $request, $id){

        $data = $this->getData($request);

        $item = ItemStock::find($id);

        $item->name = $data->item->name;
        $item->category = $data->item->category;

        $item->save();

        return redirect('/itens')
        ->with('success','Item alterado com sucesso!');
    }
}
