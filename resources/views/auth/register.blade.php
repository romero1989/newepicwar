@extends('layouts.site')

@section('content')
    <div class="row row-grid justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-center">
                <div class="card-header">{{ __('Cadastro de Usuário') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="senha_numerica" class="col-md-4 col-form-label text-md-right">{{ __('Senha numérica') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="senha_numerica" type="password" class="form-control @error('senha_numerica') is-invalid @enderror" name="senha_numerica" value="{{ old('senha_numerica') }}" required autocomplete="senha numérica">--}}

{{--                                @error('senha_numerica')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <label for="pergunta_secreta" class="col-md-4 col-form-label text-md-right">{{ __('Pergunta Secreta') }}</label>

                            <div class="col-md-6">
                                <select name="pergunta_secreta" class="form-control @error('pergunta_secreta') is-invalid @enderror" name="pergunta_secreta" value="{{ old('pergunta_secreta') }}" required autocomplete="pergunta secreta" autofocus>
                                    <option selected>Selecione uma pergunta</option>
                                    <option value="1">Nome do pai</option>
                                    <option value="2">Nome da mãe</option>
                                    <option value="3">Primeira escola que estudou</option>
                                    <option value="4">Nome do seu cachorro</option>
                                </select>

                                @error('pergunta_secreta')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resposta_secreta" class="col-md-4 col-form-label text-md-right">{{ __('Resposta secreta') }}</label>

                            <div class="col-md-6">
                                <input id="resposta_secreta" type="text" class="form-control @error('resposta_secreta') is-invalid @enderror" name="resposta_secreta" value="{{ old('resposta_secreta') }}" required autocomplete="resposta secreta">

                                @error('resposta_secreta')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
@endsection
