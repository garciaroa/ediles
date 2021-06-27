@extends('adminlte::page')

@section('title','Proyecto')


@section('content')
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> Visualizando Proyecto</span>
    <ol class="breadcrumb float-right font-italic">
      <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('admin/listarProyecto')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.ListaDeProyectos') }}</a></li>
      /<li class="active">{{ trans('Proyecto') }}</li>
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

          
         
            <div class="tab-content">

              
              <fieldset class="border p-2">
                <legend  class="w-auto">Cronograma</legend>
                <p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPlazoCalificacion">Plazo de Calificacion de las Ofertas</label>


                    <div class="input-group date fechas">
                      <input type="text" disabled value=" {{date('d/m/Y', $result['proyectos'][0]->fechaCalificacionOferta)}} " name="inputPlazoCalificacion" class="form-control form-control-sm is-valid" id="inputPlazoCalificacion" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                      
                      <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Calificacion de las Ofertas!</span>
                        @if ($errors->has('inputPlazoCalificacion'))
                            <span class="text-danger">{{ $errors->first('inputPlazoCalificacion') }}</span>
                        @endif
                  </div>



                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Publicacion del aviso</label>
                    <div class="input-group date fechas">
                      <input type="text" disabled value="{{date('d/m/Y', $result['proyectos'][0]->fechaAviso)}}" name="inputPublicacionAviso" class="form-control form-control-sm is-valid" id="inputPublicacionAviso" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
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
                      <input type="text" disabled value="{{date('d/m/Y', $result['proyectos'][0]->fechaPublicacionAviso)}}" name="inputPublicacionAvisoPublico" class="form-control form-control-sm is-valid" id="inputPublicacionAvisoPublico" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>

                        <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Publicación Convocatoria!</span>
                        @if ($errors->has('inputPublicacionAvisoPublico'))
                            <span class="text-danger">{{ $errors->first('inputPublicacionAvisoPublico') }}</span>
                        @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputTitulo">Plazo para Presentar Observaciones</label>

                    <div class="input-group date fechas">
                      <input type="text" disabled value="{{date('d/m/Y', $result['proyectos'][0]->fechaPlazoObservaciones)}}" name="inputPlazoObservaciones" class="form-control form-control-sm is-valid" id="inputPlazoObservaciones" required><span class="input-group-addon "><i class="bi bi-calendar3"></i></span>
                    </div>
                      
                        <span style="margin-top : .25rem; font-size : 80%; color : #28a745;">Seleccione Fecha Presentación de Observaciones!</span>
                        @if ($errors->has('inputPlazoObservaciones'))
                            <span class="text-danger">{{ $errors->first('inputPlazoObservaciones') }}</span>
                        @endif
                  </div>
                </div>


                </p>
              </fieldset>
                
              
         
              <fieldset class="border p-2">
                <legend  class="w-auto">Ubicacion</legend>
                <p>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="selectComuna">Numero De Comuna</label>
                            <select name="selectComuna" disabled class="form-control form-control-sm is-valid" id="selectComuna" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Seleccione...</option>
                                
                                @foreach( $result['comunas'] as $comuna)
                                <option value="{{ $comuna->id_comuna }}" @if( $comuna->id_comuna == $result['proyectos'][0]->id_comuna ) selected @endif> {{ $comuna->nombre_comuna }} </option>
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
                            <select name="selectCorregimiento" disabled class="form-control form-control-sm is-valid" id="selectCorregimiento" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Seleccione...</option>
                                @foreach( $result['corregimientos'] as $corregimiento)
                                    <option value="{{ $corregimiento->id_corregimiento }}" @if( $corregimiento->id_corregimiento == $result['proyectos'][0]->id_corregimiento ) selected @endif> {{ $corregimiento->nombre_corregimiento }} </option>
                                @endforeach 
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
                            <select name="selectBarrio" disabled class="form-control form-control-sm is-valid" id="selectBarrio" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Seleccione...</option>
                                @foreach( $result['barrios'] as $barrio)
                                    <option value="{{ $barrio->id_barrio }}" @if( $barrio->id_barrio == $result['proyectos'][0]->id_barrio ) selected @endif> {{ $barrio->nombre_barrio }} </option>
                                @endforeach
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

                            <input type="text" disabled value="{{ $result['proyectos'][0]->direccion_proyecto }}" name="inputEjecucion" class="form-control form-control-sm is-valid" id="inputEjecucion" required>

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

                            <input type="text" disabled value="{{ $result['proyectos'][0]->coordenadaX_proyecto }}" name="inputCoordenada1" class="form-control form-control-sm is-valid" id="inputCoordenada1" required>

                            <div class="valid-feedback">
                                Ingrese el valor de coordenada!
                            </div>
                            @if ($errors->has('inputCoordenada1'))
                                    <span class="text-danger">{{ $errors->first('inputCoordenada1') }}</span>
                            @endif
                            </div>

                            <div class="form-group col-md-6">
                            <label for="inputCoordenada2">Coordenada 2</label>

                            <input type="text" disabled value="{{ $result['proyectos'][0]->coordenadaY_proyecto }}" name="inputCoordenada2" class="form-control form-control-sm is-valid" id="inputCoordenada2" required>

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

              </fieldset>
                
             

              
              <fieldset class="border p-2">
                <legend  class="w-auto">Información</legend>
                <p>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNProceso">Numero De Proceso</label>
                            <input type="text" disabled value="{{ $result['proyectos'][0]->codigo_proyecto }}" name="inputNumeroProceso" class="form-control form-control-sm is-valid" id="inputNumeroProceso" required>
                            <div class="valid-feedback">
                            Ingrese Número de Proceso!
                            </div>
                                @if ($errors->has('inputNumeroProceso'))
                                        <span class="text-danger">{{ $errors->first('inputNumeroProceso') }}</span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTitulo">Título</label>
                            <input type="text" disabled value="{{ $result['proyectos'][0]->nombre_proyecto }}" name="inputTitulo" class="form-control form-control-sm is-valid" id="inputTitulo" required>
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
                            
                            <select name="inputTipoProceso" disabled class="form-control form-control-sm is-valid" id="inputTipoProceso" aria-describedby="validationServer04Feedback" required>
                                <option selected disabled value="">Seleccione...</option>
                                
                                @foreach( $result['tipoProcesos'] as $tipo)
                                    <option value="{{ $tipo->id_tipo }}" @if( $tipo->id_tipo == $result['proyectos'][0]->id_tipoProceso ) selected @endif> {{ $tipo->nombre_tipo }} </option>
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
                            <select name="selectUnidadContratacion" disabled class="form-control form-control-sm is-valid" id="selectUnidadContratacion" aria-describedby="validationServer04Feedback" required>
                                <option selected disabled value="">Seleccione...</option>
                                
                                @foreach( $result['unidadContratacion'] as $unidad)
                                    <option value="{{ $unidad->id_unidad }}" @if( $unidad->id_unidad == $result['proyectos'][0]->id_unidaContratacion ) selected @endif > {{ $unidad->nombre_unidad }} </option>
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
              </fieldset>
            
              
              <fieldset class="border p-2">
                <legend  class="w-auto"><h4>Contrato de Obra</h4></legend>

                    <p>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputObra">Tipo de Contrato</label>
                            <input name="inputTipoContrato" disabled value="{{ $result['proyectos'][0]->tipo_proyecto }}" type="text" class="form-control form-control-sm is-valid" id="inputTipoContrato" required>
                            <div class="valid-feedback">
                            Ingrese Tipo de contrato!
                            </div>
                            @if ($errors->has('inputTipoContrato'))
                                    <span class="text-danger">{{ $errors->first('inputTipoContrato') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTitulo">Descripción</label>
                            <textarea name="textareaDescripcion" disabled class="form-control" id="textareaDescripcion" rows="3" required>{{ $result['proyectos'][0]->descripcion_proyecto }}</textarea>
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
                            <input name="inputDuracionContrato" disabled value="{{ $result['proyectos'][0]->duracion_proyecto }}" type="text" class="form-control form-control-sm is-valid" id="inputDuracionContrato" required>
                            <div class="valid-feedback">
                            Ingrese el valor en Numeros de Dias!
                            </div>
                            @if ($errors->has('inputDuracionContrato'))
                                    <span class="text-danger">{{ $errors->first('inputDuracionContrato') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputNProceso">Valor Estimado</label>
                            <input name="inputValorEstimado" disabled value="{{ $result['proyectos'][0]->presupuesto }}" type="text" class="form-control form-control-sm is-valid" id="inputValorEstimado" required>
                            <div class="valid-feedback">
                            Ingrese Valor Estimado <span> <em>Solo Números</em></span>!
                            </div>
                            @if ($errors->has('inputValorEstimado'))
                                    <span class="text-danger">{{ $errors->first('inputValorEstimado') }}</span>
                            @endif
                        </div>
                    </div>

                    </p>
              </fieldset> 
                
              <br>
              <div class="card text-center">
                <div class="card-body">
                  <!--h5 class="card-title">Special title treatment</h5-->
                  <!--button type="submit" class="btn btn-primary">Editar Proyecto</button-->
                  <a href="{{ URL::to('admin/listarProyecto')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                  <a href="{{ URL::to('admin/editarProyecto') }}/{{$idProyecto}}" class="btn btn-primary">Editar</a>
                  
                </div>
              </div>

            </div>
         
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