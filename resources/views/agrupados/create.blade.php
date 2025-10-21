@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('agrupados.store')}}" >
        @csrf
       
        <div class="form-group">
            <label for="exampleInputEmail1">Departamento</label>
            <input type="text" class="form-control" id="departamento" name="departamento" aria-describedby="departamento" placeholder="donde pertenece" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Edificio</label>
            <input type="text" class="form-control" id="edificio" name="edificio" aria-describedby="emailHelp" placeholder="Lugar donde trabaja" required>
        
          </div>

        <select class="form-select form-select-lg mb-3" id="gabinete_id" name="gabinete_id" aria-label=".form-select-lg example">
       
            <option  selected disabled>Gabinete</option>
            @foreach ($gabinetes as $gabinete)
            <option value="{{$gabinete->id}}">

                {{$gabinete->marca_gabinete}}
            </option>
            @endforeach
            
           
          </select>

          <select class="form-select form-select-lg mb-3" id="mause_id" name="mause_id" aria-label=".form-select-lg example">
       
            <option  selected disabled>Raton</option>
            @foreach ($mauses as $mause)
            <option value="{{$mause->id}}">

                {{$mause->serial_raton}}
            </option>
            @endforeach
            
           
          </select>

          <select class="form-select form-select-lg mb-3" id="pantalla_id" name="pantalla_id" aria-label=".form-select-lg example">
       
            <option  selected disabled>Pantalla</option>
            @foreach ($pantallas as $pantalla)
            <option value="{{$pantalla->id}}">

                {{$pantalla->serial_pantalla}}
            </option>
            @endforeach
            
           
          </select>



        <select class="form-select form-select-lg mb-3" id="teclado_id" name="teclado_id" aria-label=".form-select-lg example">
       
            <option  selected disabled>Teclado</option>
            @foreach ($teclados as $teclado)
            <option value="{{$teclado->id}}">

                {{$teclado->serial_teclado}}
            </option>
            @endforeach
            
           
          </select>


          <select class="form-select form-select-lg mb-3" id="funcionario_id" name="funcionario_id" aria-label=".form-select-lg example">
            <label for="form-text"> Seleccione funcionario</label>
             <option  selected disabled>Funcionario para asignar equipo</option>
             @foreach ($funcionarios as $funcionario)
             <option value="{{$funcionario->id}}">
 
                 {{$funcionario->nombre_funcionario}}
             </option>
             @endforeach
             
            
           </select>


           <select class="form-select form-select-lg mb-3" id="insumo_id" name="insumo_id" aria-label=".form-select-lg example">
            <label for="form-text"> Cable</label>
             <option  selected disabled>Insumos</option>
             @foreach ($insumos as $insumo)
             <option value="{{$insumo->id}}">
 
                 {{$insumo->cables}}
             </option>
             @endforeach
             
            
           </select>


           <select class="form-select form-select-lg mb-3" id="parlante_id" name="parlante_id" aria-label=".form-select-lg example">
          
             <option  selected disabled>Parlantes</option>
             @foreach ($parlantes as $parlante)
             <option value="{{$parlante->id}}">
 
                 {{$parlante->parlante_serial}}
             </option>
             @endforeach
             
            
           </select>



                  
               
       
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection