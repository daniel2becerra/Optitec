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
<div id="tmmLens">
<?php
    $Type = -1;
    $flatType = 0;
    $Material = -1;
    $flatMaterial = 0;
    $Mark = -1;
    $flatMark = 0;
  ?>
  @foreach($datos as $dato)
    <?php
      if ($dato->IDTIPO != $Type)
      {
        if ($flatType!=0)
        {
          echo ("</div></div></div></div>");
        }
        echo("<div class='ln_solid'></div><div id='typemtmarklen".$flatType."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Tipo del lente *:</label><div class='col-md-6 col-sm-6 col-xs-12'><input id='nametypelens".$flatType."', class= 'form-control col-md-7 col-xs-12', placeholder='Tipo del lente' type='text' name='nametypelens".$flatType."' value='".$dato->NOMBRETIPO."'></div>");if($flatType==0){echo ("<a class='btn btn-success' id='tmml'><i class='fa fa-plus'></i></a></div>");} else {echo ("<a class='btn btn-danger' id='Subtmml'><i class='fa fa-minus'></i></a></div>");}

        echo("<div class='col-md-1 col-sm-1 col-xs-1'></div><div id='mmLens'><div id='mtmarklen".$flatMaterial."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Material del lente *:</label><div class='col-md-5 col-sm-5 col-xs-5'><input id='namemateriallens".$flatMaterial."', class= 'form-control col-md-7 col-xs-12', placeholder='Material del lente' type='text' name='namemateriallens".$flatMaterial."' value='".$dato->NOMBREMATERIAL."'></div><a class='btn btn-success' id='mml'><i class='fa fa-plus'></i></a></div>");

        echo("<div class='col-md-2 col-sm-2 col-xs-2'></div><div id='mLens'><div id='marklen".$flatMark."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens".$flatMark."', class= 'form-control col-md-7 col-xs-12', placeholder='Marca del Lente' type='text' name='namemarkLens".$flatMark."' value='".$dato->NOMBREMARCA."'></div><a class='btn btn-success' id='ml'><i class='fa fa-plus'></i> </a></div></div>");
        $Type = $dato->IDTIPO;
        $flatType = $flatType + 1;
        $Material = $dato->IDMATERIAL;
        $flatMaterial = $flatMaterial + 1;
        $Mark = $dato->IDMARCA;
        $flatMark = $flatMark + 1;
      }
      else
      {
        if ($dato->IDMATERIAL != $Material)
        {

          echo("<div class='col-md-1 col-sm-1 col-xs-1'></div><div id='mmLens'><div id='mtmarklen".$flatMaterial."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Material del lente *:</label><div class='col-md-5 col-sm-5 col-xs-5'><input id='namemateriallens".$flatMaterial."', class= 'form-control col-md-7 col-xs-12', placeholder='Material del lente' type='text' name='namemateriallens".$flatMaterial."' value='".$dato->NOMBREMATERIAL."'></div><a class='btn btn-danger' id='Submml'><i class='fa fa-minus'></i></a></div>");

          echo("<div class='col-md-2 col-sm-2 col-xs-2'></div><div id='mLens'><div id='marklen".$flatMark."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens".$flatMark."', class= 'form-control col-md-7 col-xs-12', placeholder='Marca del Lente' type='text' name='namemarkLens".$flatMark."' value='".$dato->NOMBREMARCA."'></div><a class='btn btn-success' id='ml'><i class='fa fa-plus'></i> </a></div></div>");
          $Material = $dato->IDMATERIAL;
          $flatMaterial = $flatMaterial + 1;
          $Mark = $dato->IDMARCA;
          $flatMark = $flatMark + 1;
        }
        else
        {
          if ($dato->IDMARCA != $Mark)
          {
            echo("<div class='col-md-2 col-sm-2 col-xs-2'></div><div id='mLens'><div id='marklen".$flatMark."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Marca del Lente *: </label><div class='col-md-4 col-sm-4 col-xs-4'><input id='namemarkLens".$flatMark."', class= 'form-control col-md-7 col-xs-12', placeholder='Marca del Lente' type='text' name='namemarkLens".$flatMark."' value='".$dato->NOMBREMARCA."'></div><a class='btn btn-danger' id='Subml'><i class='fa fa-minus'></i> </a></div></div>");
            $Mark = $dato->IDMARCA;
            $flatMark = $flatMark + 1;
          }
        } 
      }
    ?>
  @endforeach
        </div>
      </div>
    </div>
  </div>

</div>
<div class="ln_solid"></div>
<div id="fLens">
  <?php
    $flatFilter = 0;
  ?>
  @foreach($filtros as $filtro)
  <?php
    echo ("<div id='fillen".$flatFilter."'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='nameFilter'>Filtro del lente *: </label><div class='col-md-6 col-sm-6 col-xs-12'><input id='nameFilter".$flatFilter."', class= 'form-control col-md-7 col-xs-12', placeholder='Filtro Del Lente' type='text' name='nameFilter".$flatFilter."' value='".$filtro->name."'></div>");if($flatFilter==0){echo ("<a class='btn btn-success' id='fl'><i class='fa fa-plus'></i> </a></div></div>");}else{echo ("<a class='btn btn-danger' id='Subfl'><i class='fa fa-minus'></i></a></div></div>");};
    $flatFilter = $flatFilter + 1;
  ?>  
  @endforeach
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
