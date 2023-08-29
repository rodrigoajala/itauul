<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>

<body>
    <h1>
        Dados Salvos com Sucesso
    </h1>
    <br>
    <a href="{{ route('database_route') }}">Consultar Dados</a>
    <br>
    <a href="{{ route('index') }}">Inicio</a>
</body>



</html>
