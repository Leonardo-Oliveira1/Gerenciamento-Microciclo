@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.reagentsEstimated')
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Dados para a previsão de uso de reagentes</h1>
        @if ( Auth::user()->account_type == "Administrador(a)")
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Registrar dados
        </button>
        @endif
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
                        <th>g de reagente p/ 1 litro</th>
                        <th>Custo por kg (previsão)</th>
                        <th>Suficiente em estoque?</th>
                        <th>Data de alteração</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar dados</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Sacarose</td>
                        <td>51g</td>
                        <td>56kg</td>
                        <td>Sim</td>
                        <td>28/09/2022</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar dados</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>MgSo4.7H2O</td>
                        <td>1g</td>
                        <td>1kg</td>
                        <td>Sim</td>
                        <td>28/09/2022</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar dados</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>NaCl</td>
                        <td>8g</td>
                        <td>4kg</td>
                        <td>Não</td>
                        <td>28/09/2022</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar dados</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Sacarose</td>
                        <td>51g</td>
                        <td>56kg</td>
                        <td>Sim</td>
                        <td>28/09/2022</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Alterar dados</a>
                                    <hr>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Sacarose</td>
                        <td>51g</td>
                        <td>56kg</td>
                        <td>Sim</td>
                        <td>28/09/2022</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
