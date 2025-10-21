@extends('layouts.app')

@section('content')
    


<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
            
             <p class="h1 text-center">Id: {{$insumo->id}}</p>   
             
          
             <p class="h1 text-center"> Periferico: {{$insumo->periferico}}   </p>
            
              <p class="h1 text-center">  Estado: {{$insumo->estado}}    </p>
             
              <p class="h1 text-center"> Marca: {{$insumo->marca}}    </p> 
             
              <p class="h1 text-center"> Serial: {{$insumo->serial}}     </p> 
             
             <p class="h1 text-center"> Usuario Quien subio: {{$insumo->user->name}}  </p>
               
             
                
             
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>



@endsection