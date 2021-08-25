@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($empresa as $empresax)
            
                        @include('partials.empresa', ['empresax' => $empresax])
        @endforeach
        </div>
    </div>
</div>
@endsection
