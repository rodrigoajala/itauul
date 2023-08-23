<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
    <body>
        <h1>
           Dados Salvos com Sucesso
        </h1>
        <br>
        <form action="{{route('welcome_route')}}"method="post">
        @csrf
        <br>
        <a href="{{route('database_route')}}">Consultar Dados</a>
        <br>
        <a href="{{route('welcome_route')}}">Inicio</a>
        
        </form>
    </body>     



</html>
