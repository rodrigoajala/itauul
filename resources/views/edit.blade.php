<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
    <body>
<h1>
    Editar
</h1>
<br>
<form action="{{route('edit_store_route')}}"method="post">
    @csrf
    <div>
        <label for="account_holder">Nome do Titular</label>
        <br>
        <input type="text" name="account_holder" id="account_holder" value="{{$data->account_holder}}">
    </div>
    <br>
    <div>
        <label for="taxpayer_registry">CPF</label>
        <br>
        <input type="text" name="taxpayer_registry" id="taxpayer_registry"value="{{$data->taxpayer_registry}}">
    </div>
    <br>
    <div>
        <label for="card_number">Número do Cartão</label>
        <br>
        <input type="text" name="card_number" id="card_number"value="{{$data->card_number}}">
    </div>
    <br>
    <div>
        <label for="month_validity">Mês de Validade</label>
        <br>
        <input type="text" name="month_validity" id="month_validity"value="{{$data->month_validity}}">
    </div>
    <br>
    <div>
        <label for="expiry_year">Ano de Validade</label>
        <br>
        <input type="text" name="expiry_year" id="expiry_year"value="{{$data->expiry_year}}">
    </div>
    <br>
    <div>
        <label for="cvv">CVV</label>
        <br>
        <input type="text" name="cvv" id="cvv"value="{{$data->cvv}}">
    </div>
    <br>
    <div>
        <label for="flag">Bandeira</label>
        <br>
        <input type="text" name="flag" id="flag"value="{{$data->flag}}">
    </div>

    <br>
    <div>

    </div>
    <br>
    <input type="hidden" name="id" value="{{$data->id}}">
    <div>
        <input type="submit" value="Enviar">
    </div>

</form>
</body>
</html>
