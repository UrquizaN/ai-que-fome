<?php require "./modules/student/components/Header.php" ?>

</head>

<body>
  <div class="d-flex flex-row align-items-center card shadow px-4 w-100">
    <a href="logout" class="d-flex btn btn-primary btn-icon-split" type="submit">
      <span class="icon text-white-50">
        <i class="fas fa-sign-out-alt"></i>
      </span>
      <span class="text">Sair</span>
    </a>
    <div class="userDataOrder">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION['user']; ?></h1>
      <h1 class="h3 mb-4 text-gray-800">Saldo: R$ <?php echo $_SESSION['balance']; ?> </h1>
    </div>
    <a href="back" class="btn my-1 btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
      </span>
      <span class="text">Voltar</span>
    </a>
  </div>

  <div class="orderContainer">
    <div class="orderContent">
      <h1 class="text-center mb-4">Pedido</h1>
      <div class="orderHeader">
        <span>Itens</span>
        <span>Quantidade</span>
        <span>Valor</span>
      </div>
      <ul class="text-red">
        <?php
        $items = $order[0];
        $total = $order[1];

        foreach ($items as $item) : ?>
          <li>
            <span><?php echo $item->getProduct()->getName() ?></span>
            <span><?php echo $item->getQuantity()  ?></span>
            <span>R$ <?php echo $item->getProduct()->getPrice() * $item->getQuantity() ?></span>
          </li>

        <?php endforeach; ?>
      </ul>
      <div class="d-flex justify-content-between h5">
        <span>Valor total: </span>
        <span>R$ <?php echo $total ?></span>
      </div>
    </div>
  </div>
</body>

</html>