@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Lista de usuários do sistema</h1>
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
                        <th>Usuário desde</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Fulano de Tal</td>
                        <td>loremipsum@gmail.com</td>
                        <td>12/10/2022</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
