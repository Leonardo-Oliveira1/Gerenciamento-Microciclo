@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

<style>
    body{
        background-color: #fafafa;
    }
</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Aprovar novos usuários do sistema</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome do usuário</th>
                        <th>Email do usuário</th>
                        <th>Data de solicitação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td><button type="button" class="btn btn-primary">
                                Aprovar
                            </button>
                            <button type="button" class="btn btn-danger">
                                Rejeitar
                            </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
