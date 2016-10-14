@extends('app')

@section('content')
  <h1>Crear</h1>
  <hr/>
  <a href="{{url('/')}}"><button class="btn btn-default">Regresar</button></a>
  <form role="form" action="{{url('puestos')}}" method="post">
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="nombre">Nombre:</label>
    <input class="form-control" name="nombre">
    </div>
    <br>
    <div class="form-group">
    <label>Posición:</label>
</div>
    <div class="col-sm-6 form-group">
    <input class="form-control" name="x" placeholder="X">
  </div>
  <div class="col-sm-6 form-group">
    <input class="form-control" name="y" placeholder="Y">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary form-control">Crear</button>
  </div>
  </form>
  @include ('errors.lista')
@stop
