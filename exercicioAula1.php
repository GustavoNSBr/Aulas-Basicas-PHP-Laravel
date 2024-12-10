<?php

$produtos = [
    ['nome' => 'Leite', 'desconto' => 1.2, 'preco' => '4.12'],
    ['nome' => 'Condicionador', 'desconto' => 10.7, 'preco' => '18.17'],
    ['nome' => 'Biscoito', 'desconto' => 0.6, 'preco' => '5.80'],
    ['nome' => 'Mussarela', 'desconto' => 0, 'preco' => '9.15'],
];

foreach ($produtos as $produto) {
    $porcentagemDesconto = number_format(($produto['desconto'] / $produto['preco']) * 100, 0);

    if ($porcentagemDesconto >= 30) {
        echo "O Produto " . $produto['nome'] . " está com um bom desconto, custando R$" . $produto['preco'] . " com um desconto de " . $porcentagemDesconto . "%.\n\n";
    } elseif ($porcentagemDesconto >= 5 && $porcentagemDesconto < 30) {
        echo "O Produto " . $produto['nome'] . " está com um desconto razoável, custando R$" . $produto['preco'] . " com um desconto de " . $porcentagemDesconto . "%.\n\n";
    } elseif ($porcentagemDesconto > 0) {
        echo "O Produto " . $produto['nome'] . " está com um desconto baixo, custando R$" . $produto['preco'] . " com um desconto de " . $porcentagemDesconto . "%.\n\n";
    } else {
        echo "O Produto " . $produto['nome'] . " está sem desconto, custando R$" . $produto['preco'] . ".\n\n";
    }
}

foreach ($produtos as $key => $produto) {
    echo $produtos[$key]['nome'] . "\n";
    $porcentagemDesconto = number_format(($produto['desconto'] / $produto['preco']) * 100, 0);

    if ($porcentagemDesconto == 0) {
        echo "O Produto esta sem desconto \n";

    } elseif ($porcentagemDesconto > 5 && $porcentagemDesconto <= 30) {
        echo "O Produto esta com um desconto razoavel! \n";

    } elseif ($porcentagemDesconto <= 5) {
        echo "O Produto esta com um desconto baixo! \n";

    } else {
        echo "O Produto esta com um bom desconto! \n";
    }
}