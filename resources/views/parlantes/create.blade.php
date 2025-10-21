@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('parlantes.store')}}" >
        @csrf
       
          <div class="form-group">
            <label for="exampleInputEmail1">Marca de los parlantes</label>
            <input type="text" class="form-control" id="parlante_modelo" value="{{old('parlante_modelo')}}" name="parlante_modelo" aria-describedby="departamento" placeholder="Ingresa la pantalla del parlante" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Serial de la pantalla</label>
            <input type="text" class="form-control" id="parlante_serial" name="parlante_serial" value="{{old('parlante_serial')}}" aria-describedby="emailHelp" placeholder="El numero Serial del parlante" required>
        
          </div>

          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection