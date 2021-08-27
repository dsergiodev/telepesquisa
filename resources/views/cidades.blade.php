@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        <a class="dropdown-item" href="/cidades">Todas</a>
                @foreach($cidade as $cidades)
                    
                                @include('partials.cidades', ['cidades' => $cidades])
                @endforeach


        </div>
        <div class="col-md-9">
                <div class="{{ $cidades->id }}">
                
                @foreach($empresa as $empresax)

                                @include('partials.empresa', ['empresax' => $empresax])
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
