<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class registerItem extends Controller
{
    public function index(Request $request){
        return view('itens', [
            'data' => $this->getData($request),
            'items' => $this->showItems()]);
    }

    public function showItems(){

        $items = Item::orderBy('name', 'ASC')->get();

        return $items;
    }

    public function getData(Request $request){

        $product_name = $request->input('product_name');
        $quantity_in_stock = $request->input('quantity_in_stock');
        $category = $request->input('category');

        $data = (object) array(
            'product' => (object) array(
                 'product_name' => $product_name,
                 'quantity_in_stock' => $quantity_in_stock,
                 'category' => $category,
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        /*$product = new Product;

        $product->name = $data->product->product_name;
        $product->wholesale_unit_price = $data->product->wholesale_value;
        $product->final_unit_price = $data->product->final_value;
        $product->quantity_in_stock = $data->product->quantity_in_stock;
        $product->category = $data->product->category;

        $product->save();*/

        return redirect('/itens');
    }
}
