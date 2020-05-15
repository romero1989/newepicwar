@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">Guild Mark</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="guildmark_file">Submeta a figura da Guild</label>
                                <input type="file" class="form-control-file" id="guildmark_file">
                                <small id="guildmark_file_help" class="form-text text-muted">
                                    A figura deve ter dimensão 16x16 e tamanho até 50Kb.
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
