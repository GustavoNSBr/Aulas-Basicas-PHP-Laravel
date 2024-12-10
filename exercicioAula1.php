<?php

$produtos = [
    ['nome' => 'Leite', 'desconto' => 0.2, 'preco' => '4.12'],
    ['nome' => 'Condicionador', 'desconto' => 0.7, 'preco' => '10.17'],
    ['nome' => 'Biscoito', 'desconto' => 0.05, 'preco' => '5.80'],
    ['nome' => 'Mussarela', 'desconto' => 0, 'preco' => '9.15'],
];

$porcentagemDesconto = $produto['desconto'] * 100;

foreach ($produtos as $produto) {

    if ($porcentagemDesconto >= 30) {
        echo "O Produto " . $produto['nome'] . " esta com um bom desconto, custando " . $produto['preco'] . "\n\n";

    } elseif ($porcentagemDesconto >= 5 && $porcentagemDesconto < 30) {
        echo "O Produto " . $produto['nome'] . " esta com um desconto razoavel, custando " . $produto['preco'] . "\n\n";

    } elseif ($porcentagemDesconto < 5 && $porcentagemDesconto > 0){
        echo "O Produto " . $produto['nome'] . " esta com um desconto baixo, custando " . $produto['preco'] . "\n\n";

    } else {
        echo "O Produto " . $produto['nome'] . " esta com sem desconto, custando " . $produto['preco'] . "\n\n";
    }
}

foreach ($produtos as $key => $produto) {
    echo $produtos[$key]['nome'] . "\n";
    $porcentagemDesconto = ($produtos[$key]['desconto'] * 100);

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


/*


$produtos = [
    ['nome' => 'Leite', 'desconto' => 0.2, 'preco' => '4.49'],
    ['nome' => 'Condicionador', 'desconto' => 8, 'preco' => '18.17'],
    ['nome' => 'Biscoito', 'desconto' => 0.5, 'preco' => '5.80'],
    ['nome' => 'Mussarela', 'desconto' => 0, 'preco' => '8.15'],
];

foreach ($produtos as $produto) {
    $precoOriginal = $produto['preco'] + $produto['desconto'];
    $porcentagemDesconto = ($produto['desconto'] / $precoOriginal) * 100;

    if ($porcentagemDesconto > 30) {
        echo "O Produto " . $produto['nome'] . " esta com um bom desconto, custando " . $produto['preco'] . "\n\n";

    } elseif ($porcentagemDesconto > 5) {
        echo "O Produto " . $produto['nome'] . " esta com um desconto razoavel, custando " . $produto['preco'] . "\n\n";

    } else {
        echo "O Produto " . $produto['nome'] . " esta com um desconto baixo, custando " . $produto['preco'] . "\n\n";
    }
}

foreach ($produtos as $key => $produto) {
    echo $produtos[$key]['nome'] . "\n";
    $precoOriginal = $produtos[$key]['preco'] + $produtos[$key]['desconto'];
    $porcentagemDesconto = ($produtos[$key]['desconto'] / $precoOriginal) * 100;

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
*/