@extends('adminlte::page')

@section('title','Proyectos')

@section('title', 'Tablero')



@section('content_header')
    <h1>Encabezado</h1>
@stop

@section('content')
    <p>aqui veras Todo.</p>7
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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