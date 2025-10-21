@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
    Informacion general
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cantidad de ram: {{$agrupado->gabinetes->ram}} GB</li>
                <li class="list-group-item">Tipo de ram: {{$agrupado->gabinetes->ram_tipo}}</li>
                <li class="list-group-item">Marca de la pantalla: {{$agrupado->pantallas->marca_pantalla}}</li>
               
              </ul>
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection