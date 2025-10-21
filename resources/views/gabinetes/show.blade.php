@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
            
             <p class="h1 text-center">Id: {{$gabinete->id}}</p>   
             
          
             <p class="h1 text-center"> Marca: {{$gabinete->marca_gabinete}}   </p>
            
              <p class="h1 text-center">  Serial: {{$gabinete->serial_gabinete}}    </p>
             
              
              <p class="h1 text-center">  Cantida de ram: {{$gabinete->ram}}    </p>
             
               
              <p class="h1 text-center">  Tipo de ram: {{$gabinete->ram_tipo}}    </p>
             
             
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection