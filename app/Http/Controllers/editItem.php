<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;

use App\Http\Controllers\registerItem;
use App\Http\Controllers\registerContainerType;
use App\Http\Controllers\registerCategory;

class editItem extends Controller
{
    public function index(Request $request, $id)
    {
        $item = new registerItem;
        $containers = new registerContainerType;
        $categories = new registerCategory;


        return view('editLayouts.itens', [
            'data' => $this->getData($request, $id),
            'item' => $item->showItem($id),
            'containers' => $containers->showContainers(),
            'categories' => $categories->showCategories(),
        ]);
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

    public function edit(Request $request, $id){

        $data = $this->getData($request);

        $item = Item::find($id);

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

        $item->save();

        return redirect('/itens')
        ->with('success','Item alterado com sucesso!');
    }
}

