@extends('adminlte::page')

@section('title','Proyectos')

@section('content')
{{--dd($results)--}}
  <!-- Content Header (Page header) -->
  <section class="content-header"  style="margin-top:-1.5em;" >
    <h4> {{ trans('labels.Proyectos') }} </h4>
    <ol class="breadcrumb float-right font-italic" style="font-size: 0.8em;">
       <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li class="active"> {{ trans('labels.TodoslosProyectos') }}</li>
    </ol>
  </section>
  <br>
  <section class="content" style="font-size: small;"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="box" >
          <div class="box-header" style="margin-bottom:1.5em;">
            <div class="box-tools float-right col-md-2" style="font-size: x-small;">
            	<a href="{{ URL::to('admin/adicionarProyecto') }}" type="button" class="btn btn-block btn-primary" style="font-size:1.5em">{{ trans('labels.NuevoProyecto') }}</a>
            </div>
            @if( isset($results['proyectos']) && count($results['proyectos']) > 0 )
             <small> | {{ $results['proyectos']->total() }} Registros | página {{ $results['proyectos']->currentPage()}} de {{ $results['proyectos']->lastPage()}}</small>
            @endif 
            
          </div>
          <!-- /.box-header -->
          <div class="box-body" >
          	
            <div class="row">
              <div class="col-xs-12">
				  @if (count($errors) > 0)
					  @if($errors->any())
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  {{$errors->first()}}
						</div>
					  @endif
				  @endif
              </div>
            </div>
            
            <div class="row">
            	<div class="col-xs-12">
                    <form class="form-inline form-validate" enctype="multipart/form-data">
                      <div class="form-group">
                      	<h5 style="font-weight: bold; padding:0px 5px; ">{{ trans('labels.FiltrarPorComuna') }}:</h5>
                      </div>
                      <div class="form-group" style="min-width: 220px">
                        <select class="form-control field-validate" name="categories_id" style="width: 100%">
                        	<option value="">{{ trans('labels.SeleccioneComuna') }}</option>
                            @foreach ($results['comunas'] as  $key=>$subCategories)
                            	<option value="{{ $subCategories->id_comuna }}"
                                	@if(isset($_REQUEST['categories_id']) and !empty($_REQUEST['categories_id']))
                                    	@if( $subCategories->id_comuna == $_REQUEST['categories_id'])
                                        	selected
                                        @endif
                                    @endif
                                >{{ $subCategories->nombre_comuna }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" name="id_barrio" class="form-control" id="id_barrio"
                            @if(isset($_REQUEST['id_barrio']) and !empty($_REQUEST['id_barrio']))
                                value="{{ $_REQUEST['id_barrio'] }}"            
                            @endif
                         placeholder="Barrio">
                      </div>
                      <button type="submit" class="btn btn-success">{{ trans('labels.Search') }}</button>
                      <a href="{{ URL::to('admin/listarProyecto')}}" class="btn btn-danger">{{ trans('labels.ClearSearch') }}</a>
                    </form>
                </div><br><br><br>

             </div>
             
            
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
      <div class="col-md-1"></div>
    </div><!--row-->


  @if(count($results['comunas'])>0)
      @foreach ($results['comunas'] as  $key=>$comuna)

        <div class="row" style="border-top: solid #dcdcdc 0.3px">
            <div class="col-md-12 shadow">
              <fieldset>
                <legend><span><small>{{$comuna->nombre_comuna}} | Proyectos {{count($comuna->proyectos)}} | Total Votos {{ $comuna->totalVotantes }} </small></span></legend>
                  @if( count($comuna->proyectos) > 0 )
                    @foreach( $comuna->proyectos as $proyecto)

                      <div class="row">

                        <div class="col-md-1"></div>

                              <div class="col-md-8">
                                    <div class="progress-group">
                                      <span class="progress-text">{{ $proyecto->nombre_proyecto }}</span>
                                      <span class="progress-number float-right"><b>{{ $proyecto->votos }} </b>/ {{ $comuna->totalVotantes }}</span>

                                      <div class="progress sm">
                                        <div class="progress-bar" @if(isset($proyecto -> estado) && $proyecto->estado) style="width: <?php echo ($proyecto->votos*100)/$comuna->totalVotantes ?>%; background-color: rgba(54, 162, 235, 0.5);"  @else style="width: <?php echo ($proyecto->votos*100)/$comuna->totalVotantes ?>%; background-color: rgba(202, 202, 202, 0.8);" @endif></div>
                                      </div>
                                    </div>
                                    <!-- /.progress-group -->
                              </div>

                              <div class="col-md-2">
                                <div class="btn-group">
                                    <button class="btn btn-outline-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" style="font-size: 0.8em; font-family:Calibri, 'Times New Roman', Times, serif; font-style: italic;">
                                      <a class="dropdown-item" href="verProyecto/{{ $proyecto->id_proyecto }}">Ver Proyecto</a>
                                      <a class="dropdown-item" href="editarProyecto/{{ $proyecto->id_proyecto }}">Editar Proyecto</a>
                                      <a class="dropdown-item" href="inhabilitarProyecto/{{ $proyecto->id_proyecto }}"> @if(isset($proyecto->estado) && $proyecto->estado) Inhabilitar Proyecto @else habilitar Proyecto @endif</a>
                                      <a class="dropdown-item" href="#">Adicionar Imagenes</a>
                                    </div>
                                </div>
                              </div>

                        <div class="col-md-1"></div>

                      </div>
                         
                    @endforeach
                  @endif
              </fieldset>
            </div>
        </div>
        <br>
                         <br>   

      @endforeach
    @else
      <tr>
        <td colspan="5">{{ trans('labels.NoRecordFound') }}</td>
      </tr>
  @endif 
    <div class="col-xs-12 text-right">
                @if(isset($results['proyectos']))
                	{{$results['proyectos']->appends(Request::except('page'))->links()}}
                  @endif
    </div>



   
    

  </section>

@stop


@section('css')
    
@stop

@section('js')
    <script> 
/*    Swal.fire(
  'Hola!',
  'Estos son todos los proyectos!',
  'ok!'
)*/
     </script>
@stop