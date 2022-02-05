<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
      background-color: lightgray;
      width: 60%;
    }

    tr:hover {
      background-color: rgba(0, 0, 0, 0.2);
    }

    th {
      background-color: gray;
    }

    th, td {
      border: 1px solid #474747;
      padding: 1% 2% 1% 2%;
    }
  </style>
</head>
<body>
  @include('partials.nav')
  @yield('content')
</body>
</html>