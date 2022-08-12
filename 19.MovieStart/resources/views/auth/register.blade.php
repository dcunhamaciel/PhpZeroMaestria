@extends('templates.base')

@section('conteudo')
    <div id="main-container" class="container-fluid">        
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="register-container">
                    <h2>Criar Conta</h2>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('site.register') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="register">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="{{ $user->email ?? old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="{{ $user->name ?? old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Sobrenome:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu sobrenome" value="{{ $user->lastname ?? old('lastname') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmação de senha:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
                        </div>
                        <input type="submit" class="btn card-btn" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection