@extends('layouts.app')

@section('content')
<div class="jumbotron bg-dark">
	<h1 class="display-5 text-center">PESQUISE SUA EMPRESA AQUI <br>Encontre empresas, produtos, serviços e ofertas perto de você!</h1>
	
	<form id="form-busca" method="post" action={{ url("/cidades/empresas") }}>
	@csrf

		<div class="container">
			<div class="m-auto row form-busca">

				<div class="col-md-5 form-group">
					<input type="text" name="empresa" class="form-control text-secondary termo" placeholder="O que você procura?">
				</div>

				<div class="col-md-4 form-group">
					<select id="cidades" name="city" class="form-control text-secondary w-100">
						<option value="">Todas as cidades</option>
                                               
                        @foreach($cidade as $cidades)
                    
                            @include('partials.cidades', ['cidades' => $cidades])
                        @endforeach
												
					</select>
                </div>

				<div class="col-md-3 form-group">

					<input type="submit" class="btn btn-block btn-danger" value="Buscar">
				</div>
				{{ csrf_field() }}
			<input type="hidden" name="_method" value="POST">	
			</div>
		</div>
	</form>
	<br>
</div>
@endsection
