@extends('layouts.app')


@section('content')

<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">La Solicitud a sido ingresada</h4>
        <a href="{{route('insumo.index')}}" class="btn btn-primary">Volver a solicitud</a>
       
      
      </div>
    
</div>

    
@endsection