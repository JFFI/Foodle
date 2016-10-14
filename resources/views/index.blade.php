@extends('app')

@section('content')

  <h1>Foodle</h1>
  <hr/>
  <div class="col-sm-9">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h1>Puestos de Comida</h1>
    </div>
    <div class="panel-body">
  <ul>
  @foreach($puestos as $puesto)
    <li><h4>{{ $puesto->nombre }}</h4><a href="{{ url('/puestos',$puesto->id)}}"><button class="btn btn-primary">Ir</button></a></li>
  @endforeach
</ul>
</div>
</div>
</div>
<div class="col-sm-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
  <h3>Usuario</h3>
</div>
<div class="panel-body text-center">
  <a href="{{url('/puestos/crear')}}"><button class="btn-default btn">Nuevo</button></a>
</div>
</div>
</div>
@stop
