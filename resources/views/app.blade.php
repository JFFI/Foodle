<!doctype html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <title>Foodle</title>
    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body >

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Foodle</a>
      </div>

      <form class="navbar-form navbar-right" action="{{url('busqueda')}}" method="get">
              <div class="form-group">
                <input type="text" class="form-control" name='tag' placeholder="Búsqueda por Tags">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form>

    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>

</body>
</html>
