@extends('auth.formsLayout')
@section('action', 'Cadastro')
@section('content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <img src="{{ asset('assets/img/microcicloLogoFull.png') }}" alt="Logo" width="200" style="margin-top: 10px;">
                    </div>
                    <!-- /Logo -->
                    <p class="mb-4">Faça o cadastro para poder utilizar o sistema.</p>

                    <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome e sobrenome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Insira seu nome" autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Senha</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary d-grid w-100" style="margin-top: 40px;" value="Criar nova conta"></input>
                    </form>

                    <p class="text-center">
                        <span>Já possui uma conta?</span>
                        <a href="login">
                            <span>Conecte-se</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

@endsection
