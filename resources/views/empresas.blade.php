@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @foreach($empresa as $empresax)
            
                        @include('partials.empresa', ['empresax' => $empresax])
        @endforeach
        </div>
        {{ $empresa->links() }}
    </div>
    
</div>
<style>
	.w-5, .flex-1{
	display: none;
	}
</style>
@endsection
