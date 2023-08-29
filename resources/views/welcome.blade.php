<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>

<body>
    <h1>
        Cadastramento
    </h1>
    <br>
    <form action="{{ route('confirmation_route') }}"method="post">
        @csrf
        <div>
            <label for="account_holder">Nome Titular</label>
            <br>
            <input type="text" name="account_holder" id="account_holder">
        </div>
        <br>
        <div>
            <label for="taxpayer_registry">CPF</label>
            <br>
            <input type="text" name="taxpayer_registry" id="taxpayer_registry" required maxlength="11">
        </div>
        <br>
        <div>
            <label for="card_number">Numero do Cartão</label>
            <br>
            <input type="text" name="card_number" id="card_number" require maxlength="16">
        </div>
        <br>
        <div>

            <label for="month_validity">Mês:</label>
            <br>
            <select name="month_validity" id="month_validity">
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Abril</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>

        </div>
        <br>
        <div>
            <label for="expiry_year">Ano validade</label>
            <br>
            <input type="text" name="expiry_year" id="expiry_year" required maxlength="4">
        </div>
        <br>
        <div>
            <label for="cvv">CVV</label>
            <br>
            <input type="text" name="cvv" id="cvv" require maxlength="3">
        </div>
        <br>
        <div>
            <label for="flag">Selecione a Bandeira:</label>
            <br>
            <select name="flag" id="flag">
                <option value="Visa">Visa</option>
                <option value="MasterCard">MasterCard</option>
                <option value="Elo">Elo</option>
                <option value="HiperCard">HiperCard</option>
            </select>
            <br>
            <br>
            <input type="submit" value="enviar">
            <br>

            <a href="{{ route('database_route') }}">Consultar Dados</a>
        </div>

    </form>
</body>



</html>
