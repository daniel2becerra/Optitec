@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		@include('alerts.SuccessRequest')
		@include('alerts.ErrorsRequest')
		<div class="">
		  <div class="page-title">
		    <div class="title_left">
		      <h3>Laboratorios</h3>
		    </div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		      <div class="x_panel">
		        <div class="x_title">
		          <h2>Editar laboratorio <small>Plantilla de edición de laboratorio</small></h2>
		          <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        <br />
				{!!Form::model($lab, ['route'=>['Labs.update',$lab->id],  'method'=>'PUT', 'autocomplete'=>'off', 'class'=>'form-horizontal form-label-left', 'id'=>'demo-form2'])!!}
					@include('Forms.LabsMod')
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
						</div>
					</div>
				{!!Form::close()!!}
				<br>
				{!!Form::open(['route'=>['Labs.destroy', $lab->id], 'method'=>'DELETE'])!!}
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
	