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

        dd($request);

        $name = $request->input('item_name');
        $category = $request->input('category');
        $expiration_date = $request->input('expiration_date');
        $used_in = $request->input('used_in');
        $container_type = $request->input('container_type');
        $volume = $request->input('volume');
        $unit_type = $request->input('unit_type');
        $brand_name = $request->input('brand_name');
        $quantity_in_stock = $request->input('quantity_in_stock');
        $last_activity_by = "Leonardo Oliveira";

        $data = (object) array(
            'item' => (object) array(
                 'name' => $name,
                 'category' => $category,
                 'expiration_date' => $expiration_date,
                 'used_in' => $used_in,
                 'container_type' => $container_type,
                 'volume' => $volume,
                 'unit_type' => $unit_type,
                 'brand_name' => $brand_name,
                 'quantity_in_stock' => $quantity_in_stock,
                 'last_activity_by' => $last_activity_by,
                )
            );

            dd($data);
        return $data;

    }

    public function store(Request $request){

        /*$product = new Product;

        $product->name = $data->product->product_name;
        $product->wholesale_unit_price = $data->product->wholesale_value;
        $product->final_unit_price = $data->product->final_value;
        $product->quantity_in_stock = $data->product->quantity_in_stock;
        $product->category = $data->product->category;

        $product->save();*/

        /*return redirect('/itens');*/
    }
}
