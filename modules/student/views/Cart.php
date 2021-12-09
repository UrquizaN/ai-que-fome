<?php require "./modules/student/components/Header.php" ?>

<script>
  function validation() {
    <?php
    if ($carrinho->getTotal() > $_SESSION['balance']) { ?>
      alert("Saldo insuficiente");
      return false;
    <?php } ?>
  }
</script>
</head>

<div class="d-flex justify-content-between py-4 bg-white px-5">
  <h2>Carrinho</h2>
  <a href="cardapio" class="btn my-1 btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Voltar</span>
  </a>
</div>
<div class="container">
  <div class="table table-striped">
    <div class="cartTableHeader  w-100">
      <span>Código</span>
      <span>Nome</span>
      <span>Preço</span>
      <span>Quantidade</span>
      <span>Total</span>
    </div>
    <ul class="cartList">
      <?php foreach ($itensCarrinho as $item) : ?>
        <li>
          <span><?php echo $item->getProduct()->getId(); ?></span>
          <span><?php echo $item->getProduct()->getName(); ?></span>

          <span>R$ <?php echo number_format($item->getProduct()->getPrice(), 2, ',', '.'); ?></span>
          <span>
            <form action="CarrinhoAltQuant" method="post">
              <input type="hidden" name="productId" value="<?php echo $item->getProduct()->getId(); ?>">
              <input type="text" name="amount" value="<?php echo $item->getQuantity(); ?>" size="2">
              <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
            </form>
          </span>
          <span>R$ <?php echo number_format($item->getSubTotal(), 2, ',', '.'); ?></span>
          <span>
            <form method="post" action="ApagaItemCarrinho">
              <input type="hidden" name="productId" value="<?php echo $item->getProduct()->getId(); ?>">
              <button type="submit" class="btn my-1 btn-danger btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Remover</span>
              </button>
            </form>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>

  <form class="d-flex my-4 justify-content-between align-items-center" action="make-order" method="post" onsubmit="return validation();">
    <div>
      <b>Total: </b>
      <b>R$ <?php echo number_format($carrinho->getTotal(), 2, ',', '.'); ?></b>
    </div>

    <input type="hidden" name="studentId" value="<?php echo $_SESSION['studentId'] ?>">
    <button class="btn  btn-success btn-icon-split" type="submit">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Realizar pedido</span>
    </button>
  </form>
</div>
</body>

</html>