@extends('layouts.site')

@section('content')
    <div class="row row-grid">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header font-weight-bold font-size-titulo text-center">
                    Título da Notícia
                </div>
                <div class="card-body">
                    <p>Corpo da Notícia</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.login')
                </div>
            </div>
        </div>
    </div>
@endsection
