<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Laboratorio <span class="required">*</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('lab_id', $labs, null, ['id'=>'lab_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
  </div> 
</div>
<div class="form-group">
  {!!Form::label('Tipo de lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'typeLens '])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('name',null, ['id'=>'name', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Tipo de lente'])!!}
  </div>
</div>
<div class="col-md-1 col-sm-1 col-xs-1">
</div>
<div id="mLens">
  <div id="matlen0">
    <div class="form-group">
      {!!Form::label('Material del lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'materialLens '])!!}
      <div class="col-md-5 col-sm-5 col-xs-5">
        {!!Form::text('namematerialLens[]', null, ['id'=>'namematerialLens','class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Material del lente'])!!}
      </div>
      <a class="btn btn-success" id="ml"><i class="fa fa-plus"></i> Agregar</a>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#ml').click(function(e) 
  {
    var count = $("div[id*='matlen']").length;
    $('#mLens').append("<div id='matlen"+count+"'><div class='col-md-1 col-sm-1 col-xs-1'></div><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='materialLens'>Material Del Lente *: </label><div class='col-md-5 col-sm-5 col-xs-5'><input id='namematerialLens', class= 'form-control col-md-7 col-xs-12', placeholder='Material Del Lente' type='text' name='namematerialLens[]'></div><a class='btn btn-danger' id='Subml'><i class='fa fa-minus'></i> Eliminar</a></div></div>");
  });
  $(document).on('click', '#Subml', function(){
    $(this).parents('div').eq(1).remove();
  });   
</script>