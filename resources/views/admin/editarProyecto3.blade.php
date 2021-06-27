@extends('adminlte::page')

@section('title','Proyectos')

@section('content')
{{--dd($results)--}}
  <!-- Content Header (Page header) -->
  <section class="content-header"  style="margin-top:-1.5em;" >
    <h4> {{ trans('labels.Proyectos') }} </h4>
    <ol class="breadcrumb float-right font-italic" style="font-size: 0.8em;">
       <li><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
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
            
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th align="center">{{ trans('labels.NumeroProceso') }}</th>
                      <th align="center">{{ trans('labels.Informacion') }}</th>
                      <th align="center">{{ trans('labels.Ubicacion') }}</th>
                      <th align="center">{{ trans('labels.UnidadContratacion') }}</th>
                      <th align="center">{{ trans('labels.TipoProceso') }}</th>
                      <th align="center">{{ trans('labels.acciones') }}</th>
                     
                    </tr>
                  </thead>
                   <tbody>
                   @if(count($results['proyectos'])>0)
                    @foreach ($results['proyectos'] as  $key=>$proyecto)
                     {{-- dd($proyecto) --}}
                    	<tr id="">
                            <td class="@if(!$proyecto->estado) sold-content  @endif fondo_{{ $proyecto->id_proyecto }}" >{{ $proyecto->codigo_proyecto }}</td>
                            <td>
                            	
                            	{{ $proyecto->descripcion_proyecto }}
                            </td>  
                            <td class="@if(!$proyecto->estado) sold-content  @endif fondo_{{ $proyecto->id_proyecto }}">
                             	<strong>{{ trans('labels.Direccion') }}: </strong> <br>
                               {{ $proyecto->direccion_proyecto }}
                           		
                            </td>
                            <td>
                            	   	{{ $proyecto->nombre_unidad }}
                            </td> 
                            <td align="center" class="@if(!$proyecto->estado) sold-content  @endif fondo_{{ $proyecto->id_proyecto }}">
                            <!--strong>{{ trans('labels.DescripcionProyecto') }}:</strong> {{$proyecto->descripcion_proyecto}}<br><!--img src="{{--asset('').'/'.$proyecto->proyectos_image--}}" alt=""  height="100px"-->
                                  {{ $proyecto->nombre_tipo }}<br>
                              
                            </td>

                           
                            <td class="@if(!$proyecto->estado) sold-content  @endif fondo_{{ $proyecto->id_proyecto }}">
                            <ul class="nav table-nav" style="font: sans-serif;">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                  {{ trans('labels.Action') }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="font: 80% sans-serif;">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="editarProyecto/{{ $proyecto->id_proyecto }}">{{ trans('labels.Editproyecto') }}</a></li>
                                    <li style="margin:4px 8px 4px 8px; border-bottom: 1.5px solid #e8e9ec;"></li>
                                    <!--li role="presentation"><a role="menuitem" tabindex="-1" href="addproyectoAttribute/{{ $proyecto->id_proyecto }}">{{ trans('labels.proyectoAttributes') }}</a></li-->
                                    
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="adicionarImagenes/{{ $proyecto->id_proyecto }}">{{ trans('labels.proyectoImages') }}</a></li>
                                    <li style="margin:4px 8px 8px 8px; border-bottom: 1.5px solid #e8e9ec;"></li>
                                    
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation">
                                      <div class="form-check">
                                        <p><input class="visibleCheck" data-id={{ $proyecto->id_proyecto }} type="checkbox" class="form-check-input" @if(!$proyecto->estado) checked @endif>
                                        <label class="form-check-label" for="visibleCheck"><small>inhabilitar</small></label></p>
                                </div></li>
                                   
                                   
                                   
                                </ul>
                              </li>
                            </ul>
                               <!-- <a data-toggle="tooltip" data-placement="bottom" title="Edit {{ $proyecto->nombre_proyecto }} proyecto" href="editproyecto/{{ $proyecto->id_proyecto }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                
                                <a data-toggle="tooltip" data-placement="bottom" title="Delete {{ $proyecto->nombre_proyecto }} proyecto" id="deleteproyectoId" id_proyecto="{{ $proyecto->id_proyecto }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>-->
                            </td>
                        </tr>
                     @endforeach
                   @else
                   		<tr>
                            <td colspan="5">{{ trans('labels.NoRecordFound') }}</td>
                       </tr>
                   @endif 
                  </tbody>
                </table>
               
              </div>
              
            </div>
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
      <div class="col-md-1"></div>
    </div>

  </section>

@stop


@section('css')
    
@stop

@section('js')
    <script> 
    Swal.fire(
  'Hola!',
  'Estos son todos los proyectos!',
  'ok!'
)
     </script>
@stop