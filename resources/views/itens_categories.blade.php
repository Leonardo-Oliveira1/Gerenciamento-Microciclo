@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Categoria de itens</h1>
        @if ( Auth::user()->account_type == "Administrador(a)")
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Registrar nova categoria
        </button>
        @endif
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            @include('flash-message')
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Nome da categoria</th>
                        <th>Última modificação por</th>
                        <th>Data de alteração</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/admin/edit/category/{{ $category->id}}"><i class="bx bx-edit-alt me-1"></i>Alterar nome</a>
                                    <hr>
                                    <a class='dropdown-item' style="cursor: pointer;" onclick="popup('{{ $category->name }}', 'apagar', 'a categoria', 'deleteForm{{$category->name}}')">Deletar</a>
                                    <form method="POST" id="deleteForm{{$category->name}}" action="/admin/delete/category/{{ $category->id }}" enctype='multipart/form-data'>
                                        @csrf
                                        <input type="submit" class="dropdown-item" style="display: none;"></input>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $category->name }}</td>
                        <td>{{ $category->add_by }}</td>
                        <td>{{ date('d/m/Y', strtotime($category->updated_at)) }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
