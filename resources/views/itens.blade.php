@extends('smallLayouts.core')

@section('modal')
    @include('smallLayouts.modals.itemRegister')
@endsection

@section('content')

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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Categoria</th>
                        <th>Recipiente</th>
                        <th>Volume</th>
                        <th>Marca</th>
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
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">2</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>500g</td>
                        <td>Biolog</td>
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
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>1kg</td>
                        <td>Synth</td>
                        <td>Mike Wheeler</td>
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Cloreto de Potássio</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">2</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>1kg</td>
                        <td>Synth</td>
                        <td>Steve Harrington</td>
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Agar Bacteriológico</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">2</span></td>
                        <td>Reagentes</td>
                        <td>Pote</td>
                        <td>500g</td>
                        <td>Biolog</td>
                        <td>Jim Hopper</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
