<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Tipo de lente <span class="required">*</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('_id', [], null, ['id'=>'_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Material del lente <span class="required">*</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('_id', [], null, ['id'=>'_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Marca del lente <span class="required">*</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('_id', [], null, ['id'=>'_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>

<div class="form-group">
  {!!Form::label('Nombres *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'firstname'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('firstname',null, ['id'=>'firstname', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Nombres'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Apellidos *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'lastname'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('lastname',null, ['id'=>'lastname', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Apellidos'])!!}
  </div>
</div>
<div class="ln_solid"></div>
