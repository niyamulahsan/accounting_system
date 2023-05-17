<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/font/bootstrap-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <title>Laravel</title>
</head>

<body>
  @include('partials.__header')
  <div style="height: calc(100% - 170px)" class="overflow-y-scroll">
    @yield('content')
  </div>
  @include('partials.__footer')

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/custom.js') }}"></script>
</body>

</html>