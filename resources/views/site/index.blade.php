@extends('layouts.site')

@section('content')
    <div class="row row-grid">
        <div class="col-md-8">
            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.banner')
                </div>

            </div>
            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.noticias')
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.login')
                </div>
            </div>

            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.facebook')
                </div>
            </div>

            <div class="row row-grid">
                <div class="col-md-12">
                    @include('layouts.componentes.site.discord')
                </div>
            </div>
        </div>
    </div>

    <div class="row row-grid">
        @include('layouts.componentes.site.ranking')
    </div>

    <div class="row row-grid">
        <div class="col-md-12">
            @include('layouts.componentes.site.screenshot')
        </div>
    </div>
@endsection
