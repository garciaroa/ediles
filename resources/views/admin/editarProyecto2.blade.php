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
      /<li class="active">{{ trans('labels.EditarProyectoooo') }}</li>
    </ol>
  </section>

  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col">

        <div class="tabbable" id="tabs-994657">

          <ul class="nav nav-tabs">

            <li class="nav-item">
              <a class="nav-link active show" href="#cronograma" data-toggle="tab">Cronograma</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#ubicacion" data-toggle="tab">Ubicación</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#informacion" data-toggle="tab">Información</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#obra" data-toggle="tab">Contrato de Obra</a>
            </li>

          </ul>
          <form action="/admin/adicionarNuevoProyecto" method="post" enctype="multipart/form-data">
          @csrf
            <div class="tab-content">

              <div class="tab-pane active" id="cronograma">
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPlazoCalificacion">Plazo de Calificacion de las Ofertas</label>


                    <div class="input-group date fechas">
                      <input type="text" value="@if($result[0]->fechaCalificacionOferta != '' ) {{ $result[0]->fechaCalificacionOferta }} @endif" name="inputPlazoCalificacion" class="form-control form-control-sm is-valid" id="inputPlazoCalificacion" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>


                    <div class="valid-feedback">
                      Looks good!
                    </div>



                  </div>



                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Publicacion del aviso</label>
                    <div class="input-group date fechas">
                      <input type="text" value="@if($result[0]->fechaAviso != '' ) {{$result[0]->fechaAviso}} @endif" name="inputPublicacionAviso" class="form-control form-control-sm is-valid" id="inputPublicacionAviso" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPublicacionAvisoPublico">Publicación de Aviso de Convocatoria pública</label>

                    <div class="input-group date fechas">
                      <input type="text" value="@if($result[0]->fechaPublicacionAviso != '' ) {{ $result[0]->fechaPublicacionAviso }} @endif" name="inputPublicacionAvisoPublico" class="form-control form-control-sm is-valid" id="inputPublicacionAvisoPublico" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>

                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Plazo para Presentar Observaciones</label>

                    <div class="input-group date fechas">
                      <input type="text" value="@if($result[0]->fechaPublicacionAviso != '' ) {{ $result[0]->fechaPublicacionAviso }} @endif" name="inputPlazoObservaciones" class="form-control form-control-sm is-valid" id="inputPlazoObservaciones" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>

                    <div class="valid-feedback">
                      Seleccione Nombre de Unidad de contratacion!
                    </div>
                  </div>
                </div>


                </p>
              </div>

              <div class="tab-pane" id="ubicacion">
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="selectComuna">Numero De Comuna</label>
                    <select name="selectComuna" class="form-control form-control-sm is-valid" id="selectComuna" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Seleccione...</option>
                        @foreach ($todo['comunas'] as $comuna)
                            <option value="{{ $comuna->id_comuna}}" value="@if($result[0]->id_comuna == $comuna->id_comuna ) selected @endif" >{{ $comuna->nombre_comuna}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">corregimiento</label>
                    <select name="selectCorregimiento" class="form-control form-control-sm is-valid" id="selectCorregimiento" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Seleccione...</option>
                      @foreach ($todo['corregimientos'] as $corregimiento)
                            <option value="{{ $corregimiento->id_corregimiento}}" value="@if($result[0]->id_corregimiento == $corregimiento->id_corregimiento ) selected @endif" >{{ $corregimiento->nombre_corregimiento}}</option>
                        @endforeach
                      <option value="">N/A</option>
                    </select>
                    <div class="valid-feedback">
                      Seleccione Corregimiento si aplica!
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Barrio</label>

                    <select name="selectBarrio" class="form-control form-control-sm is-valid" id="selectBarrio" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Seleccione...</option>
                        @foreach ($todo['barrios'] as $barrio)
                            <option value="{{ $barrio->id_barrio }}" value="@if($result[0]->id_barrio == $barrio->id_barrio ) selected @endif" >{{ $barrio->nombre_barrio}}</option>
                        @endforeach
                    </select>

                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Dirección de Ejecución</label>

                    <input type="text" value=" @if( $result[0]->direccion_proyecto != '' ) {{ $result[0]->direccion_proyecto }} @endif " name="inputTitulo" class="form-control form-control-sm is-valid" id="inputEjecucion" required>

                    <div class="valid-feedback">
                      Seleccione Nombre de Unidad de contratacion!
                    </div>
                  </div>
                </div>

                <fieldset class="border p-2">
                  <legend class="w-auto">Geolocalización</legend>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="input">Coordenada 1</label>

                      <input type="text" value=" @if( $result[0]->coordenadaX_proyecto != '' ) {{ $result[0]->coordenadaX_proyecto }} @endif " name="inputCoordenadaX" class="form-control form-control-sm is-valid" id="inputCoordenadaX" required>

                      <div class="valid-feedback">
                        Ingrese el valor de coordenada!
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputCoordenada2">Coordenada 2</label>

                      <input type="text" value=" @if( $result[0]->coordenadaY_proyecto != '' ) {{ $result[0]->coordenadaY_proyecto }} @endif " name="inputCoordenadaY" class="form-control form-control-sm is-valid" id="inputCoordenadaY" required>

                      <div class="valid-feedback">
                        Ingrese el valor de coordenada!
                      </div>
                    </div>
                  </div>
                </fieldset>


                </p>
              </div>

              <div class="tab-pane" id="informacion">
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Numero De Proceso</label>
                    <input type="text" value=" @if( $result[0]->codigo_proyecto != '' ) {{ $result[0]->codigo_proyecto }} @endif " name="inputNumeroProceso" class="form-control form-control-sm is-valid" id="inputNumeroProceso" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Título</label>
                    <input type="text" value=" @if( $result[0]->nombre_tipo != '' ) {{ $result[0]->nombre_tipo }} @endif " name="inputTitulo" class="form-control form-control-sm is-valid" id="inputTitulo" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Tipo de Proceso</label>
                    <input type="text" value=" @if( $result[0]->nombre_tipo != '' ) {{ $result[0]->nombre_tipo }} @endif " name="inputTipoProceso" class="form-control form-control-sm is-valid" id="inputTipoProceso" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Unidad de Contratación</label>

                    <select name="selectUnidadContratacion" class="form-control form-control-sm is-valid" size="4" multiple id="selectUnidadContratacion" aria-describedby="validationServer04Feedback" required>
                      
                      <option selected disabled value="">Seleccione...</option>
                        @foreach( $todo['unidadContratacion'] as $unidad )
                            <option value="@if( $result[0]->id_unidad == $unidad->id_unidad ) selected @endif"> $unidad->nombre_unidad</option>
                        @endforeach    
                      
                    </select>

                    <div class="valid-feedback">
                      Seleccione Nombre de Unidad de contratacion!
                    </div>
                  </div>
                </div>


                </p>
              </div>

              <div class="tab-pane" id="obra">
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputObra">Tipo de Contrato</label>
                    <input name="inputTipoContrato"  value=" @if( $result[0]->tipo_proyecto != '' ) {{ $result[0]->tipo_proyecto }} @endif " type="text" class="form-control form-control-sm is-valid" id="inputTipoContrato" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Descripción</label>
                    <textarea name="textareaDescripcion" value=" @if( $result[0]->descripcion_proyecto != '' ) {{ $result[0]->descripcion_proyecto }} @endif " class="form-control" id="textareaDescripcion" rows="3" required></textarea>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Duración del Contrato</label>
                    <input name="inputDuracionContrato" value=" @if( $result[0]->duracion_proyecto != '' ) {{ $result[0]->duracion_proyecto }} @endif " type="text" class="form-control form-control-sm is-valid" id="inputDuracionContrato" required>
                    <div class="valid-feedback">
                      Ingrese el valor en Numeros de Dias!
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Valor Estimado</label>
                    <input name="inputValorEstimado" value=" @if( $result[0]->presupuesto != '' ) {{ $result[0]->presupuesto }} @endif "  type="text" class="form-control form-control-sm is-valid" id="inputValorEstimado" required>
                    <div class="valid-feedback">
                      Ingrese Valor Estimado <span> <em>Solo Números</em></span>!
                    </div>
                  </div>

                  <!--div class="form-group col-md-6">
             <label for="inputTitulo">Valor Estimado</label>
                               
             <div class="progress-group">
             
                    
                    <span class="progress-number" ><b>00</b></span>
               
                    <input type="range" name="valorEstimado" style="margin-top:-1em; padding:0px;" class="form-control form-range" id="customRange1" value="0" min="1" max="100000000000000000">
              </div>
           
                  

             <div class="valid-feedback">
               Ingrese Valor Estimado <span>  <em>Solo Números</em></span>!
             </div>
            </div-->

                </div>

                </p>
              </div>
              <div class="card text-center">
                <div class="card-body">
                  <!--h5 class="card-title">Special title treatment</h5-->
                  <p class="card-text">Puedes dar clic en Enviar Cronograma y se guardara esta sección y/o una vez terminado la recolección de datos se enviara todo el formulario.</p>

                  <button type="submit" class="btn btn-primary">Enviar Cronograma</button>
                  <!--a href="#" class="btn btn-primary">Guardar Cronograma</a-->
                </div>
              </div>

            </div>
          </form>
        </div>


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