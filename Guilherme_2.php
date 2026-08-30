<?php

$nome = $_POST['nome'];
$lanche = $_POST['lanche'];
$quantidade = $_POST['quantidade'];
$gorjeta = $_POST['gorjeta'];
$fidelidade = $_POST['fidelidade'];

    switch($lanche) {
        case 'Combo Jedi':
            $preco = 35.50;
            break;

        case 'Combo Hobbit':
            $preco = 28.00;
            break;

        case 'Combo Stark': 
            $preco = 42.90;
            break;

        default: 
            $preco = 0.00;
            break;
    
    }

    $subtotal = $preco * $quantidade;
    $total = $subtotal + $gorjeta;

    switch ($fidelidade) {
        case 1:
            $categoria = "Novato";
            $desconto = 0;
            break;


        case 2:
            $categoria = "VIP";
            $desconto = 0.05;
            break;

        case 3:
            $categoria = "Premium";
            $desconto = 0.10;
            break;

        default:
            $categoria = "Categoria não mapeada!";
            $desconto = 0;
            break;
    }

    $totalFinal = $total - ($total * $desconto);

    echo "<h1>Resumo do Pedido</h1>";
    echo "<p><strong>Cliente:</strong> $nome</p>";
    echo "<p><strong>Lanche:</strong> $lanche</p>";
    echo "<p><strong>Quantidade:</strong> $quantidade</p>";
    echo "<p><strong>Categoria Fidelidade:</strong> $categoria</p>";
    echo "<p><strong>Subtotal:</strong> R$ " . number_format($subtotal, 2, ',', '.') . "</p>";
    echo "<p><strong>Gorjeta:</strong> R$ " . number_format($gorjeta, 2, ',', '.') . "</p>";
    echo "<p><strong>Total Final com Desconto:</strong> R$ " . number_format($totalFinal, 2, ',', '.') . "</p>";

?>