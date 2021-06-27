@extends('adminlte::page')

@section('title','Nuevo Proyecto')


@section('content')
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> {{ trans('labels.AddBarrio') }}</span>
    <ol class="breadcrumb float-right font-italic">
      <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('admin/listarBarrio') }}"><i class="fa fa-dashboard"></i> Barrios</a></li>
      /<li class="active">{{ trans('labels.NuevoBarrio') }}</li>
    </ol>
  </section>

  <div class="container-fluid">
  <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
              @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
      </div>
    </div>
  <div class="row">
              <div class="col-2"></div>
              <div class="col-6">
              		  @if (count($errors) > 0)
                          @if($errors->any())
                            <div class="alert alert-info alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{$errors->first()}}
                            </div>
                          @endif
                      @endif

              </div>
      </div>

    <div class="row">
      <div class="col-1"></div>
      <div class="col">

        <form action="/admin/adicionarNuevoBarrio" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="form-row">
              <div class="form-group col-md-2"></div>

                <div class="form-group col-md-6">
                  <label for="inputTitulo">Corregimiento</label>
                  <select name="selectCorregimiento" class="form-control form-control-sm is-valid" id="selectCorregimiento" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Seleccione...</option>
                        @foreach( $results['corregimientos'] as $corregimiento)
                            <option value="{{ $corregimiento->id_corregimiento }}" >{{ $corregimiento->nombre_corregimiento }}</option>
                        @endforeach    
                      <option value="0">N/A</option>
                  </select>
                  <div class="valid-feedback">
                    Seleccione Corregimiento!
                  </div>

                  @if ($errors->has('selectCorregimiento'))
                            <span class="text-danger">{{ $errors->first('selectCorregimiento') }}</span>
                        @endif
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2"></div>

                <div class="form-group col-md-6">
                  <label for="inputTitulo">Comuna</label>
                  <select name="selectComuna" class="form-control form-control-sm is-valid" id="selectComuna" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Seleccione...</option>
                      @foreach( $results['comunas'] as $comuna)
                          <option value="{{ $comuna->id_comuna }}" >{{ $comuna->nombre_comuna }}</option>
                      @endforeach    
                    <option value="0">N/A</option>
                  </select>
                  <div class="valid-feedback">
                    Seleccione Comuna!
                  </div>
                  @if ($errors->has('selectComuna'))
                            <span class="text-danger">{{ $errors->first('selectComuna') }}</span>
                        @endif
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2"></div>

                <div class="form-group col-md-6">
                  <label for="inputTitulo">Bario</label>

                  <input type="text" name="inputBarrio" class="form-control form-control-sm is-valid" id="inputBarrio" required>

                  <div class="valid-feedback">
                    Ingrese Nombre del Nuevo Barrio!
                  </div>

                  @if ($errors->has('inputBarrio'))
                            <span class="text-danger">{{ $errors->first('inputBarrio') }}</span>
                  @endif
                  
                </div>
            </div>

            <div class="form-row">
              <div class="col-md-2"></div>
                <div class="col-md-6">
                  <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Guardar Barrio</button-->
                    <a href="{{ URL::to('admin/listarBarrio')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                  </div>                
                </div>
            </div>

            
        </form>

      


      </div>
      <div class="col-1"></div>
    </div>
  </div>



</div>
@stop


@section('css')
<!-- link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/mio.css" -->
@stop

@section('js')


<script>
  $('.fechas').datepicker({
    format: "dd/mm/yyyy",
    language: "es",
    orientation: "bottom left"
  });

  /*   Swal.fire(
  'Hola!',
  'Ahora Crearemos un proyecto!',
  'ok!'
)*/
</script>
@stop