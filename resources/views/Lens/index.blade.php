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
					<th>Nombre</th>
					<th>Referencia</th>
					<th>Color</th>
					<th>Precio Compra</th>
					<th>Precio Venta</th>
					<th>Cantidad</th>
					<th>Operación</th>
				</thead>
				@foreach($products as $product)
				<tbody>
					<td>{{$product->name}}</td>
					<td>{{$product->reference}}</td>
					<td>{{$product->color}}</td>
					<td>{{$product->purchasePrice}}</td>
					<td>{{$product->salePrice}}</td>
					<td>{{$product->quantity}}</td>
					<td>
						{!!link_to_route('Products.edit', $title = 'Editar', $parameters =$product->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
				@endforeach		
			</table>
			</div>
		</div>
	</div>
</div>
@stop