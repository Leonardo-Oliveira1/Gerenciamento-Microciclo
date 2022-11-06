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
        <h1>Lista de usuários do sistema</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">

            <!--Admins-->
            <h2>Administradores</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Usuário desde</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($admin->created_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--Admins/-->


            <!--Collaborators-->
            <h2 style="margin-top: 100px;">Colaboradores</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Usuário desde</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($collaborators as $collaborator)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $collaborator->name }}</td>
                        <td>{{ $collaborator->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($collaborator->created_at)) }}</td>
                        <td>
                            <form method="POST" id="adminForm{{ $collaborator->id }}" action="/admin/makeAdmin/{{ $collaborator->id }}" enctype='multipart/form-data'>
                                @csrf
                                <div class="modal-footer">
                                    <a class="btn btn-primary" style="cursor: pointer; color: white;" onclick="popup('', 'tornar este usuário administrador', '', 'adminForm{{ $collaborator->id }}')">Tornar administrador(a)</a>
                                </div>
                            </form>
                        </td>
                    </tr>


                    @endforeach
                </tbody>
            </table>
            <!--Collaborators/-->
        </div>
    </div>
</div>
@endsection
