@extends('smallLayouts.core')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Registrando baixa ao '{{$item->name}}'</h1>
        <h3 class="fw-bold p-4">Unidades disponíveis deste item específico: {{ $item->quantity }}</h3>
    </center>
    <br>
    <br>

    <div class="row" style="align-items: center; justify-content:center;">
        @include('flash-message')


        <div class="demo-vertical-spacing demo-only-element col-md-8">
            <form onsubmit="loading('main_container')" method="POST" action="{{ route('save_stock_off', $item->id) }}" enctype='multipart/form-data'>
                @csrf
                <div id="loading" style="display: none; z-index: 10; position: absolute; left: 653px; top: 262px;">
                    <img src="{{ asset('assets/img/loading.gif') }}" width="50" style="opacity: 1.0; filter: contrast(900%);" alt="">
                </div>
                <div class="mb-3">
                    <label for="defaultFormControlInput" class="form-label">Quantidade de itens que tiveram baixas</label>
                    <input type="number" class="form-control" name="stockOff" id="defaultFormControlInput" value="1" min="1" max="{{$item->quantity}}" aria-describedby="defaultFormControlHelp" />
                </div>

                <button type="button" onclick="window.history.back()" class="btn btn-label-secondary">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Registrar baixa"></input>
            </form>
        </div>
    </div>
</div>
@endsection
