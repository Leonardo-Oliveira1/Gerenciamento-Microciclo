@extends('smallLayouts.core')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Editando o item '{{$item->name}}'</h1>
    </center>
    <br>
    <br>

    <div class="row" style="align-items: center; justify-content:center;">
        <div class="demo-vertical-spacing demo-only-element col-md-8">
            <form onsubmit="loading('main_container')" method="POST" action="{{ route('saveItem', $item->id) }}" enctype='multipart/form-data'>
                <div id="loading" style="display: none; z-index: 10; position: absolute; left: 653px; top: 262px;">
                    <img src="{{ asset('assets/img/loading.gif') }}" width="50" style="opacity: 1.0; filter: contrast(900%);" alt="">
                </div>
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="item_name" class="form-label">Nome do item <span style="color: red;">*</span></label>
                            <input type="text" id="item_name" name="item_name" class="form-control" required value="{{ $item->name }}" disabled placeholder="Digite o nome do item">
                        </div>
                        <div class="col mb-4">
                            <label for="used_in" class="form-label">Utilizado no experimento: </label>
                            <input type="text" id="used_in" name="used_in" class="form-control" value="{{ $item->used_in }}" placeholder="Experimento em que é utilizado">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="category" class="form-label">Categoria <span style="color: red;">*</span></label>
                            <select class="form-select" name="category" id="category" required>
                                <option value="{{ $item->category }}" selected>{{ $item->category }}</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-4">
                            <label for="container_type" class="form-label">Tipo do recipiente <span style="color: red;">*</span></label>
                            <select class="form-select" name="container_type" id="container_type" required>
                                <option value="{{ $item->container_type }}" selected>{{ $item->container_type }}</option>
                                @foreach($containers as $container)
                                <option value="{{ $container->name }}">{{ $container->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col mb-4">
                            <label for="volume" class="form-label">Volume (ou peso)</label>
                            <input type="number" name="volume" id="volume" class="form-control" value="{{ $item->volume }}" placeholder="0.00" step="any">
                        </div>


                        <div class="col mb-4">
                            <label for="unit_type" class="form-label">Medida</label>
                            <select class="form-select" name="unit_type" id="unit_type">
                                <option value="{{ $item->volume_measure }}" selected>{{ $item->volume_measure }}</option>
                                <option value="Kg">Kg</option>
                                <option value="g">g</option>
                                <option value="L">L</option>
                                <option value="ml">ml</option>
                                <option value="µL">µL</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="brand_name" class="form-label">Marca do produto</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" value="{{ $item->brand }}" placeholder="Digite o nome da marca">
                        </div>
                    </div>
                </div>

                <button type="button" onclick="window.history.back()" class="btn btn-label-secondary">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Editar item"></input>
            </form>
        </div>
    </div>
</div>
@endsection
