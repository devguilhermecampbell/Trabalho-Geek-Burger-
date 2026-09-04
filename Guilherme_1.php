<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Geek Burger</title>
</head>
<body>
    <h1>Seja Bem-Vindo ao Burger Geek!</h1>

    <form action="guilherme_2.php" method="POST">

        <p>
            <label>Nome do Cliente:</label><br>
            <input type="text" name="nome">
        </p>

        <p>
            <label>Escolha o Lanche:</label><br>
            <select name="lanche">
                <option value="Combo Jedi">Combo Jedi</option>
                <option value="Combo Hobbit">Combo Hobbit</option>
                <option value="Combo Stark">Combo Stark</option>
            </select>
        </p>

        <p>
            <label>Quantidade:</label><br>
            <input type="number" name="quantidade" value="1" min="1">
        </p>

        <p>
            <label>Valor da Gorjeta (R$):</label><br>
            <input type="text" name="gorjeta" value="0,00">
        </p>

        <p>
            <label>Selecione a Mesa:</label><br>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<input type='radio' name='mesa' value='$i'> Mesa $i ";
            }
            ?>
        </p>

        <input type="hidden" name="fidelidade" value="<?php echo rand(1, 3); ?>">
        
        <button type="submit">Enviar Pedido</button>

    </form>
</body>
</html>