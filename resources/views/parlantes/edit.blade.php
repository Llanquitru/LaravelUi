@extends('layouts.app')

@section('content')
   
<div class="container">

    <form method="POST" action="{{route('parlantes.update',$parlante)}}" >
        @method('PUT')
        @csrf
       
        <div class="form-group">
            <label for="exampleInputEmail1">Marca parlante</label>
            <input type="text" class="form-control" id="parlante_modelo" value="{{$parlante->parlante_modelo}}" name="parlante_modelo"  required>
        
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Serial parlante</label>
              <input type="text" class="form-control" id="parlante_serial" value="{{$parlante->parlante_serial}}" name="parlante_serial"   required>
          
            </div>
           
           
              
      
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

</div>
@endsection
