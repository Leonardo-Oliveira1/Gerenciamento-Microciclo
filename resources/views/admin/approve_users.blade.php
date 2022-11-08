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
                        <td style="display: flex; flex-direction: row; gap: 15px;">
                            <form method="POST" id="approve{{ $user->id }}" action="{{ route('acceptUser', $user->id) }}" enctype='multipart/form-data'>
                                @csrf
                                <a class="btn btn-primary" style="cursor: pointer; color: white;" onclick="popup('', 'aceitar o pedido deste usuário', '', 'approve{{ $user->id }}')">Aprovar</a>
                            </form>

                            <form method="POST" id="decline{{ $user->id }}" action="{{ route('declineUser', $user->id) }}" enctype='multipart/form-data'>
                                @csrf
                                <a class="btn btn-danger" style="cursor: pointer; color: white;" onclick="popup('', 'recusar o pedido deste usuário', '', 'decline{{ $user->id }}')">Recusar</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
