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
                      <input type="text" name="inputPlazoCalificacion" class="form-control form-control-sm is-valid" id="inputPlazoCalificacion" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                      
                      <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Calificacion de las Ofertas!</span>
                        @if ($errors->has('inputPlazoCalificacion'))
                            <span class="text-danger">{{ $errors->first('inputPlazoCalificacion') }}</span>
                        @endif
                  </div>



                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Publicacion del aviso</label>
                    <div class="input-group date fechas">
                      <input type="text" name="inputPublicacionAviso" class="form-control form-control-sm is-valid" id="inputPublicacionAviso" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                        <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha de Publicacion!</span>
                        @if ($errors->has('inputPublicacionAviso'))
                            <span class="text-danger">{{ $errors->first('inputPublicacionAviso') }}</span>
                        @endif
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPublicacionAvisoPublico">Publicación de Aviso de Convocatoria pública</label>

                    <div class="input-group date fechas">
                      <input type="text" name="inputPublicacionAvisoPublico" class="form-control form-control-sm is-valid" id="inputPublicacionAvisoPublico" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>

                        <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Publicación Convocatoria!</span>
                        @if ($errors->has('inputPublicacionAvisoPublico'))
                            <span class="text-danger">{{ $errors->first('inputPublicacionAvisoPublico') }}</span>
                        @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Plazo para Presentar Observaciones</label>

                    <div class="input-group date fechas">
                      <input type="text" name="inputPlazoObservaciones" class="form-control form-control-sm is-valid" id="inputPlazoObservaciones" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                      
                        <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Presentación de Observaciones!</span>
                        @if ($errors->has('inputPlazoObservaciones'))
                            <span class="text-danger">{{ $errors->first('inputPlazoObservaciones') }}</span>
                        @endif
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
                        
                        @foreach( $result['comunas'] as $comuna)
                          <option value="{{ $comuna->id_comuna }}"> {{ $comuna->nombre_comuna }} </option>
                        @endforeach 
                          
                    </select>
                    <div class="valid-feedback">
                      Seleccione Comuna!
                    </div>
                    @if ($errors->has('selectComuna'))
                            <span class="text-danger">{{ $errors->first('selectComuna') }}</span>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">corregimiento</label>
                    <select name="selectCorregimiento" class="form-control form-control-sm is-valid" id="selectCorregimiento" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Seleccione...</option>
                      <option value="1">Corregimiento 1</option>
                      <option value="2">Corregimiento 2</option>
                      <option value="3">Corregimiento 3</option>
                      <option value="1">Corregimiento 4</option>
                      <option value="2">Corregimiento 5</option>
                      <option value="3">Corregimiento 6</option>
                      <option value="3">Corregimiento 7</option>
                      <option value="3">Corregimiento 8</option>
                      <option value="3">N/A</option>
                    </select>
                    <div class="valid-feedback">
                      Seleccione Corregimiento si aplica!
                    </div>
                    @if ($errors->has('selectCorregimiento'))
                            <span class="text-danger">{{ $errors->first('selectCorregimiento') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-row capa" id="capa">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Barrio</label>
                    <select name="selectBarrio" class="form-control form-control-sm is-valid" id="selectBarrio" aria-describedby="validationServer04Feedback" required>
                      
                    </select>
                    <div class="valid-feedback">
                     Seleccione Barrio!
                    </div>
                    @if ($errors->has('selectBarrio'))
                            <span class="text-danger">{{ $errors->first('selectBarrio') }}</span>
                    @endif

                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Dirección de Ejecución</label>

                    <input type="text" name="inputEjecucion" class="form-control form-control-sm is-valid" id="inputEjecucion" required>

                    <div class="valid-feedback">
                      Seleccione Nombre de Unidad de contratacion!
                    </div>
                    @if ($errors->has('inputEjecucion'))
                            <span class="text-danger">{{ $errors->first('inputEjecucion') }}</span>
                    @endif
                  </div>
                </div>
                <fieldset class="border p-2">
                  <legend class="w-auto">Geolocalización</legend>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="input">Coordenada 1</label>

                      <input type="text" name="inputCoordenada1" class="form-control form-control-sm is-valid" id="inputCoordenada1" required>

                      <div class="valid-feedback">
                        Ingrese el valor de coordenada!
                      </div>
                      @if ($errors->has('inputCoordenada1'))
                            <span class="text-danger">{{ $errors->first('inputCoordenada1') }}</span>
                      @endif
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputCoordenada2">Coordenada 2</label>

                      <input type="text" name="inputCoordenada2" class="form-control form-control-sm is-valid" id="inputCoordenada2" required>

                      <div class="valid-feedback">
                        Ingrese el valor de coordenada!
                      </div>
                      @if ($errors->has('inputCoordenada2'))
                            <span class="text-danger">{{ $errors->first('inputCoordenada2') }}</span>
                      @endif
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
                    <input type="text" name="inputNumeroProceso" class="form-control form-control-sm is-valid" id="inputNumeroProceso" required>
                    <div class="valid-feedback">
                      Ingrese Número de Proceso!
                    </div>
                    @if ($errors->has('inputNumeroProceso'))
                            <span class="text-danger">{{ $errors->first('inputNumeroProceso') }}</span>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Título</label>
                    <input type="text" name="inputTitulo" class="form-control form-control-sm is-valid" id="inputTitulo" required>
                    <div class="valid-feedback">
                      Ingrese Titulo!
                    </div>
                    @if ($errors->has('inputTitulo'))
                            <span class="text-danger">{{ $errors->first('inputTitulo') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Tipo de Proceso</label>
                    
                      <select name="inputTipoProceso" class="form-control form-control-sm is-valid" id="inputTipoProceso" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Seleccione...</option>
                          
                          @foreach( $result['tipoProcesos'] as $tipo)
                            <option value="{{ $tipo->id_tipo }}"> {{ $tipo->nombre_tipo }} </option>
                          @endforeach 
                            
                      </select>

                    <div class="valid-feedback">
                      Seleccione Tipo de Proceso!
                    </div>
                    @if ($errors->has('inputTipoProceso'))
                            <span class="text-danger">{{ $errors->first('inputTipoProceso') }}</span>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Unidad de Contratación</label>
                    <!--select name="selectUnidadContratacion" class="form-control form-control-sm is-valid" size="3" multiple id="selectUnidadContratacion" aria-describedby="validationServer04Feedback" required -->
                    <select name="selectUnidadContratacion" class="form-control form-control-sm is-valid" id="selectUnidadContratacion" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Seleccione...</option>
                          
                          @foreach( $result['unidadContratacion'] as $unidad)
                            <option value="{{ $unidad->id_unidad }}"> {{ $unidad->nombre_unidad }} </option>
                          @endforeach 
                            
                      </select>

                    <div class="valid-feedback">
                      Seleccione Nombre de Unidad de contratacion!
                    </div>
                    @if ($errors->has('selectUnidadContratacion'))
                            <span class="text-danger">{{ $errors->first('selectUnidadContratacion') }}</span>
                    @endif
                  </div>
                </div>


                </p>
              </div>

              <div class="tab-pane" id="obra">
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputObra">Tipo de Contrato</label>
                    <input name="inputTipoContrato" type="text" class="form-control form-control-sm is-valid" id="inputTipoContrato" required>
                    <div class="valid-feedback">
                      Ingrese Tipo de contrato!
                    </div>
                    @if ($errors->has('inputTipoContrato'))
                            <span class="text-danger">{{ $errors->first('inputTipoContrato') }}</span>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Descripción</label>
                    <textarea name="textareaDescripcion" class="form-control" id="textareaDescripcion" rows="3" required></textarea>
                    <div class="valid-feedback">
                      Ingrese Descripcion del Proyecto!
                    </div>
                    @if ($errors->has('textareaDescripcion'))
                            <span class="text-danger">{{ $errors->first('textareaDescripcion') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Duración del Contrato</label>
                    <input name="inputDuracionContrato" type="text" class="form-control form-control-sm is-valid" id="inputDuracionContrato" required>
                    <div class="valid-feedback">
                      Ingrese el valor en Numeros de Dias!
                    </div>
                    @if ($errors->has('inputDuracionContrato'))
                            <span class="text-danger">{{ $errors->first('inputDuracionContrato') }}</span>
                    @endif
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputNProceso">Valor Estimado</label>
                    <input name="inputValorEstimado" type="text" class="form-control form-control-sm is-valid" id="inputValorEstimado" required>
                    <div class="valid-feedback">
                      Ingrese Valor Estimado <span> <em>Solo Números</em></span>!
                    </div>
                    @if ($errors->has('inputValorEstimado'))
                            <span class="text-danger">{{ $errors->first('inputValorEstimado') }}</span>
                    @endif
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
<!--link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/mio.css"-->
@stop

@section('js')

<script src="http://127.0.0.1:8000/js/scripts.js"></script>


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