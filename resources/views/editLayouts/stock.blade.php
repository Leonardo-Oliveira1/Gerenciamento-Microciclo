@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

@include('utils.confirmPopUp')

<style>
    body {
        background-color: #fafafa;
    }
</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Estoque especifico</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
        @include('flash-message')

            <!--Admins-->
            <table class="table">
                <thead>
                    <tr>
                    @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                        @endif
                        <th>Nome do item</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Data de adição</th>
                        <th>Adicionado por</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    <tr>
                    @if ( Auth::user()->account_type == "Administrador(a)")
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('stock_off', $item->id) }}"><i class="bx bx-edit-alt me-1"></i>Registrar baixa</a>
                                </div>
                            </div>
                        </td>
                    @endif
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $item->name }}</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">{{ $item->quantity }}</span></td>
                        <td style="font-size: 20px;"><span class="badge bg-label-warning me-1">{{ date('d/m/Y', strtotime($item->expiration_date)) }}</span></td>
                        <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                        <td>{{ $item->last_activity_by }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--Admins/-->
        </div>
    </div>
</div>
@endsection
