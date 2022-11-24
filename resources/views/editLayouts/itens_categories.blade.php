@extends('smallLayouts.core')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Editando a categoria '{{$category->name}}'</h1>
    </center>
    <br>
    <br>

    <div class="row" style="align-items: center; justify-content:center;">
        <div class="demo-vertical-spacing demo-only-element col-md-8">
            <form onsubmit="loading('main_container')" method="POST" action="{{ route('saveCategorySave', $category->id) }}" enctype='multipart/form-data'>
                <div id="loading" style="display: none; z-index: 10; position: absolute; left: 653px; top: 262px;">
                    <img src="{{ asset('assets/img/loading.gif') }}" width="50" style="opacity: 1.0; filter: contrast(900%);" alt="">
                </div>
                @csrf
                <div class="mb-3">
                    <label for="defaultFormControlInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="category_name" id="defaultFormControlInput" value="{{$category->name}}" aria-describedby="defaultFormControlHelp" />
                </div>

                <button type="button" onclick="window.history.back()" class="btn btn-label-secondary">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Editar categoria"></input>
            </form>
        </div>
    </div>
</div>
@endsection
