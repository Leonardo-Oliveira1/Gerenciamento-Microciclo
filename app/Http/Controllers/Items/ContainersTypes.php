<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\ContainerType;

use App\Http\Controllers\historyController;

class ContainersTypes extends Controller
{
    public function index()
    {
        return view('itens_containers_types', [
            'containers' => $this->showContainers()
        ]);
    }

    public function indexEdit($id)
    {
        return view('editLayouts.item_containers_types', [
            'container' => $this->showContainer($id),
        ]);
    }

    public function showContainers()
    {
        $containers = ContainerType::orderBy('name', 'ASC')->get();

        return $containers;
    }

    public function showContainer($id)
    {
        $container = ContainerType::where('id', "=", $id)->first();

        return $container;
    }

    public function getData(Request $request)
    {
        $container = $request->input('container_name');

        $data = (object) array(
            'container' => (object) array(
                'name' => $container,
                'last_activity' => Auth::user()->name
            )
        );

        return $data;
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);

        $container = new ContainerType;
        $history = new historyController;

        $container->name = $data->container->name;
        $container->add_by = $data->container->last_activity;

        if (!ContainerType::where('name', $data->container->name)->get()->isEmpty()) {
            return redirect()->route('containers')
                ->with('error', 'Recipiente já cadastrado!');
        } else {
            $container->save();
        }
        return redirect('/recipientes');
    }

    public function edit(Request $request, $id)
    {
        $data = $this->getData($request);

        $container = ContainerType::find($id);

        $container->name = $data->container->name;
        $container->add_by = $data->container->last_activity;

        $container->save();

        return redirect()->route('containers')
            ->with('success', 'Recipiente alterado com sucesso!');
    }

    public function delete($id)
    {
        ContainerType::where('id', $id)->delete();

        return redirect()->route('containers');
    }
}
