@extends('adminlte::page')
@include('admin.commom.meta')
@section('title','Editar Proyecto')

@section('title', 'Tablero')

@section('plugins.Sweetalert2',true)<!--s deben ingresar toda las bibliotecas de css o js-->

@section('content_header')
    <h1>ditar Proyecto</h1>
@stop

@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Edit Product <small>Edit Product...</small>{{$idProyecto}} </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/listingProducts')}}"><i class="fa fa-dashboard"></i> Listing Product</a></li>
      <li class="active">Edit Product</li>
    </ol>
  </section>
</div>
@stop

@section('css')
   
@stop

@section('js')
    <script> 
    Swal.fire(
   'Hola!',
  'Ahora Editemos un proyecto!',
  'ok!'
)
     </script>
@stop