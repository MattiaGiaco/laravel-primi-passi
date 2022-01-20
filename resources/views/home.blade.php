<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>laravel-primi-passi</title>
</head>
<body>
  <div class="container">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
      </li>
    </ul>
    <h1 class="text-center my-5">Hello {{$name}}</h1>
  </div>
</body>
</html>