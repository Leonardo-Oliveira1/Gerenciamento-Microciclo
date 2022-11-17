@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Meio de Cultura (IRAP)</h1>
        <br>
        <br>

        <div class="row">
            @if($IRAP)
                <h4 class="p-4" style="margin-top: -30px;">É possível produzir <b><span style="color: #30907B">{{ $IRAP }} amostras</span></b> com os recursos disponíveis.</h4>
                @else
                <h4 class="p-4" style="margin-top: -30px;">Não há recursos suficientes para realizar este experimento.</h4>
            @endif
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Sacarose</span></b> em estoque: {{ $Sacarose }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Uréia</span></b> em estoque: {{ $Ureia }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Extrato de levedura</span></b> em estoque: {{ $Extrato_de_levedura }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KH2PO4</span></b> em estoque: {{ $KH2PO4 }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">K2HPO4</span></b> em estoque: {{ $K2HPO4 }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">MgSO4.7H2O</span></b> em estoque: {{ $MgSO47H2O }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">FeSO4.7H2O</span></b> em estoque: {{ $FeSO47H2O }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">CuSO4.5H2O</span></b> em estoque: {{ $CuSO45H2O }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">MnSO4.H2O</span></b> em estoque: {{ $MnSO4H2O }} litros</h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">ZnSO4.7H2O</span></b> em estoque: {{ $ZnSO47H2O }} litros</h4>
        </div>
    </center>
</div>
@endsection
