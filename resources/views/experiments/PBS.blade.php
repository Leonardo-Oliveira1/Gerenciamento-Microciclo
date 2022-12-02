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
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">NaCl</span></b> em estoque: <b>{{ $NaCl }}kg</b>. <span style="font-size: 17px;">({{ round(($NaCl / 0.008), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KCl</span></b> em estoque: <b>{{ $KCl }}g</b>. <span style="font-size: 17px;">({{ round(($KCl / 0.0002), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Na2HPO4</span></b> em estoque: <b>{{ $Na2HPO4 }}kg</b>. <span style="font-size: 17px;">({{ round(($Na2HPO4 / 0.0014), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">KH2PO4</span></b> em estoque: <b>{{ $KH2PO4 }}kg</b>. <span style="font-size: 17px;">({{ round(($KH2PO4 / 0.0002), 0, PHP_ROUND_HALF_DOWN) }} experimentos)</span></h4>
        </div>
    </center>
</div>
@endsection
