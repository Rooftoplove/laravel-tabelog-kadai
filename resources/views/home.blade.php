<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>
  @extends('layouts.app')
  @section('title', 'Home')

  @section('content')
  @include('components.header')

  <h1>トップページ</h1>

  @endsection
</body>

</html>