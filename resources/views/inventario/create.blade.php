@extends('layouts.app')


@section('content')

<div class="container">
  <div class="card text-center">
      <div class="card-header">
  Ingresar un insumo
      </div>
      <div class="card-body">
        
        <form method="POST" action="{{route('inventario.store')}}">
            @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre del insumo</label>
              <div class="col-sm-10">
                <input type="text" name="nombre_objeto" class="form-control" id="descripcion" placeholder="Ingrese el nombre del insumo" required>
              </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">descripcion</label>
                <div class="col-sm-10">
                  <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Ingrese la descripcion"required>
                </div>
              </div>
            


              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">serial</label>
                <div class="col-sm-10">
                  <input type="text" name="serial" class="form-control" id="serial" placeholder="N° numero serial del insumo">
                </div>
              </div>

              
              <select class="form-select" name="estado" aria-label="Default select example">
                <option selected disabled>Ingrese el estado</option>
                <option value="Disponible">Disponible</option>
                <option value="No disponible">No disponible</option>
                <option value="Sin opcion">Sin opcion</option>
              </select>
            
           



      </div>
      <div class="card-footer text-muted">
        <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

    
@endsection