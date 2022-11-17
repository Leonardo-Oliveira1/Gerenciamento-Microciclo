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
        <br>
        <br>

        <div class="row">
            @if($TOG)
                <h3 class="p-4" style="margin-top: -30px;">É possível produzir <b><span style="color: #30907B">{{ $TOG }} amostras</span></b> com os recursos disponíveis.</h3>
                @else
                <h4 class="p-4" style="margin-top: -30px;">Não há recursos suficientes para realizar este experimento.</h4>
            @endif
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Hexano</span></b> em estoque: {{ $hexanos }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Filtros</span></b> em estoque: {{ $filtros }} unidades</h4>
        </div>
    </center>
</div>
@endsection
