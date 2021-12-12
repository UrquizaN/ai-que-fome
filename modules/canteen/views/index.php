<?php require "./modules/canteen/components/Header.php" ?>

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require "./modules/canteen/components/Sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="col d-flex flex-column align-items-center">

            <div class="text">
              <h1 class="font-weight-bold text-primary">Comidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <?php $foods = $products[0];
              if (!$foods) { ?><h2>Nenhuma comida cadastrada...</h2><?php } ?>
              <?php $foods = $products[0];
              foreach ($foods as $food)

                if ($food->getCategory() == "1") { ?>
                <li class="card shadow m-4 item-container">
                  <img src="<?php echo $food->getImage() ?>" class="card-img-top item-image" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $food->getName() ?></h5>
                    <p class="card-text"><?php echo $food->getIngredients() ?></p>
                    <div class="text-left">
                      <h1 class="h5 text-gray-900">R$ <?php echo $food->getPrice() ?></h1>
                    </div>
                    <div>
                      <form action="editar-produto" method="post">
                        <input type="hidden" name="id" value="<?php echo $food->getId() ?>" />
                        <button class="btn btn-block my-1 btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                          </span>
                          <span class="text">Editar</span>
                        </button>
                      </form>

                      <form action="delete-product" method="post" onsubmit="return confirm('Deseja realmente excluir o produto <?php echo $food->getName(); ?>?');">
                        <input type="hidden" name="id" value="<?php echo $food->getId() ?>">

                        <button type="submit" class="btn btn-block my-1 btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                          </span>
                          <span class="text">Remover</span>
                        </button>
                      </form>

                      <!-- <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                        data-target="#removeModal">
                        <span class="icon text-white-50">
                          <i class="fas fa-ban"></i>
                        </span>
                        <span class="text">Bloquear</span>
                      </a> -->
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>

            <div class="text">
              <h1 class="font-weight-bold text-primary">Bebidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <?php $drinks = $products[1];
              if (!$drinks) { ?><h2>Nenhuma bebida cadastrada...</h2><?php } ?>
              <?php $drinks = $products[1];
              foreach ($drinks as $drink)
                if ($drink->getCategory() == "2") { ?>
                <li class="card shadow m-4 item-container">
                  <img src="<?php echo $drink->getImage() ?>" class="card-img-top item-image" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $drink->getName() ?></h5>
                    <p class="card-text"><?php echo $drink->getIngredients() ?></p>
                    <div class="text-left">
                      <h1 class="h5 text-gray-900">R$ <?php echo $drink->getPrice() ?></h1>
                    </div>
                    <div>
                      <form action="editar-produto" method="post">
                        <input type="hidden" name="id" value="<?php echo $drink->getId() ?>">
                        <button type="submit" class="btn btn-block my-1 btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                          </span>
                          <span class="text">Editar</span>
                        </button>
                      </form>

                      <form action="delete-product" method="post" onsubmit="return confirm('Deseja realmente excluir o produto <?php echo $drink->getName(); ?>?');">
                        <input type="hidden" name="id" value="<?php echo $drink->getId() ?>">

                        <button type="submit" class="btn btn-block my-1 btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                          </span>
                          <span class="text">Remover</span>
                          </a>
                      </form>

                      <!-- <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                        data-target="#removeModal">
                        <span class="icon text-white-50">
                          <i class="fas fa-ban"></i>
                        </span>
                        <span class="text">Bloquear</span>
                      </a> -->
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>

          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <?php require_once "./modules/canteen/components/Footer.php" ?>

</body>

</html>