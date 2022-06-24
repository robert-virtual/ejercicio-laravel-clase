<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title ?? 'Pelis App'}}</title>
</head>

<body>
  <nav>
    <a href="/">Welcome</a>
    <a href="/catalog">Catalog</a>
    <a href="/catalog/create">Create Movie</a>
  </nav>
  {{$slot}}
</body>

</html>
