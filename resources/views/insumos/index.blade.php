@extends('layouts.app')
{{-- @php
$Teclado=0;
$Raton=0;
$Parlantes=0;

  @endphp --}}

@section('content')
{{-- @foreach ($insumos as $insumo)
@if ($insumo->perifericos =="Raton")
@php
$Raton++
@endphp

@endif
@if ($insumo->perifericos == "Teclado")
    @php
    $Teclado++

    @endphp
 
@endif
@if ($insumo->perifericos == "Parlante")
@php
   $Parlantes++
@endphp

@endif

@endforeach   --}}




<div class="container">
  
 
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <nav>
            <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
        </nav>
          
        </div>
      </nav>
     
    <div class="container p-4">
  
        <div class="card text-center">
          <div class="card-header h1">
       Insumos computacionales
      
          </div>
          <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <span class="navbar-text">
                    <p class="d-flex flex-row ">Cantidad cables de vga: {{count($vga)}}</p>
                  </span>
                  <span class="navbar-text">
                    <p class="d-flex justify-content-center">Cantidad cables de red: {{count($red)}}</p>
                  </span>
                  <span class="navbar-text">
                    <p class='d-flex flex-row-reverse '> cantidad de cables de poder magic: {{count($magic)}} </p> 
                  </span>

                  <span class="navbar-text">
                    <p class='d-flex flex-row-reverse '> cantidad de cables de poder normal: {{count($normal)}} </p> 
                  </span>
                </div>
              </nav>
            <div class="container container p-3 my-3 border ">
        
        
              <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
                <thead class="thead-dark ">
                <tr>
                <th>Id</th>
                <th>Cables</th>
                <th>Estado</th>
                <th>Marca</th>
                <th>Serial</th>
                <th>Usuario quien ingraso</th>
               <th>Ver</th>
               <th>Edita</th>
               <th>Eliminar</th>
                </tr>
                <tbody>
                 @foreach($insumos as $insumo)
                
                    
                
                <tr>
                    <td>
                        {{$insumo->id}}  
                      </td>
                    <td>
                      {{$insumo->cables}}  
                    </td>
                    <td>
                        {{$insumo->estado}}  
                      </td>
                      <td>
                        {{$insumo->marca}}  
                      </td>
    
                      <td>
                        {{$insumo->serial}}  
                      </td>
                      <td>
                        {{$insumo->user->name}}
                      </td>
                   <td class="text-center"><a href="{{route('insumo.show',$insumo)}}" class="btn btn-primary">VER</a></td>
                      <td class="text-center"><a href="{{route('insumo.edit',$insumo)}}"class="btn btn-secondary">Editar</td> 
                  <td class="text-center"> <form action="{{route('insumo.update',$insumo)}}" method="POST">@csrf 
                @method('DELETE')
                
                 <Button type="submit" class="btn btn-danger">Eliminar</Btton>
                </form></td>   
                </tr>
                
               @endforeach 
                </tbody>
                
                </thead>
                
                </table>
            </div>
            
            
          </div>
      
         
        
        
          <div class="card-footer text-muted">
            <div class="container">
              <a class="btn btn-dark" href="{{route('insumo.create')}}" >Registrar Insumo</a>
            </div>
    
           
          </div>
        </div>
      </div>

      {{-- <div class=""><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button></div> --}}
      
   
      
</div>

@php

function Imagen(){

  $text1 ='hola';

  $text2 ='mundo';


  $imagen1 = base64_decode($text1);

  $imagenTrasform= imagencreatefromstring($imagen1);


  header('Content-Type: image/png'); 
imagepng($imagenTrasform); 
imagedestroy($imagenTrasform); 
}

 
@endphp
@endsection
