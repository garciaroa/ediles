@extends('adminlte::page')
@section('title','Nuevo Proyecto')


@section('content')
<div> 
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> {{ trans('labels.AddProyecto') }}</span>
    <ol class="breadcrumb float-right font-italic">
       <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('admin/listarProyecto')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.ListaDeProyectos') }}</a></li>
      /<li class="active">{{ trans('labels.NuevoProyecto') }}</li>
    </ol>
  </section>

  <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                                               
                    <div class="box-body">
                      @if( count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                  
                                   {{ $error }}
                            </div>
                        @endforeach
                      @endif
                      <form>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Proyecto</label>
                        <div class="col-sm-8">
                          <input type="email" name ="correo_id" class="form-control" id="correo_id" placeholder="Nombre de Proyecto">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Codigo</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Codigo Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Fecha Inicio</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Fecha Inicio">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Fecha Fin</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Fecha Fin">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Direccion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Direccion Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Presupuesto</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Costo del proyeco">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Descripcion del Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Estado</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Estado del Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Descripcion del Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Descripcion del Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Descripcion del Proyecto">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Descripcion del Proyecto">
                        </div>
                        </div>

                        <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-4 pt-0">Radios</legend>
                          <div class="col-sm-8">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                First radio
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Second radio
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                              <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                              </label>
                            </div>
                          </div>
                        </div>
                        </fieldset>
                        <div class="form-group row">
                        <div class="col-sm-2">Checkbox</div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Example checkbox
                            </label>
                          </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                        </div>
                        </form> 
                      
                    </div><!-- fin box-body-->  
                  </div>
              </div> <!--fin col-xs-12-->     
            </div> <!--fin row--> 
  </div> <!--fin box-body-->       



</div> 
@stop


@section('css')
    
@stop

@section('js')
    <script> 
    Swal.fire(
  'Hola!',
  'Ahora Crearemos un proyecto!',
  'ok!'
)
     </script>
@stop