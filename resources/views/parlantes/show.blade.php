@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
        Vista general de los parlantes
        </div>
        <div class="card-body">
            
             <p class="h1 text-center">Id: {{$parlante->id}}</p>   
             
              <p class="h1 text-center">  Serial del raton: {{$parlante->parlante_modelo}}    </p>
             
              <p class="h1 text-center"> Tipo de raton:     {{$parlante->parlante_serial}}    </p> 
             
           
 
               
             
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection