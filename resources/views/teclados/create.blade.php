@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('teclados.store')}}" >
        @csrf
       
          <div class="form-group">
            <label for="exampleInputEmail1">Marca teclado</label>
            <input type="text" class="form-control" id="marca_teclado" name="marca_teclado" value="{{old('marca_teclado')}}" aria-describedby="departamento" placeholder="Ingrese el modelo del teclado" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial del teclado</label>
            <input type="text" class="form-control" id="serial_teclado" name="serial_teclado" aria-describedby="emailHelp" placeholder="El serial del teclado" required>
        
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tipo teclado</label>
            <select class="form-select form-select-lg mb-3" id="tipo_teclado" name="tipo_teclado" aria-label=".form-select-lg example">
                <option  selected disabled>Tipo de teclado</option>
                <option value="inalambrico">Inalambrico</option>
                <option value="cable">Con cable</option>
                
              </select>
          </div>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection