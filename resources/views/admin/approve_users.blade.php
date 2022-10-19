@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Aprovar novos usuários do sistema</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome do usuário</th>
                        <th>Email do usuário</th>
                        <th>Data de solicitação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Leonardo Oliveira</td>
                        <td>oleonardo78@gmail.com</td>
                        <td>19/10/2022</td>
                        <td><button type="button" class="btn btn-primary">
                                Aprovar
                            </button>
                            <button type="button" class="btn btn-danger">
                                Rejeitar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
