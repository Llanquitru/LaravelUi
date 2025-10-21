@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
            
             <p class="h1 text-center">Id: {{$pantalla->id}}</p>   
             
          
             <p class="h1 text-center"> Marca: {{$pantalla->marca_pantalla}}   </p>
            
              <p class="h1 text-center">  Serial: {{$pantalla->serial_pantalla}}    </p>
             
              
               
             
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection