@extends('layouts.app')

@section('content')
	<div class="container" id="articulos">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-center">Articulos</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
						<form action="{{ route('clientes') }}" method="GET">

							<div class="input-group">
								<input type="text" class="form-control" v-model="searchString" id="search" name="search" placeholder="Buscar..">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newModal">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
		@include('articulos.partials.table')
		@include('articulos.partials.modalnew')
	</div>
@endsection
@section('footer')
	<script src='{{ asset('js/articulos.js') }}'></script>
@endsection
