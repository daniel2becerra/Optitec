@extends('layouts.admin')
@section('content')	
@include('alerts.AlertsRequest')
@include('alerts.SuccessRequest')
@include('alerts.ErrorsRequest')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Listado de laboratorios </h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
    			</ul>
    			<div class="clearfix"></div>
      		</div>
    		<div class="x_content">
			<table id="datatable" class="table table-hover">
				<thead>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Nombre de contacto</th>
					<th>Teléfono de contacto</th>
					<th>Operación</th>
				</thead>
				@foreach($labs as $lab)				
				<tbody>
					<td>{{$lab->name}}</td>
					<td>{{$lab->address}}</td>
					<td>{{$lab->phone}}</td>
					<td>{{$lab->contactName}}</td>
					<td>{{$lab->contactPhone}}</td>
					<td>
						{!!link_to_route('Labs.edit', $title = 'Editar', $parameters =$lab->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
				@endforeach		
			</table>
			</div>
		</div>
	</div>
</div>
@stop