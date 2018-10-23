@extends('layouts.master')

@section('content')

<div class="row">

<div class="col-sm-4">

    <!-- {{-- TODO: Imagen de la película --}} -->
    <img src="{{$peliculas['poster']}}" class="img-responsive"/>

</div>
<div class="col-sm-8">

    <!-- {{-- TODO: Datos de la película --}} -->
    <h2>
                {{$peliculas['title']}}
            </h2>
             <p>
                <strong>Año:</strong> {{$peliculas['year']}}
            </p>
             <p>
                <strong>Director:</strong> {{$peliculas['director']}}
            </p>
             <p>
                <strong>Resumen:</strong> {{$peliculas['synopsis']}}
            </p> 
             <p>
                <strong>Estado:</strong> {{ $peliculas['rented'] == 0 ? "Película disponible"  : "Película actualmente alquilada" }} 
            </p>
             @if ($peliculas['rented'])
                <a class='btn btn-danger'>Devolver película</a>
            @else
                <a class='btn btn-success'>Alquilar película</a>
                {{ $peliculas['rented'] }}   
            @endif
             <a class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar pelicula</a>
             <a >
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span> Volver al listado
                </button>
            </a>  

</div>
</div>

@stop