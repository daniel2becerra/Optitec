@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		@include('alerts.SuccessRequest')
		@include('alerts.ErrorsRequest')
		<div class="">
		  <div class="page-title">
		    <div class="title_left">
		      <h3>Usuarios</h3>
		    </div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		      <div class="x_panel">
		        <div class="x_title">
		          <h2>Crear usuario <small>Plantilla de creación de usuarios</small></h2>
		          <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<br />
		        	{!!Form::open(['route'=>'Users.store', 'method'=>'POST', 'autocomplete'=>'off', 'class'=>'form-horizontal form-label-left', 'id'=>'demo-form2'])!!}
						@include('Forms.Users')
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
		<script>
	      $(document).ready(function() {
	        $('#birthday').daterangepicker({
	          singleDatePicker: true,
	          calender_style: "picker_4"
	        }, function(start, end, label) {
	          console.log(start.toISOString(), end.toISOString(), label);
	        });
	      });
	    </script>
	@stop	