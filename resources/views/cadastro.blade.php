<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4e9e9; 
        }
        .container{
            width: 80%;
            margin: 0 auto;
            margin-top: 250px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        button{
            background-color: #E0FFFF;
            border: 0;
            padding: 5px;
        }
    </style>
    <title>Cadastro de Casa</title>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Casa</h1>
        <form action="cadastrar" method="post">
            @csrf
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco">
            <br>
            <label for="imobiliaria">Imobiliária:</label>
            <input type="text" name="imobiliaria">
            <br>
            <label for="tipo">Tipo:</label>
            <br>
            <input type="radio" name="tipo" value="Aluguel">
            <label for="tipo">Aluguel</label>
            <input type="radio" name="tipo" value="Venda">
            <label for="tipo">Venda</label>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco">
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
