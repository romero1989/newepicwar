@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">{{ __('Confirmação de Redefinição de Senha Numérica') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Por favor, clique no botão para finalizar o processo.') }}

                        <form method="POST" action="{{ route('user.finalizaLinkResetSenhaNumerica', ['token'=>$token,'email'=> $email]) }}">
                            @csrf

                            <div class="form-group row">
                                <input hidden id="token" type="text" class="form-control @error('token') is-invalid @enderror" name="token" value="{{$token}}">
                                <input hidden id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$email}}">
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Finalizar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
