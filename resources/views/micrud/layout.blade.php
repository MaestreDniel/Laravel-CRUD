<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    .active a {
      color: red;
      text-decoration: none;
    }

    table {
      border-collapse: collapse;
      background-color: #EEEEEE;
    }

    tr:hover {
      background-color: rgba(15, 35, 170, 0.2);
    }

    th {
      background-color: #44a4df;
    }

    th, td {
      border: 1px solid #474747;
      padding: 1% 2% 1% 2%;
    }
  </style>
</head>
<body class="bg-light">
  @include('partials.nav')
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>