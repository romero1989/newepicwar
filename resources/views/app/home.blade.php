@extends('layouts.site')

@section('content')
    <div class="row row-grid justify-content-center">
        <div class="col-md-10">
            <div class="card bg-dark">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está logado!
                </div>
            </div>
        </div>
    </div>
@endsection
