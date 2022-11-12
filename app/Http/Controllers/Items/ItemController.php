<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;

use App\Http\Controllers\Items\Category;
use App\Http\Controllers\Items\ContainersTypes;
use App\Http\Controllers\HistoryController;

class ItemController extends Controller
{
    public function index()
    {
        $categories = new Category;
        $containers = new ContainersTypes;

        return view('itens', [
            'items' => $this->showItems(),
            'categories' => $categories->showCategories(),
            'containers' => $containers->showContainers()
        ]);
    }

    public function indexEdit($id)
    {
        $containers = new ContainersTypes;
        $categories = new Category;

        return view('editLayouts.itens', [
            'item' => $this->showItem($id),
            'containers' => $containers->showContainers(),
            'categories' => $categories->showCategories(),
        ]);
    }


    public function showItems()
    {
        $items = Item::orderBy('name', 'ASC')->get();

        return $items;
    }

    public function showItem($id)
    {
        $item = Item::where('id', "=", $id)->first();

        return $item;
    }

    public function getData(Request $request)
    {
        $name = $request->input('item_name');
        $category = $request->input('category');
        $used_in = $request->input('used_in');
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

    public function store(Request $request)
    {
        $data = $this->getData($request);

        $item = new Item;

        $item->name = $data->item->name;
        $item->category = $data->item->category;
        $item->container_type = $data->item->container_type;
        $item->volume = $data->item->volume;
        $item->volume_measure = $data->item->unit_type;
        $item->brand = $data->item->brand;
        $item->used_in = $data->item->used_in;
        $item->last_activity_by = $data->item->last_activity_by;

        if ($data->item->brand == null) {
            $item->brand = 'Não informado';
        }

        if ($data->item->used_in == null) {
            $item->used_in = 'Não informado';
        }

        if ($data->item->volume == null) {
            $item->volume = '0';
        }

        if ($data->item->unit_type == null) {
            $item->volume_measure = '';
        }

        if (!Item::where('name', $data->item->name)->get()->isEmpty()) {
            return redirect()->route('items')
                ->with('error', 'Item já cadastrado!');
        } else {
            $item->save();
        }

        return redirect('/itens');
    }

    public function edit(Request $request, $id)
    {
        $data = $this->getData($request);

        $item = Item::find($id);

        $item->name = $data->item->name;
        $item->category = $data->item->category;
        $item->container_type = $data->item->container_type;
        $item->volume = $data->item->volume;
        $item->volume_measure = $data->item->unit_type;
        $item->brand = $data->item->brand;
        $item->used_in = $data->item->used_in;
        $item->last_activity_by = $data->item->last_activity_by;

        if ($data->item->brand == null) {
            $item->brand = 'Não informado';
        }

        if ($data->item->used_in == null) {
            $item->used_in = 'Não informado';
        }

        if ($data->item->volume == null) {
            $item->volume = 0;
        }

        if ($data->item->unit_type == null) {
            $item->volume_measure = 'Não informado';
        }

        $item->save();

        return redirect('/itens')
            ->with('success', 'Item alterado com sucesso!');
    }

    public function delete($id)
    {
        Item::where('id', $id)->delete();

        return redirect()->route('items');
    }
}
