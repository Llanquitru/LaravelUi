@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
            
             <p class="h1 text-center">Id: {{$mause->id}}</p>   
             
          
             <p class="h1 text-center"> Marca raton: {{$mause->marca_raton}}   </p>
            
              <p class="h1 text-center">  Serial del raton: {{$mause->serial_raton}}    </p>
             
              <p class="h1 text-center"> Tipo de raton:     {{$mause->tipo_raton}}    </p> 
             
           
 
               
             
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection