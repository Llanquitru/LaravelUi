@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('pantallas.store')}}" >
        @csrf
       
          <div class="form-group">
            <label for="exampleInputEmail1">Marca de la pantalla</label>
            <input type="text" class="form-control" id="marca_pantalla" value="{{old('marca_pantalla')}}" name="marca_pantalla" aria-describedby="departamento" placeholder="Ingresa la pantalla" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial de la pantalla</label>
            <input type="text" class="form-control" id="serial_pantalla" name="serial_pantalla" aria-describedby="emailHelp" placeholder="El numero Serial" required>
        
          </div>

          <select class="form-select form-select-lg mb-3" id="estado" name="estado" aria-label=".form-select-lg example">
            <option name="estado" selected disabled>El estado</option>
            <option value="Disponible">Disponible</option>
            <option value="En uso">En Uso</option>
            <option value="De baja">De baja</option>
          </select>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection