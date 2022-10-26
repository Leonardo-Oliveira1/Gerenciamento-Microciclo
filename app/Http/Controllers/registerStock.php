<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\registerCategory;
use App\Http\Controllers\registerItem;
use App\ItemStock;

class registerStock extends Controller
{
    public function index(Request $request){

        $item = new registerItem;
        $categories = new registerCategory;
        $containers = new registerContainerType;

        return view('stock', [
            'data' => $this->getData($request),
            'items' => $item->showItems(),
            'stocks' => $this->showStock(),
            'categories' => $categories->showCategories(),
            'containers' => $containers->showContainers()]);
    }

    public function showStock(){
        $stock = ItemStock::orderBy('name', 'ASC')->get();

        return $stock;
    }

    public function getData(Request $request){

        $name = $request->input('item_name');
        $expiration_date = $request->input('expiration_date');
        $quantity = $request->input('quantity');
        $last_activity_by = Auth::user()->name;

        $data = (object) array(
            'item' => (object) array(
                 'name' => $name,
                 'expiration_date' => $expiration_date,
                 'quantity' => $quantity,
                 'last_activity_by' => $last_activity_by
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $stock = new ItemStock;

        $stock->name = $data->item->name;
        $stock->quantity = $data->item->quantity;
        $stock->expiration_date = $data->item->expiration_date;
        $stock->last_activity_by = $data->item->last_activity_by;

        if (!ItemStock::where('name', $data->item->name)->get()->isEmpty()) {
            return redirect()->route('stock')
            ->with('error','Item já cadastrado!');
        }else{
            $stock->save();
        }

        return redirect('/');
    }
}
