@extends('layouts.app')

@section('content')
   
<div class="container">

    <form method="POST" action="{{route('pantallas.update',$pantalla)}}" >
        @method('PUT')
        @csrf
       
        <div class="form-group">
            <label for="exampleInputEmail1">Marca pantalla</label>
            <input type="text" class="form-control" id="marca_pantalla" value="{{$pantalla->marca_pantalla}}" name="marca_pantalla" aria-describedby="funcionarioHelp" required>
        
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Serial pantalla</label>
              <input type="text" class="form-control" id="serial_pantalla" value="{{$pantalla->serial_pantalla}}" name="serial_pantalla" aria-describedby="emailHelp"  required>
          
            </div>
           
            <select class="form-select form-select-lg mb-3" id="estado" name="estado" aria-label=".form-select-lg example">
                <option name="estado" selected disabled>El estado</option>
                <option value="Disponible">Disponible</option>
                <option value="Uso">En Uso</option>
                <option value="Baja">De baja</option>
              </select>
              
      
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

</div>
@endsection
