@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
       <h1 class="text-center">Nombre: {{$funcionario->nombre_funcionario}}</h1>
       <h1 class="text-center">Correo: {{$funcionario->correo}}</h1>
       <h1 class="text-center">Departamento: {{$funcionario->departamento}}</h1>
       <h1 class="text-center">Trabajo: {{$funcionario->trabajo}}</h1>
       <h1 class="text-center">Quien lo ingreso: {{$funcionario->user->name}}</h1>
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>

@endsection