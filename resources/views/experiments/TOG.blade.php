@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Teor de óleos e graxas (TOG)</h1>
    </center>
    <br>
    <br>

    <div class="row">

        <h3 class="fw-bold p-4">Últimas 20 ações</h3>
        {{$calculo}}
    </div>
</div>
@endsection
