@extends('layouts.admin')
@section('content')	
@include('alerts.AlertsRequest')
@include('alerts.SuccessRequest')
@include('alerts.ErrorsRequest')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Listado de tipos de lentes </h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
    			</ul>
    			<div class="clearfix"></div>
      		</div>
    		<div class="x_content">
			<table id="datatable" class="table table-hover">
				<thead>
					<th>Laboratorio</th>
					<th>Tipo de lente</th>
					<th>Materiales</th>
					<th>Operación</th>					
				</thead>
				@foreach($typelens as $typelen)
					<?php
						$nameMaterial = ""
					?>
					@foreach($typelen->materials as $typelenmaterial)
						<?php
							$nameMaterial = $nameMaterial.$typelenmaterial->name.", ";
						?>
					@endforeach
				<tbody>
					<td>{{$typelen->lab->name}}</td>
					<td>{{$typelen->name}}</td>
					<td>{{$nameMaterial}}</td>
					<td>
						{!!link_to_route('Typelens.edit', $title = 'Editar', $parameters =$typelen->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
				@endforeach		
			</table>
			</div>
		</div>
	</div>
</div>
@stop