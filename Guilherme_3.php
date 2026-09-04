<?php

/*  1. RECEPÇÃO DOS DADOS REAIS DO DEV 2 */
/* Captura o nome vindo do formulário via $_POST. Se estiver vazio, usa 'Cliente' como padrão. */
$nome_cliente = $_POST['nome'] ?? 'Cliente';

/* Captura o total do pedido via $_POST e converte para número decimal (float). */
$valor_total  = (float) ($_POST['total'] ?? 0);


/* 2. CONSTRUÇÃO DO HISTÓRICO (BASE EM MEMÓRIA) */
/* Cria o Array Associativo com 4 vendas fictícias prévias (Chave: Nome do Cliente => Valor: Preço) */
$vendas = [
    "Ana Silva"     => 45.00,
    "Carlos Souza"  => 80.00,
    "Mariana Lima"  => 35.00,
    "Lucas Pereira" => 110.00
];

/* Coloca a venda real que veio do Dev 2 no array, completando os 5 itens exigidos. */
$vendas[$nome_cliente] = $valor_total;


/* 3. AUDITORIA DE FATURAMENTO */
/* Soma automaticamente todos os valores numéricos contidos no array $vendas */
$faturamento_total = array_sum($vendas);


/* 4. DESTAQUE DO DIA (MAIOR PEDIDO) */
// Descobre matematicamente qual é o maior valor presente no array
$maior_pedido = max($vendas);


/* 5. ORDENAÇÃO FINANCEIRA */
/* Ordena o array em ordem decrescente (do maior para o menor) mantendo os nomes atrelados aos valores */
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
                <!-- Laço de repetição do array $vendas ordenado pelo arsort() -->
                <?php foreach ($vendas as $cliente => $valor): ?>
                    <tr>
                        <!-- Imprime o nome do cliente  -->
                        <td><?php echo $cliente; ?></td>
                        <!-- Imprime o valor formatado no padrão brasileiro -->
                        <td>R$ <?php echo number_format($valor, 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?> <!-- Final do laço de repetição -->
            </tbody>
        </table>

        <!-- Painel de Destaques Financeiros -->
        <div class="destaque">
            <!-- Exibe o resultado calculado pelo array_sum() -->
            <p><strong>Faturamento Total:</strong> <span class="valor">R$ <?php echo number_format($faturamento_total, 2, ',', '.'); ?></span></p>
            
            <!-- Exibe o resultado obtido pela função max() -->
            <p><strong>Pedido Recorde:</strong> <span class="valor">R$ <?php echo number_format($maior_pedido, 2, ',', '.'); ?></span></p>
        </div>
    </div>

</body>
</html>
