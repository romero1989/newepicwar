<div class="card bg-dark">
    <div class="card-header text-center font-weight-bold">
        Login
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg class="bi bi-at" width="1em" height="1em" viewBox="0 0 16 16"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <input id="login" type="text"
                               class="form-control{{ $errors->has('name') || $errors->has('email') ? ' is-invalid' : '' }}"
                               name="login" value="{{ old('name') ?: old('email') }}" required autofocus>

                        @if ($errors->has('name') || $errors->has('email'))
                            <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') ?: $errors->first('email') }}</strong>
                                                    </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="11" height="9" x="2.5" y="7" rx="2"/>
                                    <path fill-rule="evenodd"
                                          d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary col-sm-6 offset-sm-3">
                        {{ __('Acessar') }}
                    </button>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                </div>
            </div>

        </form>
    </div>
</div>