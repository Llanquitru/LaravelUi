@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('insumo.store')}}" >
        @csrf
        <select class="form-select form-select-lg mb-3" id="cables" name="cables" aria-label=".form-select-lg example">
            <option name="cables" selected disabled>Tipo de cables</option>
            <option value="VGA">VGA</option>
            <option value="Cable_de_red">Cable De Red</option>
            <option value="Cable_de_poder_magic">Cable de poder magic</option>
            <option value="Cable_de_poder_normal">Cable de poder normal</option>
          </select>
        <div class="form-group">
            <label for="exampleInputEmail1">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" aria-describedby="emailHelp" placeholder="El estado del periferico" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" aria-describedby="departamento" placeholder="Ingrese la marca del periferico" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial</label>
            <input type="text" class="form-control" id="serial" name="serial" aria-describedby="emailHelp" placeholder="El numero Serial" required>
        
          </div>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection