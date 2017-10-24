@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		@include('alerts.SuccessRequest')
		@include('alerts.ErrorsRequest')
		<div class="">
		  <div class="page-title">
		    <div class="title_left">
		      <h3>Tipos de Lentes</h3>
		    </div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		      <div class="x_panel">
		        <div class="x_title">
		          <h2>Editar tipos de lentes <small>Plantilla de edición de tipos de lentes</small></h2>
		          <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        <br />
				{!!Form::model($typelens, ['route'=>['Typelens.update',$typelens->id],  'method'=>'PUT', 'autocomplete'=>'off', 'class'=>'form-horizontal form-label-left', 'id'=>'demo-form2'])!!}
					@include('Forms.TypeLensMod')
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
						</div>
					</div>
				{!!Form::close()!!}
				<br>
				{!!Form::open(['route'=>['Typelens.destroy', $typelens->id], 'method'=>'DELETE'])!!}
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						{!!Form::submit('Eliminar',['id'=>'eliminar', 'class'=>'btn btn-danger'])!!}
						</div>
					</div>
				{!!Form::close()!!}
				</div>
		      </div>
		    </div>
		  </div>  
		</div>
	@stop
	