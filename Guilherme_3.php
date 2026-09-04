<?php
$nome_cliente = $_POST['nome'] ?? 'Cliente';
$valor_total  = (float) ($_POST['total'] ?? 0);

$vendas = [
    "Ana Silva"     => 45.00,
    "Carlos Souza"  => 80.00,
    "Mariana Lima"  => 35.00,
    "Lucas Pereira" => 110.00
];

$vendas[$nome_cliente] = $valor_total;

$faturamento_total = array_sum($vendas);

$maior_pedido = max($vendas);

arsort($vendas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Gerencial - Geek Burger</title>

</head>
<body>

    <div class="container">
        <h2>Painel Gerencial de Vendas</h2>

        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Valor do Pedido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $cliente => $valor): ?>
                    <tr>
                        <td><?php echo $cliente; ?></td>
                        <td>R$ <?php echo number_format($valor, 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="destaque">
            <p><strong>Faturamento Total:</strong> <span class="valor">R$ <?php echo number_format($faturamento_total, 2, ',', '.'); ?></span></p>
            <p><strong>Pedido Recorde:</strong> <span class="valor">R$ <?php echo number_format($maior_pedido, 2, ',', '.'); ?></span></p>
        </div>
    </div>

</body>
</html>