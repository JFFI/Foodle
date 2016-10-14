@extends('app')

@section('content')
  <h2>{{ $puesto->nombre}}</h2>
  <h1>{{ $platillo->nombre }}</h1>
  <hr/>
  <a href="{{url('puestos',$puesto->id)}}"><button class="btn btn-default">Regresar</button></a>
  <h2>Precio: Q{{ $platillo->precio}}</h2>
  <div class="col-sm-8">
  <div class="panel panel-default">
    <div class=panel-body>
  <p>"{{ $platillo->descripcion}}"</p>
</div>
</div>
</div>
<div class="col-sm-4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Tags</h4>
    </div>
    <div class="panel-body">
      @foreach($tags as $tag)
      {{$tag->nombre}}
      @endforeach
    </div>
  </div>
</div>
</div>
@stop
