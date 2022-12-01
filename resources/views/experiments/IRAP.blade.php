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
                <h3 class="p-4" style="margin-top: -30px;">É possível produzir <b><span style="color: #30907B">{{ $IRAP }} litros</span></b> com os recursos disponíveis.</h3>
                @else
                <h4 class="p-4" style="margin-top: -30px;">Não há recursos suficientes para realizar este experimento.</h4>
            @endif
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Sacarose</span></b> em estoque: <b>{{ $Sacarose }}kg</b>. <span style="font-size: 17px;">({{ round(($Sacarose / 0.05), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Uréia</span></b> em estoque: <b>{{ $Ureia }}kg</b>. <span style="font-size: 17px;">({{ round(($Ureia / 0.002), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Extrato de levedura</span></b> em estoque: <b>{{ $Extrato_de_levedura }}kg</b>. <span style="font-size: 17px;">({{ round(($Extrato_de_levedura / 0.005), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KH2PO4</span></b> em estoque: <b>{{ $KH2PO4 }}kg</b>. <span style="font-size: 17px;">({{ round(($KH2PO4 / 0.001), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">K2HPO4</span></b> em estoque: <b>{{ $K2HPO4 }}kg</b>. <span style="font-size: 17px;">({{ round(($K2HPO4 / 0.008), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">MgSO4.7H2O</span></b> em estoque: <b>{{ $MgSO47H2O }}kg</b>. <span style="font-size: 17px;">({{ round(($MgSO47H2O / 0.001), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">FeSO4.7H2O</span></b> em estoque: <b>{{ $FeSO47H2O }}kg</b>. <span style="font-size: 17px;">({{ round(($FeSO47H2O / 0.0001), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">CuSO4.5H2O</span></b> em estoque: <b>{{ $CuSO45H2O }}kg</b>. <span style="font-size: 17px;">({{ round(($CuSO45H2O / 0.0000088), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">MnSO4.H2O</span></b> em estoque: <b>{{ $MnSO4H2O }}kg</b>. <span style="font-size: 17px;">({{ round(($MnSO4H2O / 0.0000076), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            @if(0.1 > $ZnSO47H2O)
                <h4 style="padding-left: 24px;"><b><span style="color: #30907B">ZnSO4.7H2O</span></b> em estoque: <b>{{ $ZnSO47H2O * 1000 }}g</b>. <span style="font-size: 17px;">({{ round(($ZnSO47H2O / 0.00001), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            @else
                <h4 style="padding-left: 24px;"><b><span style="color: #30907B">ZnSO4.7H2O</span></b> em estoque: <b>{{ $ZnSO47H2O }}kg</b>. <span style="font-size: 17px;">({{ round(($ZnSO47H2O / 0.00001), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            @endif
        </div>
    </center>
</div>
@endsection
