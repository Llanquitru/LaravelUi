@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
       <h1>{{$solicitud->oficina}}</h1>
       <h1>{{$solicitud->equipo}}</h1>
       <h1>{{$solicitud->codigo}}</h1>
       <h1>{{$solicitud->requerimiento}}</h1>
       <h1>{{$solicitud->descripcion}}</h1>
       <h1>{{$solicitud->user->name}}</h1>

        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>

    
@endsection