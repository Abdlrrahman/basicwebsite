<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('inc.navbar')

<div class='container'>
<div class='row'>
<div class='col-8'>
@yield('content')
</div>
<div class='col-4'>
@include('inc.sidebar')
</div>
</div>
</div>
</body>
</html>