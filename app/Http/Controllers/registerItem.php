<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\registerCategory;


class registerItem extends Controller
{
    public function index(Request $request){

        $categories = new registerCategory;
        $containers = new registerContainerType;

        return view('itens', [
            'data' => $this->getData($request),
            'items' => $this->showItems(),
            'categories' => $categories->showCategories(),
            'containers' => $containers->showContainers()]);
    }

    public function showItems(){
        $items = Item::orderBy('name', 'ASC')->get();

        return $items;
    }

    public function showItem($id){
        $item = Item::where('id', "=", $id)->first();

        return $item;
    }

    public function getData(Request $request){

        $name = $request->input('item_name');
        $category = $request->input('category');
        $used_in = $request->input('used_in', '');
        $container_type = $request->input('container_type');
        $volume = $request->input('volume');
        $unit_type = $request->input('unit_type');
        $brand_name = $request->input('brand_name');
        $last_activity_by = Auth::user()->name;

        $data = (object) array(
            'item' => (object) array(
                 'name' => $name,
                 'category' => $category,
                 'used_in' => $used_in,
                 'container_type' => $container_type,
                 'volume' => $volume,
                 'unit_type' => $unit_type,
                 'brand' => $brand_name,
                 'last_activity_by' => $last_activity_by
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $item = new Item;

        $item->name = $data->item->name;
        $item->category = $data->item->category;
        $item->container_type = $data->item->container_type;
        $item->volume = $data->item->volume;
        $item->volume_measure = $data->item->unit_type;

        if($data->item->brand == null){
            $item->brand = 'Não informado';
        }else{
            $item->brand = $data->item->brand;
        }

        if($data->item->used_in == null){
            $item->used_in = 'Não informado';
        }else{
            $item->used_in = $data->item->used_in;
        }

        $item->last_activity_by = $data->item->last_activity_by;

        if (!Item::where('name', $data->item->name)->get()->isEmpty()) {
            return redirect()->route('items')
            ->with('error','Item já cadastrado!');
        }else{
            $item->save();
        }

        return redirect('/itens');
    }
}
