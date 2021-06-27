@extends('adminlte::page')

@section('title','Nuevo Proyecto')


@section('content')
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> {{ trans('labels.AddComuna') }}</span>
    <ol class="breadcrumb float-right font-italic">
      <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('/admin/listarCorregimiento/') }}"><i class="fa fa-dashboard"></i> Corregimientos</a></li>
      /<li class="active">{{ trans('labels.nuevoCorregimiento') }}</li>
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

        <form action="/admin/adicionarNuevoCorregimiento" method="post" enctype="multipart/form-data">
                    @csrf

            <div class="form-row">
              <div class="form-group col-md-2"></div>

                <div class="form-group col-md-6">
                  <label for="inputTitulo">Corregimiento</label>

                  <input type="text" value="{{ $results['corregimiento'][0]->nombre_corregimiento }}" name="inputCorregimiento" class="form-control form-control-sm is-valid" id="inputCorregimiento" required>

                  <div class="valid-feedback">
                    Ingrese Nombre del Nuevo Corregimiento!
                  </div>
                  @if ($errors->has('selectCorregimiento'))
                            <span class="text-danger">{{ $errors->first('selectCorregimiento') }}</span>
                        @endif

                </div>

            </div>
            
            <div class="form-row">
              <div class="col-md-2"></div>
                <div class="col-md-6">
                  <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Corregimiento</button>
                    <a href="{{ URL::to('admin/listarCorregimiento')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
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