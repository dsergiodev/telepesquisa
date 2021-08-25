@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            
                @foreach($categorie as $categorias)
                    
                                @include('partials.categorias', ['categorias' => $categorias])
                @endforeach


        </div>
        <div class="col-md-8">
                <div class="{{ $categorias->id }}">
                @foreach($empresa as $empresax)
                    @if(!isset($_GET['category_id']))
                        @include('partials.empresa', ['empresax' => $empresax])
                    @elseif($empresax->category_id == $_GET['category_id'])
                                @include('partials.empresa', ['empresax' => $empresax])
                    @endif
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
