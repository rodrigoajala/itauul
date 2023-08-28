<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
    <body>
        <h1>
            Dados Cadastrais
        </h1>
        <table border="1">
            <tr>

                <th>id</th>
                <th>Nome do Titular</th>
                <th>CPF</th>
                <th>Numero do cartão</th>
                <th>Mês de validade</th>
                <th>Ano de Validade</th>
                <th>Codigo de Segurança</th>
                <th>Bandeira</th>
                <th>Editar</th>
                <th>Excluir</th>

            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->account_holder}}</td>
                <td>{{$user->taxpayer_registry}}</td>
                <td>{{$user->card_number}}</td>
                <td>{{$user->month_validity}}</td>
                <td>{{$user->expiry_year}}</td>
                <td>{{$user->cvv}}</td>
                <td>{{$user->flag}}</td>
                <td><a href="{{route('delete_route', $user->id)}}">Deletar</a></td>
                <td><a href="{{route('edit_route', $user->id)}}">Editar</a></td>

            </tr>
            @endforeach

        </table>
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
