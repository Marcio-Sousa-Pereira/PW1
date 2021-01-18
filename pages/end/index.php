<?php

$pedido = $_POST['produto'];
$valor = $_POST['quantidade'] * $_POST['preco'];
$fp = $_POST['pagamento'];
$endereco = $_POST['endereco'];
$quant = $_POST['quantidade'];
$unitario = $_POST['preco'];

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>end</title>
</head>
<body>
  <div class="container">
    <label>Pedido realizado com sucesso!</label>
    <div class="contentCard">
      <div class="pedido">
        <label>item: <?php echo $pedido ?></label>
      </div>
      <div class="pedido">
        <label>Forma de pagamento: <?php echo $fp ?></label>
      </div>
      <div class="pedido">
        <label>valor unitário: R$ <?php echo $unitario ?></label>
      </div>
      <div class="pedido">
        <label>Quantidade: <?php echo $quant ?></label>
      </div>
      <div class="pedido">
        <label>valor total: R$ <?php echo $valor ?></label>
      </div>
      <div class="pedido">
        <label>Endereco: <?php echo $endereco ?></label>
      </div>
    </div>
  </div>
</body>
</html>