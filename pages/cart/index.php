<?php 

const produto1 = ['pizza frango com catupiry', 35];
const produto2 = ['Hambuguer', 37];
const produto3 = ['Esfiha', 25];
const produto4 = ['pizza frango com catupiry', 33];

$product = $_POST['product'];

    $itemData = array();

    if ($product == produto1[0]) {
        $itemData = produto1;
    }

    if ($product == produto2[0]) {
        $itemData = produto2;
    }

    if ($product == produto3[0]) {
        $itemData = produto3;
    }

    if ($product == produto4[0]) {
        $itemData = produto4;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
</head>
<body>
  <form action="../end/index.php" method="POST">
    <div class="container">
      <label>Produto:</label>
      <input type="text" name="product" disabled value="<?php print $itemData[0]; ?>">
      <input type="hidden" name="preco" value="<?php print $itemData[1]; ?>">
      <input type="hidden" name="produto" value="<?php print $itemData[0]; ?>">
      <div class="contentPag">
        <div>
          <label>Quantidade:</label>
          <input type="number" name="quantidade">
        </div>
        <div>
          <label class="title">Forma de pagamento:</label>
          <div class="fpagamento">
            <div class="contentRadio">
              <label>Dinheiro</label>
              <input type="radio" class="radio" value="Dinheiro" name="pagamento">
            </div>
            <div class="contentRadio">
              <label class="labelRadio">Cartão</label>
              <input type="radio" class="radio" value="Cartão" name="pagamento">
            </div>
          </div>
        </div>
      </div>
      <label>Endereço:</label>
      <input type="text" name="endereco">
      <input type="submit" value="confirmar pedido" class="btn">
    </div>
  </form>
</body>
</html>