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
        <h1>Estoque especifico</h1>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
        @include('flash-message')

            <!--Table-->
            <table class="table">
                <thead>
                    <tr>
                    @if ( Auth::user()->account_type == "Administrador(a)")
                        <th>Ações</th>
                        @endif
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Validade</th>
                        <th>Lote</th>
                        <th>Fabricante</th>
                        <th>Fornecedor</th>
                        <th>Preço</th>
                        <th>Data de adição</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    <tr>
                    @if ( Auth::user()->account_type == "Administrador(a)")
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('stock_off', $item->id) }}"><i class="bx bx-edit-alt me-1"></i>Registrar baixa</a>
                                </div>
                            </div>
                        </td>
                    @endif
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $item->name }}</td>
                        <td style="font-size: 18px"><span class="badge bg-label-dark me-1">{{ $item->quantity }}</span></td>
                        @if ($item->expiration_date >= date("Y-m-d"))
                        <td style="font-size: 20px;"><span class="badge bg-label-dark me-1">{{ date('d/m/Y', strtotime($item->expiration_date)) }}</span></td>
                            @else
                            <td style="font-size: 20px;"><span class="badge bg-label-danger me-1">{{ date('d/m/Y', strtotime($item->expiration_date)) }}</span></td>
                        @endif

                        @if ($item->batch != null)
                        <td style="font-size: 16px">{{$item->batch}}</td>
                            @else
                        <td style="font-size: 16px">N/D</td>
                        @endif

                        @if ($item->manufacturer != null)
                        <td style="font-size: 16px">{{$item->manufacturer}}</td>
                            @else
                        <td style="font-size: 16px">N/D</td>
                        @endif

                        @if ($item->provider != null)
                        <td style="font-size: 16px">{{$item->provider}}</td>
                            @else
                        <td style="font-size: 16px">N/D</td>
                        @endif

                        @if ($item->price != null)
                        <td style="font-size: 16px">R$ {{$item->price}}</td>
                            @else
                        <td style="font-size: 16px">N/D</td>
                        @endif

                        <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--Table/-->
        </div>
    </div>
</div>
@endsection
