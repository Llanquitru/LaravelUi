@extends('layouts.app')

@section('content')
   
<div class="container">

    <form method="POST" action="{{route('teclados.update',$teclado)}}" >
        @method('PUT')
        @csrf
        
        <div class="form-group">
            <label for="exampleInputEmail1">Marca del teclado</label>
            <input type="text" class="form-control" id="marca_teclado" name="marca_teclado" value="{{$teclado->marca_teclado}}" aria-describedby="departamento"  required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial del teclado</label>
            <input type="text" class="form-control" id="serial_teclado" name="serial_teclado" value="{{$teclado->serial_teclado}}" aria-describedby="emailHelp" required>
        
          </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Tipo teclado</label>
            <select class="form-select form-select-lg mb-3"  name="tipo_teclado" >
                <option  value="{{$teclado->tipo_teclado}}"   >{{$teclado->tipo_teclado}} </option>
                <option value=""disabled></option>
                <option value="inalambrico">Inalambrico</option>
                <option value="cable">Con cable</option>
                
              </select>
         </div>
          
              
      
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

</div>
@endsection
