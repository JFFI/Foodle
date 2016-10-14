@extends('app')

@section('content')
  <h1>{{ $puesto->nombre }}</h1>
  <hr/>
  <div class="col-sm-12">
  <a href="{{url('/')}}"><button class="btn btn-default">Regresar</button></a>
</div>
<br/>
<br>
<div class="col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
  <h2>Productos:</h2>
</div>
<div class="panel-body">
  <ul>
  @foreach($platillos as $platillo)
  <li><h4>{{$platillo->nombre}}</h4><a href="{{ url('/platillos',$platillo->id)}}"><button class="btn btn-primary">Ir</button></a></li>
  @endforeach
</ul>
</div>
</div>
@stop
