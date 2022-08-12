@extends('templates.base')

@section('conteudo')
    <div id="main-container" class="container-fluid">        
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="login-container">
                    <h2>Entrar</h2>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('site.login') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="login">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                        </div>
                        <input type="submit" class="btn card-btn" value="Entrar">
                    </form>
                    <form action="{{ route('site.register') }}" method="GET">                    
                        @csrf
                        <div class="form-group">
                            <p>Anda não tem conta?</p>
                            <input type="submit" class="btn card-btn" value="Registrar" action="{{ route('site.register') }}">
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection