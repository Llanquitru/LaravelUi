@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
       <h1>{{$teclado->id}}</h1>
       <h1>{{$teclado->marca_teclado}}</h1>
       <h1>{{$teclado->serial_teclado}}</h1>
       <h1>{{$teclado->tipo_teclado}}</h1>
   

        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>

    
@endsection