@extends('auth.formsLayout')
@section('action', 'Login')
@section('content')

<div class="container-xxl" id="main_container">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <img src="{{ asset('assets/img/microcicloLogoFull.png') }}" alt="Logo" width="200" style="margin-top: 10px;">
                    </div>
                    <!-- /Logo -->
                    <p class="mb-4">Faça o login em sua conta para poder utilizar o sistema.</p>

                    <form onsubmit="loading('main_container')" id="formAuthentication" class="mb-3" action="{{ route('auth') }}" method="POST">
                        <div id="loading" style="display: none; z-index: 10; position: absolute; left: 173px;">
                            <img src="{{ asset('assets/img/loading.gif') }}" width="50" style="opacity: 1.0; filter: contrast(900%);" alt="">
                        </div>
                        @csrf

                        @include('flash-message')
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Senha</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 40px;">
                            <input type="submit" class="btn btn-primary d-grid w-100" value="Entrar"></input>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>Ainda não possui uma conta?</span>
                        <a href="{{ route('register') }}">
                            <span>Crie uma agora!</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

@endsection
