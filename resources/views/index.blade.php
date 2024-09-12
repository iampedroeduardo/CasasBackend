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
            background-color: 	#E0FFFF;
            border: 0;
            padding: 5px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

    </style>
    <title>Imobiliária</title>
</head>
<body>
    <div class="container">
        <header>
            <form action="pesquisar" method="post">
                @csrf
                <input type="search" name="pesquisa">
                <select name="campo">
                    <option value="" disabled>Pesquisar por</option>
                    <option value="endereco">Endereço</option>
                    <option value="imobiliaria">Imobiliária</option>
                </select>
                <select name="tipo">
                    <option value="ambos">Ambos</option>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                </select>
                <select name="ordempor">
                    <option value="" disabled>Ordenar por</option>
                    <option value="preco">Preço</option>
                    <option value="endereco">Endereço</option>
                </select>
                <select name="ordem">
                    <option value="asc">Crescente</option>
                    <option value="desc">Decrescente</option>
                </select>
                <button type="submit">Pesquisar</button>
            </form>
        </header>
        <br>
        <div class="cadastro">
            <form action="cadastro" method="get">
                <button type="submit">Cadastrar Medicamento</button>
            </form>
        </div>
        <br>
        <div class="medicamentos">
            <table>
                    <thead>
                        <tr>
                            <td>Endereço</td>
                            <td>Imobiliária</td>
                            <td>Preço</td>
                            <td>Tipo</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                    </thead>
                <?php 
                    for($i = 0; $i < count($dados); $i++){
                        $casa = $dados[$i];
                ?>
                    <tr>
                        <td><?=$casa['endereco']?></td>
                        <td><?=$casa['imobiliaria']?></td>
                        <td><?=$casa['preco']?></td>
                        <td><?=$casa['tipo']?></td>
                        <td><a href="{{ url('editar/'.$casa ->id) }}">aqui</a></td>
                        <td><a></a></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
