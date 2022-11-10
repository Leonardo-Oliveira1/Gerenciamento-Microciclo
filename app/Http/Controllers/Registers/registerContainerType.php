<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContainerType;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\historyController;

class registerContainerType extends Controller
{
    public function index(Request $request){
        return view('itens_containers_types', [
            'data' => $this->getData($request),
            'containers' => $this->showContainers()]);
    }

    public function showContainers(){
        $containers = ContainerType::orderBy('name', 'ASC')->get();

        return $containers;
    }

    public function showContainer($id){
        $container = ContainerType::where('id', "=", $id)->first();

        return $container;
    }

    public function getData(Request $request){

        $container = $request->input('container_name');
        $add_by = Auth::user()->name;

        $data = (object) array(
            'container' => (object) array(
                 'name' => $container,
                 'add_by' => $add_by
                )
            );

        return $data;

    }

    public function store(Request $request){

        $data = $this->getData($request);

        $container = new ContainerType;
        $history = new historyController;

        $container->name = $data->container->name;
        $container->add_by = $data->container->add_by;

        if (!ContainerType::where('name', $data->container->name)->get()->isEmpty()) {
            return redirect()->route('containers')
            ->with('error','Recipiente já cadastrado!');
        }else{
            $container->save();
            $history->saveDataHistory(Auth::user()->name, 'adicionou um novo recipiente chamado', $container->name);
        }
        return redirect('/recipientes');
    }
}
