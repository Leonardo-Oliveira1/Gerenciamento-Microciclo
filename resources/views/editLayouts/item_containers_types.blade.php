@extends('smallLayouts.core')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Editar o recipiente '{{$container->name}}'</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="demo-vertical-spacing demo-only-element col-md-8">
            <form method="POST" action="/admin/edit/container_type/save" enctype='multipart/form-data'>
                @csrf
                <div class="mb-3">
                    <label for="defaultFormControlInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="defaultFormControlInput" value="{{$container->name}}" aria-describedby="defaultFormControlHelp" />
                </div>

                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Editar recipiente"></input>
            </form>
        </div>
    </div>
</div>
@endsection
