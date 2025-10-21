@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Control de cosas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="{{route('solicitud.index')}}" class="btn "> Requerimiento</a>
                    
                    <a href="{{route('insumo.index')}}" class="btn "> Cables</a>
                    <a href="{{route('funcionario.index')}}" class="btn">Funcionario</a>
                    <a href="{{route('calendario.index')}}" class="btn">Calendario</a>
                    <a href="{{route('gabinetes.index')}}" class="btn">Gabinetes</a>
                    <a href="{{route('pantallas.index')}}" class="btn">Pantallas</a>
                    <a href="{{route('teclados.index')}}" class="btn">Teclado</a>
                    <a href="{{route('mauses.index')}}" class="btn">Raton</a>
                    <a href="{{route('parlantes.index')}}" class="btn">Parlante</a>
                    <a href="{{route('agrupados.index')}}" class="btn">Asignar Equipo para funcionario</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
