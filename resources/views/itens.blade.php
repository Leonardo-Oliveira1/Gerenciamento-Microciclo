@extends('smallLayouts.core')

@section('head')
@endsection

@section('modal')
@include('smallLayouts.modals.itemRegister')
@endsection

@section('content')

<style>
    body{
        background-color: #FAFAFA;
    }
</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Itens do estoque</h1>
        @if ( Auth::user()->account_type == "Administrador(a)")
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Registrar novo item
        </button>
        @endif
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            <table id="itens" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                    @endif
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Próximo a vencer</th>
                        <th>Categoria</th>
                        <th>Recipiente</th>
                        <th>Volume</th>
                        <th>Marca</th>
                        <th>Utilizado em</th>
                        <th>Data de registro</th>
                        <th>Data de alteração</th>
                        <th>Última atividade</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    @if ( Auth::user()->account_type == "Administrador(a)")
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar quant. no estoque</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                    @endif
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $item->name }}</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">{{ $item->quantity }}</span></td>
                        <td style="font-size: 18px"><span class="badge bg-label-warning me-1">{{ date('d/m/Y', strtotime($item->expiration_date)) }}</span></td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->container_type }}</td>
                        <td>{{ $item->volume }}{{ $item->volume_measure }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->used_in }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td>
                        <td>{{ $item->last_activity_by }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    @section('endBody')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

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
