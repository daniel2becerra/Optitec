@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		@include('alerts.SuccessRequest')
		@include('alerts.ErrorsRequest')
		<div class="">
		  <div class="page-title">
		    <div class="title_left">
		      <h3>Tipos de lentes</h3>
		    </div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		      <div class="x_panel">
		        <div class="x_title">
		          <h2>Crear tipo de lente <small>Plantilla de creación de tipos de lentes</small></h2>
		          <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<br />
		        	{!!Form::open(['route'=>'Typelens.store', 'method'=>'POST', 'autocomplete'=>'off', 'class'=>'form-horizontal form-label-left', 'id'=>'demo-form2'])!!}
						@include('Forms.TypeLens')
						<div class="form-group">
						  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
						    {!!Form::submit('Crear',['id'=>'crear', 'class'=>'btn btn-primary'])!!}
						  </div>
						</div>
					{!!Form::close()!!}
				</div>
		      </div>
		    </div>
		  </div>  
		</div>
	@stop	