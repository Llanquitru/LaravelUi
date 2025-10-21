@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('gabinetes.store')}}" >
        @csrf
       
          <div class="form-group">
            <label for="exampleInputEmail1">Marca del gabinete</label>
            <input type="text" class="form-control" id="marca_gabinete" name="marca_gabinete" aria-describedby="departamento" placeholder="Ingreser la marca del gabinete" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial de la Gabinete</label>
            <input type="text" class="form-control" id="serial_gabinete" name="serial_gabinete" aria-describedby="emailHelp" placeholder="El numero Serial" required>
        
          </div>

          <select class="form-select form-select-lg mb-3" id="estado" name="estado" aria-label=".form-select-lg example">
            <option name="estado" selected disabled>Estado</option>
            <option value="Disponible">Disponible</option>
            <option value="Uso">Uso</option>
            <option value="Baja">Baja</option>
          </select>

          <select class="form-select form-select-lg mb-3" id="ram" name="ram" aria-label=".form-select-lg example">
            <option  selected disabled>Cantidad de ram</option>
            <option value="32">32</option>
            <option value="16">16</option>
            <option value="8">8</option>
            <option value="4">4</option>
          </select>

          <select class="form-select form-select-lg mb-3" id="ram_tipo" name="ram_tipo" aria-label=".form-select-lg example">
            <option  selected disabled>Tipo de ram</option>
            <option value="DDR4">DDR4</option>
            <option value="DDR3">DDR3</option>
            <option value="DDR2">DDR2</option>
          </select>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection