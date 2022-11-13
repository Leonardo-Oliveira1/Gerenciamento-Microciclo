@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Histórico do sistema</h1>
    </center>
    <br>
    <br>

    <div class="row">

        <h3 class="fw-bold p-4">Últimas 20 ações</h3>

        <?php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        ?>
        @foreach ($histories as $history)
        <p style="padding-left: 24px; font-size: 18px;"><strong style="color: #30907B;">{{ strftime('%A, %d de %B', strtotime($history->created_at)) }}:</strong> {{ $history->user }} <strong style="color: #233446;">{{ $history->text }} {{ $history->units }} unidade(s)</strong> de <strong style="color: #233446;">'{{ $history->item }}'</strong>.</p>
        @endforeach
    </div>
</div>
@endsection
