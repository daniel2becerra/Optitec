@extends('layouts.admin')
    @section('content')
        @include('alerts.AlertsRequest')
        @include('alerts.SuccessRequest')
        @include('alerts.ErrorsRequest')
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Citas</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Calendario de citas <small>Calendario de citas</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
            <div class="container">
            {!! Form::open(['route' => 'Appointments.store', 'method' => 'post', 'role' => 'form']) !!}
            <div id="responsive-modal" class="modal fade" tabindex="-1" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>REGISTRO DE NUEVO EVENTO</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {!!Form::label('title', 'PACIENTE')!!}
                                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('phone', 'TELÉFONO')!!}
                                {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('date_start', 'FECHA INICIO') !!}
                                {!! Form::text('date_start', old('date_start'), ['class' => 'form-control', 'readonly' => 'true']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('time_start', 'HORA INICIO') !!}
                                {!! Form::text('time_start', old('time_start'), ['class' => 'form-control']) !!}
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('color', 'COLOR') !!}
                                <div class="input-group colorpicker">
                                    {!! Form::text('color', old('color'), ['class' => 'form-control']) !!}
                                    <span class="input-group-addon">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dafault" data-dismiss="modal">CANCELAR</button>
                            {!! Form::submit('GUARDAR', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <div id='calendar'></div>
            {!!Form::open(['route'=>['Appointments.update', 1],  'method'=>'PUT', 'id'=>'updatemodel'])!!}
            <div id="modal-event" class="modal fade" tabindex="-1" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>DETALLES DE EVENTO</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {!!Form::label('title', 'PACIENTE')!!}
                                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('phone', 'TELÉFONO')!!}
                                {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('time_start', 'HORA INICIO') !!}
                                {!! Form::text('time_start', old('_time_start'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('color', 'COLOR') !!}
                                <div class="input-group colorpicker">
                                    {!! Form::text('color', old('_color'), ['class' => 'form-control']) !!}
                                    <span class="input-group-addon">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <a id="delete" data-href="{{url('Appointments')}}" data-id="" class="btn btn-danger">ELIMINAR</a>
                            <button type="button" class="btn btn-dafault" data-dismiss="modal">CANCELAR</button>
                            {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <script>
        var BASEURL = "{{ url('/') }}";
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                height: 500,
                color: 'yellow',   // an option!
                textColor: 'black',
                borderColor: 'green',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay, listWeek'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                selectHelper: true,
                overlap: false,

                select: function(start){
                    if (start.add(1, 'days') < moment())
                    {
                        alert("Lo siento, no puedes agendar citas en el pasado");
                        $('#calendar').fullCalendar('unselect');
                        return false;
                    }
                    else
                    {
                        start.add(-1, 'days');
                        start = moment(start.format());
                        $('#date_start').val(start.format('YYYY-MM-DD'));
                        $('#responsive-modal').modal('show');
                    }
                    
                },

                events: BASEURL + '/Appointments',

                eventClick: function(event, jsEvent, view){
                    var date_start = $.fullCalendar.moment(event.start).format('YYYY-MM-DD');
                    var time_start = $.fullCalendar.moment(event.start).format('hh:mm:ss');
                    var date_end = $.fullCalendar.moment(event.end).format('YYYY-MM-DD hh:mm:ss');
                    $('#modal-event #delete').attr('data-id', event.id);
                    $('#updatemodel').attr("action", '/Appointments/'+event.id);
                    $('#modal-event #title').val(event.title);
                    $('#modal-event #phone').val(event.phone);
                    $('#modal-event #date_start').val(date_start);
                    $('#modal-event #time_start').val(time_start);
                    $('#modal-event #color').val(event.color);
                    $('#modal-event').modal('show');
                }
            });

        });

        $('.colorpicker').colorpicker();

        $('#modal-event #date_start').bootstrapMaterialDatePicker({
            weekStart : 0,
            date: true,
            time: false,
            format: 'YYYY-MM-DD'
        });

        $('#modal-event #time_start').bootstrapMaterialDatePicker({
            date: false,
            shortTime: false,
            format: 'HH:mm:ss'
        });

        $('#responsive-modal #time_start').bootstrapMaterialDatePicker({
            date: false,
            shortTime: false,
            format: 'HH:mm:ss'
        });

        $('#delete').on('click', function(){
            var x = $(this);
            var delete_url = x.attr('data-href')+'/'+x.attr('data-id');
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                url: delete_url,
                type: 'DELETE',
                success: function(result){
                    $('#modal-event').modal('hide');
                    alert(result.message);
                    window.location.reload();

                },
                error: function(result){
                    $('#modal-event').modal('hide');
                    alert(result.message);
                }
            });
        });

    </script>
    @stop   