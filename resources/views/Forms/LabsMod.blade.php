
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
<?php
$flattype = 0;
$flatmark = 0;
$flatmaterial = 0;

$arrayIdType = array();
$arrayIdMark = array();
$arrayIdMaterial= array();

$arrayValueType = array();
$arrayValueMark = array();
$arrayValueMaterial= array();
$arrayValuePrice = array();

?>
@foreach($datos as $dato)
  <?php
  array_push($arrayIdType, $dato->IDTYPE);
  array_push($arrayIdMark, $dato->IDMARK);
  array_push($arrayIdMaterial, $dato->IDMATERIAL);

  array_push($arrayValueType, $dato->NAMETYPE);
  array_push($arrayValueMark, $dato->NAMEMARK);
  array_push($arrayValueMaterial, $dato->NAMEMATERIAL);
  array_push($arrayValuePrice, $dato->PRICEMATMARK); 
  $countprice = 0;
  $counttype = 0;
  $pos = 0;
  ?>
@endforeach
<div id="full">
  <?php
    for ($i=0; $i < count($arrayIdType); $i++)
    {
      if ($flattype != $arrayIdType[$i])
      {
        echo("<div id='tipo".$counttype."'>
        <div class='form-group'>
          <label class='control-label col-md-3 col-sm-3 col-xs-12'>Tipo del lente *: '</label>
          <div class='col-md-4 col-sm-4 col-xs-'>
            <input type='text' name='nametypelens[]' class='form-control col-md-7 col-xs-12' placeholder='Tipo del lente' value='".$arrayValueType[$i]."'>
          </div>");
          if($flattype==0){echo ("<a class='btn btn-success' id='tmml'><i class='fa fa-plus'></i></a>");}else{echo ("<a class='btn btn-danger' id='subtmml'><i class='fa fa-minus'></i></a>");};
        echo("</div>
        <button id='addMaterial".$counttype."' type='button' class='btn btn-primary'>Agregar material</button>
        <button id='addMarca".$counttype."' type='button' class='btn btn-success'>Agregar marca</button>  
        <button id='delMaterial".$counttype."' type='button' class='btn btn-danger'>Eliminar último material</button>
        <button id='delMarca".$counttype."' type='button' class='btn btn-warning'>Eliminar última marca</button>
      
        <table id='tabla".$counttype."' class='table table-hover table-bordered'>
          <thead>
            <tr>
              <th>Material\Marca</th>
              <th scope='row'><input name='marca[".$counttype."][]' class='form-control' type='text' size='16' placeholder='Marca' value='".$arrayValueMark[$i]."'></th>");
        $flattype = $arrayIdType[$i];
        $flatmaterial = $arrayIdMaterial[$i];
        $countmark = 1;
        $countmaterial = 1;
      }
      else
      {
        if($flatmaterial == $arrayIdMaterial[$i])
        {
          echo("<th scope='row'><input name='marca[".$counttype."][]' class='form-control' type='text' size='16' placeholder='Marca' value='".$arrayValueMark[$i]."'></th>");
          $countmark +=1;
          $flatmaterial = $arrayIdMaterial[$i];
        }
        elseif($flatmaterial != $arrayIdMaterial[$i])
        {
          $flatmaterial = $arrayIdMaterial[$i];
          $countmaterial += 1;
        }
      }
      if($i+1 < count($arrayIdType))
      {
        if($flattype != $arrayIdType[$i+1]) 
        {
          echo("<tbody>");
          for ($j=0; $j < $countmaterial; $j++)
          {
              echo("<tr>
                <th scope='row'><input name='material[".$counttype."][]' class='form-control' type='text' size='16' placeholder='Material' value='".$arrayValueMaterial[$pos]."'></th>"); 
            for ($k=0; $k < $countmark; $k++)
            { 
              echo("<td><input name='precio[".$counttype."][]' class='form-control' type='text' size='16' placeholder='$$$' value='".$arrayValuePrice[$pos]."'></td>");
              $pos += 1;
            }
          }
          echo("</table>
            <div class='ln_solid'></div>
          </div>");
          if($counttype != 0)
          {
            echo("<script>
              $('#addMaterial".($counttype)."').click(function()
              {
                var tds=$('#tabla".($counttype)." tr:first th').length;
                var nuevaFila='<tr>';
                nuevaFila+='<th><input name=\"material[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"Material\"></th>';
                for(var i=1;i<tds;i++)
                {
                    nuevaFila+='<td><input name=\"precio[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"$$$\"</td>';
                }
                nuevaFila+='</tr>';
                $('#tabla".($counttype)."').append(nuevaFila);
              });

              $('#addMarca".($counttype)."').click(function()
              {
                var c = 0;
                $('#tabla".($counttype)." tr').each(function()
                {
                  if(c==0)
                  {
                    $(this).append('<th scope=\"row\"><input name=\"marca[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"Marca\"></th>');
                  }
                  else
                  {
                    $(this).append('<td><input name=\"precio[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"$$$\"></td>');
                  }
                  c++;
                });
              });
              $('#delMaterial".($counttype)."').click(function()
              {
                var trs=$('#tabla".($counttype)." tr').length;
                if(trs>2)
                {
                    $('#tabla".($counttype)." tr:last').remove();
                }
              });

              $('#delMarca".($counttype)."').click(function()
              {
                var tds=$('#tabla".($counttype)." tr:first th').length;
                if(tds>2)
                {
                  $('#tabla".($counttype)." th:last-child, #tabla".($counttype)." td:last-child').remove();
                }
              });
            </script>");
          }
          $counttype += 1;          
        }
      }
      else
      {
        echo("<tbody>");
        for ($j=0; $j < $countmaterial; $j++)
        {
            echo("<tr>
              <th scope='row'><input name='material[".$counttype."][]' class='form-control' type='text' size='16' placeholder='Material' value='".$arrayValueMaterial[$pos]."'></th>"); 
          for ($k=0; $k < $countmark; $k++)
          { 
            echo("<td><input name='precio[".$counttype."][]' class='form-control' type='text' size='16' placeholder='$$$' value='".$arrayValuePrice[$pos]."'></td>");
            $pos += 1;
          }
        }
        echo("</table>
            <div class='ln_solid'></div>
          </div>");
        echo("<script>
          $('#addMaterial".($counttype)."').click(function()
          {
            var tds=$('#tabla".($counttype)." tr:first th').length;
            var nuevaFila='<tr>';
            nuevaFila+='<th><input name=\"material[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"Material\"></th>';
            for(var i=1;i<tds;i++)
            {
                nuevaFila+='<td><input name=\"precio[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"$$$\"</td>';
            }
            nuevaFila+='</tr>';
            $('#tabla".($counttype)."').append(nuevaFila);
          });

          $('#addMarca".($counttype)."').click(function()
          {
            var c = 0;
            $('#tabla".($counttype)." tr').each(function()
            {
              if(c==0)
              {
                $(this).append('<th scope=\"row\"><input name=\"marca[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"Marca\"></th>');
              }
              else
              {
                $(this).append('<td><input name=\"precio[".($counttype)."][]\" class=\"form-control\" type=\"text\" size=\"16\" placeholder=\"$$$\"></td>');
              }
              c++;
            });
          });
          $('#delMaterial".($counttype)."').click(function()
          {
            var trs=$('#tabla".($counttype)." tr').length;
            if(trs>2)
            {
                $('#tabla".($counttype)." tr:last').remove();
            }
          });

          $('#delMarca".($counttype)."').click(function()
          {
            var tds=$('#tabla".($counttype)." tr:first th').length;
            if(tds>2)
            {
              $('#tabla".($counttype)." th:last-child, #tabla".($counttype)." td:last-child').remove();
            }
          });
        </script>");
      }
    }
   ?>
</div>

<div id="fLens">
  <?php
    $flatFilter = 0;
  ?>
  @foreach($filtros as $filtro)
  <?php
    echo("<div id='fillen'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='nameFilter'>Filtro del lente *: </label><div class='col-md-6 col-sm-6 col-xs-12'><input class= 'form-control col-md-7 col-xs-12', placeholder='Filtro del lente' type='text' name='filter[]' value='".$filtro->name."'></div>");if($flatFilter==0){echo ("<a class='btn btn-success' id='fl'><i class='fa fa-plus'></i> </a></div></div>");}else{echo ("<a class='btn btn-danger' id='Subfl'><i class='fa fa-minus'></i></a></div></div>");};
    $flatFilter = $flatFilter + 1;
  ?>  
  @endforeach
</div>






<script>
  $('#fl').click(function(e) 
  {
    $('#fLens').append("<div id='fillen'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12' for='nameFilter'>Filtro del lente *: </label><div class='col-md-6 col-sm-6 col-xs-12'><input class= 'form-control col-md-7 col-xs-12', placeholder='Filtro del lente' type='text' name='nameFilter[]'></div><a class='btn btn-danger' id='Subfl'><i class='fa fa-minus'></i> </a></div></div>");
  });
  $(document).on('click', '#Subfl', function()
  {
    $(this).parents('div').eq(1).remove();
  }); 

  $("#addMaterial0").click(function()
  {
    var tds=$("#tabla0 tr:first th").length;
    var nuevaFila="<tr>";
    nuevaFila+="<th><input name='material[0][]' class='form-control' type='text' size='16' placeholder='Material'></th>";
    for(var i=1;i<tds;i++)
    {
        nuevaFila+="<td><input name='precio[0][]' class='form-control' type='text' size='16' placeholder='$$$'</td>";
    }
    nuevaFila+="</tr>";
    $("#tabla0").append(nuevaFila);
  });

  $("#addMarca0").click(function()
  {
    var c = 0;
    $('#tabla0 tr').each(function()
    {
      if(c==0)
      {
        $(this).append("<th scope='row'><input name='marca[0][]' class='form-control' type='text' size='16' placeholder='Marca'></th>");
      }
      else
      {
        $(this).append("<td><input name='precio[0][]' class='form-control' type='text' size='16' placeholder='$$$'></td>");
      }
      c++;
    });
  });

  $("#delMaterial0").click(function()
  {
    var trs=$("#tabla0 tr").length;
    if(trs>2)
    {
        $("#tabla0 tr:last").remove();
    }
  });

  $("#delMarca0").click(function()
  {
    var tds=$("#tabla0 tr:first th").length;
    if(tds>2)
    {
      $("#tabla0 th:last-child, #tabla0 td:last-child").remove();
    }
  });

  $(document).on('click', '#subtmml', function(){
    $(this).parents('div').eq(1).remove();
  });

  $(document).on('click', '#tmml', function()
  {
    var counttipos = $("div[id*='tipo']").length;
    $('#full').append("<div id='tipo"+counttipos+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'>Tipo del lente *:</label><div class='col-md-4 col-sm-4 col-xs-'><input class= 'form-control col-md-7 col-xs-12', placeholder='Tipo del lente' type='text' name='nametypelens[]'></div><a class='btn btn-danger' id='subtmml'><i class='fa fa-minus'></i></a></div><button id='addMaterial"+counttipos+"' type='button' class='btn btn-primary'>Agregar material</button><button id='addMarca"+counttipos+"' type='button' class='btn btn-success'>Agregar marca</button><button id='delMaterial"+counttipos+"' type='button' class='btn btn-danger'>Eliminar último material</button><button id='delMarca"+counttipos+"' type='button' class='btn btn-warning'>Eliminar última marca</button><table id='tabla"+counttipos+"' class='table table-hover table-bordered'><thead><tr><th>Material\\Marca</th><th scope='row'><input name='marca["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='Marca'></th></tr></thead><tbody><tr><th scope='row'><input name='material["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='Material'></th><td><input name='precio["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='$$$'></td></tr></tbody></table><div class='ln_solid'></div><script> $('#addMaterial"+counttipos+"').click(function(){var tds=$('#tabla"+counttipos+" tr:first th').length;var nuevaFila='<tr>';nuevaFila+=\"<th><input name='material["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='Material'></th>\";for(var i=1;i<tds;i++){nuevaFila+=\"<td><input name='precio["+counttipos+"][]' class='form-control' type='text' size='16'placeholder='$$$'</td>\";}nuevaFila+=\"</tr>\";$('#tabla"+counttipos+"').append(nuevaFila);});$('#addMarca"+counttipos+"').click(function(){var c = 0; $('#tabla"+counttipos+" tr').each(function(){if(c==0){$(this).append(\"<th scope='row'><input name='marca["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='Marca'></th>\");} else{$(this).append(\"<td><input name='precio["+counttipos+"][]' class='form-control' type='text' size='16' placeholder='$$$'></td>\");} c++;});});$('#delMaterial"+counttipos+"').click(function(){var trs=$('#tabla"+counttipos+" tr').length;if(trs>2){$('#tabla"+counttipos+" tr:last').remove();}});$('#delMarca"+counttipos+"').click(function(){var tds=$('#tabla"+counttipos+" tr:first th').length;if(tds>2){$('#tabla"+counttipos+" th:last-child, #tabla"+counttipos+" td:last-child').remove();}});<\/script></div>");
  });
  
</script>