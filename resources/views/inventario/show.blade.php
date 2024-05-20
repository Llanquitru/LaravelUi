@extends('layouts.app')


@section('content')

<div class="container">
  <div class="card text-center">
      <div class="card-header">
  Observar
      </div>
      <div class="card-body">
    

        <h1> para observar</h1>
    <h1>{{$inventorie->nombre_objeto}}</h1>
    
      </div>
      <div class="card-footer text-muted">
      Cosas de funcionario
      </div>
    </div>
</div>

    
@endsection