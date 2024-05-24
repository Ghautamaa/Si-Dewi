<!doctype html>
<html class="h-full bg-white"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>

<body class="h-full">
    
  @include('partials.navbar')


  
        @yield('container')
</body>

</html>
