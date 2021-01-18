<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Cardápio</title>
</head>
<body>
  <form action="./pages/cart/index.php" method="POST" class="form">
    <h3>Cardápio</h3>
    <div class="container">
      <div class="divs">
        <div class="img">
          <img src="./assets/pizza.jpg" >
        </div>
        <div class="descricao">
          <label>Preço: R$ 35,00</label>
          <label>Ingredientes: <i>Frango, catupiry, molho de tomate, oregano e cebola</i></label>
        </div>
        <input name="product" type="submit" value="pizza frango com catupiry" class="btn">
      </div>

      <div class="divs">
        <div class="img">
          <img src="./assets/ham.jpg" >
        </div>
        <div class="descricao">
          <label>Preço: R$ 37,00</label>
          <label>Ingredientes: <i>Hamburguer, cheddar, molho de tomate, alface e cebola</i></label>
        </div>
        <input name="product" type="submit" value="Hambuguer" class="btn">
      </div>

      <div class="divs">
        <div class="img">
          <img src="./assets/esfiha.jpg" >
        </div>
        <div class="descricao">
          <label>Preço: R$ 25,00</label>
          <label>Ingredientes: <i>Carne, pimenta, molho de tomate, oregano e tomate seco</i></label>
        </div>
        <input name="product" type="submit" value="Esfiha" class="btn">
      </div>

      <div class="divs">
        <div class="img">
          <img src="./assets/pizza.jpg" >
        </div>
        <div class="descricao">
          <label>Preço: R$ 33,00</label>
          <label>Ingredientes: <i>Frango, catupiry, molho de tomate sem oregano</i></label>
        </div>
        <input name="product" type="submit" value="pizza frango com catupiry" class="btn">
      </div>

    </div>
  </form>
</body>
</html>