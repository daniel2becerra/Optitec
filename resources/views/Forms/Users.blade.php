<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-6">Rol <span class="required">*</span></label>
  <div class="col-md-6 col-sm-9 col-xs-12">
    {!!form::select('role_id', $roles, null, ['id'=>'role_id', 'class'=> 'form-control', 'placeholder'=>'Seleccione una opción'])!!}  
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
<div class="form-group">
  {!!Form::label('Correo *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'email'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('email',null, ['email', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Correo'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Usuario *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'user'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('user',null, ['id'=>'user', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Usuario'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Contraseña *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'password'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::password('password', ['id'=>'password', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Contraseña'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Registro médico/ Código asignado *: ', null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12', 'for'=>'register'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('register',null, ['id'=>'register', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Registro médico/ Código asignado'])!!}
  </div>
</div>
<div class="ln_solid"></div>
