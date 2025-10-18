<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
</head>
<body>
    @include('partials.header')
    @include('partials.sidebar')
      
    @yield('content')
@include('partials.footer')
</body>
</html>