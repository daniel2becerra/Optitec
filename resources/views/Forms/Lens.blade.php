<div class="form-group">
  {!!Form::label('Nombre *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'name'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('name',null, ['id'=>'name', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Nombre'])!!}
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Laboratorio <span class="required">*:</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('lab_id', $labs, null, ['id'=>'lab_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Tipo de lente <span class="required">*:</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('typelen_id', [], null, ['id'=>'typelen_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Material del lente <span class="required">*:</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('materiallen_id', [], null, ['id'=>'materiallen_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Filtro del lente <span class="required">*:</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('fliterlen_id', [], null, ['id'=>'fliterlen_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="ln_solid"></div>
