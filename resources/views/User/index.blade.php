@extends('layouts.admin')
@section('content')	
@include('alerts.AlertsRequest')
@include('alerts.SuccessRequest')
@include('alerts.ErrorsRequest')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Listado de perfiles </h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
    			</ul>
    			<div class="clearfix"></div>
      		</div>
    		<div class="x_content">
			<table id="datatable" class="table table-hover">
				<thead>
					<th>Rol</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Usuario</th>
					<th>Registro</th>
					<th>Operación</th>
				</thead>
				@foreach($users as $user)
				<tbody>
					<td>{{$user->role->name}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->user}}</td>
					<td>{{$user->register}}</td>
					<td>
						{!!link_to_route('Users.edit', $title = 'Editar', $parameters =$user->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
				@endforeach		
			</table>
			</div>
		</div>
	</div>
</div>
@stop