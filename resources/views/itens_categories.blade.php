@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemCategoryRegister')
@endsection

@section('content')

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
                        <th>Adicionado por</th>
                        <th>Data de registro</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $category->name }}</td>
                        <td>{{ $category->add_by }}</td>
                        <td>{{ date('d/m/Y', strtotime($category->created_at)) }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
