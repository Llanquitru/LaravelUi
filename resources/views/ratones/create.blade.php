@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('mauses.store')}}" >
        @csrf
       
          <div class="form-group">
            <label for="exampleInputEmail1">Marca raton</label>
            <input type="text" class="form-control" id="marca_raton" value="{{old('marca_raton')}}" name="marca_raton" aria-describedby="departamento" placeholder="Ingresa el raton" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial del raton</label>
            <input type="text" class="form-control" id="serial_raton" value="{{old('serial_raton')}}" name="serial_raton" aria-describedby="emailHelp" placeholder="El numero Raton" required>
        
          </div>

          <select class="form-select form-select-lg mb-3" id="tipo_raton" value="{{old('tipo_raton')}}" name="tipo_raton" aria-label=".form-select-lg example">
            <option  selected disabled>Tipo de raton</option>
            <option value="inalambrico">Inalambrico</option>
            <option value="cable">Con cable</option>
            
          </select>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection