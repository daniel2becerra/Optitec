<div class="form-group">
  {!!Form::label('Nombre *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'name'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('name',null, ['id'=>'name', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Nombre'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Dirección *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'address '])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('address',null, ['id'=>'address', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Dirección'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Teléfono *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'phone'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('phone',null, ['phone', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Teléfono'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Nombre del contacto *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12','for'=>'contactName'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('contactName', null, ['id'=>'contactName', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Nombre del contacto'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Teléfono del contacto *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'contactPhone'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('contactPhone',null, ['id'=>'contactPhone', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Teléfono del contacto'])!!}
  </div>
</div>
<div class="ln_solid"></div>
<div id="tmmLens">
  <div id="typemtmarklen0">
    <div class="form-group">
      {!!Form::label('Tipo del lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
      <div class="col-md-6 col-sm-6 col-xs-12">
        {!!Form::text('nametypelens0',null, ['id'=>'nametypelens0', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Tipo del lente'])!!}
      </div>
      <a class="btn btn-success" id="tmml"><i class="fa fa-plus"></i> </a>
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1">
    </div>
    <div id="mmLens">
      <div id="mtmarklen00">
        <div class="form-group">
          {!!Form::label('Material del lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
          <div class="col-md-5 col-sm-5 col-xs-5">
            {!!Form::text('namemateriallens00',null, ['id'=>'namemateriallens00', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Material del lente'])!!}
          </div>
          <a class="btn btn-success" id="mml"><i class="fa fa-plus"></i> </a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2"></div>
        <div id="mLens">
          <div id="marklen000">
            <div class="form-group">
              {!!Form::label('Marca del lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
              <div class="col-md-4 col-sm-4 col-xs-4">
                {!!Form::text('namemarkLens000', null, ['id'=>'namemarkLens000','class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Marca del lente'])!!}
              </div>
              <a class="btn btn-success" id="ml"><i class="fa fa-plus"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ln_solid"></div>
<div id="fLens">
  <div id="fillen0">
    <div class="form-group">
      {!!Form::label('Filtro del lente *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'nameFilter'])!!}
      <div class="col-md-6 col-sm-6 col-xs-12">
        {!!Form::text('nameFilter',null, ['id'=>'nameFilter', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Filtro del lente'])!!}
      </div>
      <a class="btn btn-success" id="fl"><i class="fa fa-plus"></i> </a>
    </div>
  </div>
</div>

<script type="text/javascript">

  $(document).on('click', '#tmml', function(){
    var counttmm = $("div[id*='typemtmarklen']").length;
    var countmm = $("div[id*='mtmarklen']").length;
    var countm = $("div[id*='marklen']").length;
    $('#tmmLens').append("<div class='ln_solid'></div><div id='typemtmarklen"+counttmm+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Tipo del lente *:</label><div class='col-md-6 col-sm-6 col-xs-12'><input id='nametypelens"+counttmm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Tipo del lente' type='text' name='nametypelens"+counttmm+"'></div><a class='btn btn-danger' id='Subtmml'><i class='fa fa-minus'></i> </a></div><div class='col-md-1 col-sm-1 col-xs-1'></div><div id='mmLens'><div id='mtmarklen"+counttmm+countmm+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Material del lente *:</label><div class='col-md-5 col-sm-5 col-xs-5'><input id='namemateriallens"+counttmm+countmm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Material del lente' type='text' name='namemateriallens"+counttmm+countmm+"'></div><a class='btn btn-success' id='mml'><i class='fa fa-plus'></i> </a></div><div class='col-md-2 col-sm-2 col-xs-2'></div><div id='mLens'><div id='marklen"+counttmm+countmm+countm+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca Del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens"+counttmm+countmm+countm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Marca Del Lente' type='text' name='namemarkLens"+counttmm+countmm+countm+"'></div><a class='btn btn-success' id='ml'><i class='fa fa-plus'></i></a></div></div></div></div></div></div>");
  }); 



  $(document).on('click', '#mml', function(){
      var countmm = $("div[id*='mtmarklen']").length;
      var countm = $("div[id*='marklen']").length;

      var nameDivType = $(this).parent().parent().parent().parent().attr('id');
      var numberDivType = nameDivType.substring(13);
      $(this).parent().parent().parent().append("<div class='col-md-1 col-sm-1 col-xs-1'></div><div id='mtmarklen"+numberDivType+countmm+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='typeLens'>Material del lente *:</label><div class='col-md-5 col-sm-5 col-xs-5'><input id='namemateriallens"+numberDivType+countmm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Material del lente' type='text' name='namemateriallens"+numberDivType+countmm+"'></div><a class='btn btn-danger' id='Submml'><i class='fa fa-minus'></i></a></div><div class='col-md-2 col-sm-2 col-xs-2'></div><div id='mLens'><div id='marklen"+numberDivType+countmm+countm+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca Del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens"+numberDivType+countmm+countm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Marca Del Lente' type='text' name='namemarkLens"+numberDivType+countmm+countm+"'></div><a class='btn btn-success' id='ml'><i class='fa fa-plus'></i></a></div></div></div></div>");
  }); 

  $(document).on('click', '#ml', function(){
    var countm = $("div[id*='marklen']").length;

    var nameDivType = $(this).parent().parent().parent().parent().parent().parent().attr('id');
    var numberDivType = nameDivType.substring(13);
    var nameDivMaterial = $(this).parent().parent().parent().parent().attr('id');
    var numberDivMaterial = nameDivMaterial.substring(10);

    $(this).parent().parent().parent().append("<div id='marklen"+numberDivType+numberDivMaterial+countm+"'><div class='col-md-2 col-sm-2 col-xs-2'></div><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca Del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens"+numberDivType+numberDivMaterial+countm+"', class= 'form-control col-md-7 col-xs-12', placeholder='Marca Del Lente' type='text' name='namemarkLens"+numberDivType+numberDivMaterial+countm+"'></div><a class='btn btn-danger' id='Subml'><i class='fa fa-minus'></i> </a></div></div>");
  });

  $('#fl').click(function(e) 
  {
    var countf = $("div[id*='fillen']").length;
    $('#fLens').append("<div id='fillen"+countf+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='nameFilter'>Filtro del lente *: </label><div class='col-md-6 col-sm-6 col-xs-12'><input id='nameFilter"+countf+"', class= 'form-control col-md-7 col-xs-12', placeholder='Filtro del lente' type='text' name='nameFilter"+countf+"'></div><a class='btn btn-danger' id='Subfl'><i class='fa fa-minus'></i> </a></div></div>");
  });

  $(document).on('click', '#Subml', function(){
    $(this).parents('div').eq(1).remove();
  });

  $(document).on('click', '#Subfl', function(){
    $(this).parents('div').eq(1).remove();
  }); 

  $(document).on('click', '#Submml', function(){
    $(this).parents('div').eq(1).remove();
  });  

  $(document).on('click', '#Subtmml', function(){
    $(this).parents('div').eq(1).remove();
  });    
</script>
