<?php

$produtos = [
    ['nome' => 'Leite', 'desconto' => 4, 'preco' => '4,49'],
    ['nome' => 'Condicionador', 'desconto' => 8, 'preco' => '18,17'],
    ['nome' => 'Biscoito', 'desconto' => 0, 'preco' => '5,80'],
    ['nome' => 'Mussarela', 'desconto' => 11, 'preco' => '8,15'],
];

foreach($produtos as $produto){

    $textoBomProduto = "O Produto " . $produto['nome'] . ' esta com um bom desconto pois custando ' . $produto['preco'] . " esta valendo a pena \n\n";
    $textoProdutoOkay = "O Produto " . $produto['nome'] . ' esta normal pois esta custando ' . $produto['preco'] . "\n\n";


    if($produto['desconto'] >= 8){
        echo $textoBomProduto;
    }

    if($produto['desconto'] < 8){
        echo $textoProdutoOkay;
    }
}

foreach($produtos as $key => $produto){
    echo $produtos[$key]['nome'];
    echo "\n";

    if($produtos[$key]['desconto'] < 1){
        echo "O Produto esta sem desconto \n";
    }

    elseif($produtos[$key]['desconto'] > 5 && $produtos[$key]['desconto'] <= 10){
        echo "O Produto esta com um desconto razoavel! \n";
    }

    elseif($produtos[$key]['desconto'] <= 5){
        echo "O Produto esta com um desconto baixo! \n";
    }

    else{
        echo "O Produto esta com um bom desconto! \n";
    }
}
