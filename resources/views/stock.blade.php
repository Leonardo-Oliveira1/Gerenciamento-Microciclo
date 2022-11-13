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

    <div class="row">
        <div class="table-responsive" style="background-color: #FCFCFC; padding: 20px; border: solid 1px; border-radius: 10px;">
            @include('flash-message')

            <style>
                #itens_filter {
                    padding-bottom: 20px;
                }

                #itens_paginate, #itens_info{
                    padding-top: 20px;
                }
            </style>

            <table id="itens" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                        @endif
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Próximo a vencer</th>
                        <th>Última modificação</th>
                        <th>Última atividade por</th>
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
                        <td style="font-size: 20px"><span class="badge bg-label-warning me-1">{{ date('d/m/Y', strtotime($stock['next_expiration_date'])) }}</span></td>
                        <td>{{ date('d/m/Y', strtotime($stock['updated_at'])) }}</td>
                        <td>{{ $stock['last_activity_by'] }}</td>
                    </tr>
                    @endforeach
                    @endempty

                </tbody>
            </table>
        </div>

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
    @endsection
    @endsection
