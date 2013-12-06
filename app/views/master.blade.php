<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frame</title>
    @section('includes')
        {{ View::make('includes.includes') }}
    @show
</head>
<body>

     @section('menu')
        {{ View::make('includes.menu') }}
     @show

     @section('header')
        {{ View::make('includes.header') }}
    @show
     
    @yield('content')

    @section('footer')
        {{ View::make('includes.footer') }}
    @show

</body>
</html>
