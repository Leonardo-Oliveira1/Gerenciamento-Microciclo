<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContainerType;

use App\Http\Controllers\registerContainerType;


class editContainersTypes extends Controller
{
    public function index(Request $request, $id)
    {
        $container = new registerContainerType;

        return view('editLayouts.item_containers_types', [
            'data' => $this->getData($request),
            'container' => $container->showContainer($id),
        ]);
    }

    public function getData(Request $request){

        dd($request);
        $name = $request->input('item_name');
        $id = $request;
        $data = (object) array(
            'container' => (object) array(
                 'name' => $name,
                )
            );

        return $data;

    }

    public function edit(Request $request){

        $data = $this->getData($request);

        $container = ContainerType::find($id);

        $container->name = $data->container->name;

        $container->save();

        return redirect()->route('items')
        ->with('sucess','Recipiente alterado com sucesso!');
    }
}
