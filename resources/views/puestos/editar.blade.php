@extends('app')

@section('content')
  <h1>Editar</h1>
  <hr/>
  <a href="{{url('puestos',$puesto->id)}}"><button class="btn btn-default">Regresar</button></a>
  <form role="form" action="{{url('puestos',$puesto->id)}}" method="post">
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="nombre">Nombre:</label>
    <input class="form-control" name="nombre" value="{{$puesto->nombre}}">
    </div>
    <br>
    <div class="form-group">
    <label>Posición:</label>
  </div>
  <div class="col-sm-6 form-group">
    <input class="form-control" name="x" value="{{$puesto->x}}">
    </div>
    <div class="col-sm-6 form-group">
    <input class="form-control" name="y" value="{{$puesto->y}}">
    </div>
    <div class="form-group">
    <button class="btn btn-primary form-control" type="submit">Guardar</button>
    </div>
  </form>
  @include ('errors.lista')
@stop
