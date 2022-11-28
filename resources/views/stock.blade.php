@extends('smallLayouts.core')

@section('head')
@endsection

@section('modal')
@include('smallLayouts.modals.stockRegister')
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Estoque</h1>
        @if ( Auth::user()->account_type == "Administrador(a)")
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Adicionar estoque
        </button>
        @endif
    </center>
    <br>
    <br>

    <style>
        #itens_filter {
            padding-bottom: 20px;
        }

        #itens_paginate,
        #itens_info {
            padding-top: 20px;
        }
    </style>
    <div class="row">

        <h3 class="fw-bold p-4" style="margin-top: -40px;">Unidades registradas</h3>

        <div class="table-responsive" style="background-color: #FCFCFC; margin-top: -20px; padding: 20px; border: solid 1px; border-radius: 10px;">
            @include('flash-message')
            <table id="itens" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                        @endif
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Volume Unitário</th>
                        <th>Próximo a vencer</th>
                        <th>Última modificação</th>
                    </tr>
                </thead>

                <tbody>
                    @empty($stocks)
                    @else
                    @foreach($stocks as $stock)
                    @if ( Auth::user()->account_type == "Administrador(a)")
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('editStock', $stock['name']) }}"><i class="bx bx-edit-alt me-1"></i>Detalhes e opções</a>

                                </div>
                            </div>
                        </td>
                        @endif
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $stock['name'] }}</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">{{ $stock['total_quantity'] }}</span></td>
                        @if ($stock['volume'] == 0.00)
                        <td style="font-size: 16px"><span>Unidade</span></td>
                        @else
                        <td style="font-size: 16px"><span>{{ $stock['volume'] }}{{ $stock['measure'] }}</span></td>
                        @endif
                        @if ($stock['next_expiration_date'] >= date("Y-m-d"))
                        <td style="font-size: 20px;"><span class="badge bg-label-dark me-1">{{ date('d/m/Y', strtotime($stock['next_expiration_date'])) }}</span></td>
                        @else
                        <td style="font-size: 20px;"><span class="badge bg-label-danger me-1">{{ date('d/m/Y', strtotime($stock['next_expiration_date'])) }}</span></td>
                        @endif
                        <td>{{ date('d/m/Y', strtotime($stock['updated_at'])) }}</td>
                    </tr>
                    @endforeach
                    @endempty

                </tbody>
            </table>
        </div>

        <h3 class="fw-bold p-4" style="margin-top: 30px;">Unidades vencidas</h3>

        <!--Expirated-->
        <div class="table-responsive" style="background-color: #FCFCFC; padding: 20px; margin-top: -20px; border: solid 1px; border-radius: 10px;">
            <table id="expirated" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                        @endif
                        <th>Nome do item</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Data de adição</th>
                    </tr>
                </thead>

                <tbody>
                    @empty($stocks)
                    @else
                    @foreach($expireds as $expirated)
                    @if ( Auth::user()->account_type == "Administrador(a)")
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('stock_off', $expirated->id) }}"><i class="bx bx-edit-alt me-1"></i>Registrar baixa</a>
                                </div>
                            </div>
                        </td>
                        @endif
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $expirated->name }}</td>
                        <td style="font-size: 18px"><span class="badge bg-label-danger me-1">{{ $expirated->quantity }}</span></td>
                        <td style="font-size: 20px;"><span class="badge bg-label-danger me-1">{{ date('d/m/Y', strtotime($expirated->expiration_date)) }}</span></td>
                        <td>{{ date('d/m/Y', strtotime($expirated->created_at)) }}</td>
                    </tr>
                    @endforeach
                    @endempty

                </tbody>
            </table>
        </div>
        <!--Expirated/-->
    </div>

    @section('endBody')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('scss/datatable.css') }}">
    <script src="{{ asset('js/datatable.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#itens').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#expirated').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        })
    </script>
    @endsection
    @endsection
