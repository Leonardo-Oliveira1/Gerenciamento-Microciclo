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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Registrar novo item
        </button>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            <table id="itens" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ações</th>
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
                        <th>Alterado por</th>
                    </tr>
                </thead>

                <tbody>
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Agar Bacteriológico</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">1</span></td>
                        <td style="font-size: 18px"><span class="badge bg-label-warning me-1">28/12/2023</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>500g</td>
                        <td>Biolog</td>
                        <td>Microcosmos</td>
                        <td>12/10/2022</td>
                        <td>14/10/2022</td>
                        <td>Jim Hopper</td>
                    </tr>

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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Cloreto de Cálcio</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">2</span></td>
                        <td style="font-size: 18px"><span class="badge bg-label-warning me-1">10/09/2023</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>500g</td>
                        <td>Synth</td>
                        <td>Microcosmos</td>
                        <td>13/10/2022</td>
                        <td>16/10/2022</td>
                        <td>Jim Hopper</td>
                    </tr>

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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Extratura de levedura</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">6</span></td>
                        <td style="font-size: 18px"><span class="badge bg-label-warning me-1">20/12/2099</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>500g</td>
                        <td>Biolog</td>
                        <td>Microcosmos</td>
                        <td>12/10/2022</td>
                        <td>14/10/2022</td>
                        <td>Jim Hopper</td>
                    </tr>

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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">2</span></td>
                        <td style="font-size: 18px"><span class="badge bg-label-warning me-1">01/03/2024</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>1kg</td>
                        <td>Biolog</td>
                        <td>Microcosmos</td>
                        <td>12/10/2022</td>
                        <td>14/10/2022</td>
                        <td>Jim Hopper</td>
                    </tr>

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
