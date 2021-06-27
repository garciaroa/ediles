@extends('adminlte::page')

@section('title','comunas')

@section('content')
{{--dd($results)--}}
  <!-- Content Header (Page header) -->
  <section class="content-header"  style="margin-top:-1.5em;" >
    <h4> {{ trans('labels.comunas') }} </h4>
    <ol class="breadcrumb float-right font-italic" style="font-size: 0.8em;">
       <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li class="active"> {{ trans('labels.Todoslascomunas') }}</li>
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
            	<a href="adicionarComuna" type="button" class="btn btn-block btn-primary" style="font-size:1.5em">{{ trans('labels.Nuevacomuna') }}</a>
            </div>
            @if( count($results['comunas']) > 0 )
             <small> | {{ $results['comunas']->total() }} Registros | página {{ $results['comunas']->currentPage()}} de {{ $results['comunas']->lastPage()}}</small>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                     
                      <th align="center">{{ trans('labels.Item') }}</th>
                      <th align="center">{{ trans('labels.Nombre') }}</th>
                      <th align="center">{{ trans('labels.Descripcion') }}</th>
                      <th align="center">{{ trans('labels.acciones') }}</th>
                     
                    </tr>
                  </thead>
                   <tbody>
                   @if(count($results['comunas'])>0)
                    @foreach ($results['comunas'] as  $key=>$comuna)
                     {{-- dd($proyecto) --}}
                    	<tr id="">
                            <td>{{ $comuna->id_comuna }}</td>
                            <td>
                            	
                            	{{ $comuna->nombre_comuna }}<br>
                              
                              	
                            </td>  
                            <td>
                             
                              {{ $comuna->descripcion_comuna }}
                           		
                            </td>
                                                      
                            <td>
                            <ul class="nav table-nav" style="font: sans-serif;">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                  {{ trans('labels.Action') }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="font: 80% sans-serif;">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="editarComuna/{{ $comuna->id_comuna }}">{{ trans('labels.Editcomuna') }}</a></li>
                                    <li style="margin:4px 8px 4px 8px; border-bottom: 1.5px solid #e8e9ec;"></li>
                                    
                                    
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="adicionarImagenes/{{ $comuna->id_comuna }}">{{ trans('labels.comunaImages') }}</a></li>
                                    <li style="margin:4px 8px 8px 8px; border-bottom: 1.5px solid #e8e9ec;"></li>
                                    
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation">
                                      <div class="form-check">
                                        <p><input class="visibleCheck" data-id={{ $comuna->id_comuna }} type="checkbox" class="form-check-input" >
                                        <label class="form-check-label" for="visibleCheck"><small>inhabilitar</small></label></p>
                                </div></li>
                                   
                                   
                                   
                                </ul>
                              </li>
                            </ul>
                               
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
                <div class="col-xs-12 text-right" style="float: right;">
                	{{$results['comunas']->appends(Request::except('page'))->links('pagination::bootstrap-4')}}
                  
                </div>
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
    <!--script> 
    Swal.fire(
  'Hola!',
  'Estos son todos los proyectos!',
  'ok!'
)
     </script-->
@stop