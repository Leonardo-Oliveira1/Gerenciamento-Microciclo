<?php

namespace App\Http\Controllers\Edits;

use Illuminate\Http\Request;
use App\ContainerType;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Registers\registerContainerType;


class editContainersTypes extends Controller
{
    public function index(Request $request, $id)
    {
        $container = new registerContainerType;

        return view('editLayouts.item_containers_types', [
            'data' => $this->getData($request, $id),
            'container' => $container->showContainer($id),
        ]);
    }

    public function getData(Request $request){

        $name = $request->input('name');
        $data = (object) array(
            'container' => (object) array(
                    'name' => $name,
                    'last_activity' => Auth::user()->name
                )
            );

        return $data;
    }

    public function edit(Request $request, $id){

        $data = $this->getData($request);

        $container = ContainerType::find($id);

        $container->name = $data->container->name;
        $container->add_by = $data->container->last_activity;

        $container->save();

        return redirect()->route('containers')
        ->with('success','Recipiente alterado com sucesso!');
    }
}
