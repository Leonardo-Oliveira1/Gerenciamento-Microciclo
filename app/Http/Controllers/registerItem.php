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
                 'brand' => $brand_name,
                 'quantity_in_stock' => $quantity_in_stock,
                 'last_activity_by' => $last_activity_by
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $item = new Item;

        $item->name = $data->item->name;
        $item->quantity = $data->item->quantity_in_stock;
        $item->expiration_date = $data->item->expiration_date;
        $item->category = $data->item->category;
        $item->container_type = $data->item->container_type;
        $item->volume = $data->item->volume;
        $item->volume_measure = $data->item->unit_type;
        $item->brand = $data->item->brand;
        $item->used_in = $data->item->used_in;
        $item->last_activity_by = $data->item->last_activity_by;

        $item->save();

        return redirect('/');
    }
}
