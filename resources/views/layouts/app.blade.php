<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'LSAPP')}}</title>

    <style type="text/css">
        .jumbotron {
          padding: 4rem 2rem;
          margin-bottom: 2rem;
          background-color: var(--bs-light);
          border-radius: .3rem;  
        }
    </style>
</head>
<body>
    @include('inc/navbar')
    <div class="container"> 
        @yield('content')
    </div>
</body>
</html>