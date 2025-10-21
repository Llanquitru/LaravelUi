@extends('layouts.app')

@section('content')
   
<div class="container">

    <form method="POST" action="{{route('insumo.update',$insumo)}}" >
        @method('PUT')
        @csrf
       
        <div class="form-group">
            <label for="exampleInputEmail1">Cables</label>
            <input type="text" class="form-control" id="cables" value="{{$insumo->cables}}" name="cables" aria-describedby="funcionarioHelp" required>
        
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="estado" value="{{$insumo->estado}}" name="estado" aria-describedby="emailHelp" placeholder="Ingrese el correo" required>
          
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Marca</label>
              <input type="text" class="form-control" id="marca" value="{{$insumo->marca}}" name="marca" aria-describedby="departamento" placeholder="Ingrese el departamento" required>
          
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Serial</label>
              <input type="text" class="form-control" id="serial"  value="{{$insumo->serial}}" name="serial" aria-describedby="emailHelp" placeholder="Ingrese el oficio" required>
          
            </div>
            
      
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

</div>
@endsection
