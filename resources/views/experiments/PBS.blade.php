@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Lavagem com PBS</h1>
        <br>
        <br>

        <div class="row">
            @if($PBS)
                <h3 class="p-4" style="margin-top: -30px;">É possível produzir <b><span style="color: #30907B">{{ $PBS }} litros</span></b> com os recursos disponíveis.</h3>
                @else
                <h4 class="p-4" style="margin-top: -30px;">Não há recursos suficientes para realizar este experimento.</h4>
            @endif
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">NaCl</span></b> em estoque: {{ $NaCl }}kg</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KCl</span></b> em estoque: {{ $KCl }}g</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Na2HPO4</span></b> em estoque: {{ $Na2HPO4 }}kg</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KH2PO4</span></b> em estoque: {{ $KH2PO4 }}kg</h4>
        </div>
    </center>
</div>
@endsection
