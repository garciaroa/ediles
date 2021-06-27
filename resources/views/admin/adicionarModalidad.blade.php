@extends('adminlte::page')

@section('title','Nuevo Proyecto')


@section('content')
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> {{ trans('labels.AddModalidad') }}</span>
    <ol class="breadcrumb float-right font-italic">
      <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('/admin/listarModalidad/') }}">modalidades</a></i>/<li class="active">{{ trans('labels.NuevoModalidad') }}</li>
    </ol>
  </section>

  <div class="container-fluid">
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

        <form action="/admin/adicionarNuevaModalidad" method="post" enctype="multipart/form-data">
                    @csrf


                <div class="form-row">
                <div class="form-group col-md-2"></div>

                  <div class="form-group col-md-6">
                    <label for="inputTitulo">modalidad</label>

                    <input type="text" name="inputmodalidad" class="form-control form-control-sm is-valid" id="inputmodalidad" required>

                    <div class="valid-feedback">
                      Ingrese Nombre de la Nueva modalidadd!
                    </div>

                  </div>

                </div>

                <div class="form-row">
                <div class="form-group col-md-2"></div>

                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Descripcion modalidad</label>

                    <textarea rows="7" cols="50" name="inputDescripcionModalidadD" class="form-control form-control-sm is-valid" id="inputDescripcionModalidadD"></textarea>

                    <div class="valid-feedback">
                      Ingrese Descripcion del Nuevo modalidadZ!
                    </div>

                  </div>

                </div>

            <div class="form-row">
              <div class="col-md-2"></div>
                <div class="col-md-6">
                  <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Guardar modalidad</button>
                    <a href="{{ URL::to('admin/listarModalidad')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
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