@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 navbar-expand-lg">
        <a class="dropdown-item" href="/categorias">Todas</a>

                @foreach($categorie as $categorias)
                    
                                @include('partials.categorias', ['categorias' => $categorias])
                @endforeach


        </div>
        <div class="col-md-9">
                <div class="{{ $categorias->id }}">
                @foreach($empresa as $empresax)
                    @include('partials.empresa', ['empresax' => $empresax])
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
