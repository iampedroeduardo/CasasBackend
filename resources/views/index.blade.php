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
    <title>Farmácia</title>
</head>
<body>
    <div class="container">
        <header>
            <form action="pesquisar" method="post">
                <input type="search" name="pesquisa">
                <select name="campo">
                    <option value="nome">Nome</option>
                    <option value="laboratorio">Laboratório</option>
                </select>
                <select name="ordem">
                    <option value="preco">Preço</option>
                    <option value="quantidade">Quantidade</option>
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
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
