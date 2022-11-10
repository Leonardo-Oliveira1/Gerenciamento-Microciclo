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

    <h4 class="fw-bold p-4">Últimas ações</h4>

    @foreach ($histories as $history)
    <p style="padding-left: 24px; font-size: 18px;"><strong>{{ date('d/m/Y \à\s H:i a', strtotime($history->created_at)) }}:</strong> {{ $history->user }} {{ $history->text }}.</p>
    @endforeach
    </div>
</div>
@endsection
