<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de um Supermercado</title>
    <style>
        body {
            margin: 20px;
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid gray;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }

        h1{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h1>Mercadao Topzera</h1>

    <?php

    $produtos = [
        ['nome' => 'Leite', 'desconto' => 1.2, 'preco' => 4.12],
        ['nome' => 'Condicionador', 'desconto' => 10.7, 'preco' => 18.17],
        ['nome' => 'Biscoito', 'desconto' => 0.6, 'preco' => 5.80],
        ['nome' => 'Mussarela', 'desconto' => 0, 'preco' => 9.15],
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>% Desconto</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalDesconto = 0; // Variável para calcular o total de descontos
            foreach ($produtos as $produto) {
                $valorDesconto = ($produto['desconto'] * $produto['preco']) / 100;

                echo "<tr>
                        <td>{$produto['nome']}</td>
                        <td>" . number_format($produto['desconto'], 1, ',', '.') . "%</td>
                        <td>{$produto['preco']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
