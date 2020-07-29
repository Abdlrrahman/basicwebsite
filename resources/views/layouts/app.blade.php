<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('inc.navbar')

<div class='container'>
 @if(Request::is('/'))
      @include('inc.showcase')
  @endif
<div class='row'>
<div class='col-8'>
@yield('content')
</div>
<div class='col-4'>
@include('inc.sidebar')
</div>
</div>
</div>

<footer id='footer' class='text-center'>
<p>Copyright 2020 &copy; Abdlrrahman Shibani</p>
</footer>
</body>
</html>