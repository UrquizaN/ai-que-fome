<?php require "./modules/student/components/Header.php" ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="d-flex flex-column align-items-center overflow-hidden position-relative">
            <div class="d-flex flex-row align-items-center card shadow px-4 w-100">
              <a href="logout" class="d-flex btn btn-primary btn-icon-split align-items-center p-r2">
                <span class="icon text-white-50">
                  <i class="fas fa-sign-out-alt"></i>
                </span>
                Sair
              </a>
              <div class="userData">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION['user']; ?></h1>
                <h1 class="h3 mb-4 text-gray-800">Saldo: R$ <?php echo $_SESSION['balance']; ?> </h1>
              </div>

              <a href="carrinho" class="bg-primary text-white position-absolute rounded px-2 py-2 m-2 end-0 top-0">
                <span class="icon text-white-50 mx-1 ">
                  <i class="fas fa-shopping-cart"></i>
                </span>R$ 
                <?php
                if (isset($_SESSION['totalCart'])) {
                  echo $_SESSION['totalCart'];
                } else {
                  echo "0";
                }
                ?>
              </a>
            </div>
            <div class="text">
              <h1 class="font-weight-bold text-primary">Comidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <?php $foods = $products[0];
              if (!$foods) { ?><h2>Nenhuma comida cadastrada...</h2><?php } ?>
              <?php $foods = $products[0];
              foreach ($foods as $food)
                if ($food->getCategory() == "1") { ?>
                <li class="card shadow m-2 item-container">
                  <img src="<?php echo $food->getImage(); ?>" class="card-img-top item-image" alt="...">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column h-100">
                      <h5 class="card-title"><?php echo $food->getName(); ?></h5>
                      <p class="card-text"><?php echo $food->getIngredients(); ?></p>
                      <div class="text-left mt-auto">
                        <h1 class="h5 text-gray-900">R$ <?php echo $food->getPrice(); ?></h1>
                      </div>
                    </div>
                    <div>
                      <form action="add-product" method="post">
                        <input type="hidden" name="productId" value="<?php echo $food->getId(); ?>">
                        <button class="btn btn-block btn-success btn-icon-split" type="submit">
                          <span class="icon text-white-50">
                            <i class="fas fa-shopping-cart"></i>
                          </span>
                          <span class="text">Adicionar</span>
                        </button>
                      </form>
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
                <li class="card shadow m-2 item-container">
                  <img src="<?php echo $drink->getImage(); ?>" class="card-img-top item-image" alt="...">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column h-100">
                      <h5 class="card-title"><?php echo $drink->getName(); ?></h5>
                      <p class="card-text"><?php echo $drink->getIngredients(); ?></p>
                      <div class="text-left mt-auto">
                        <h1 class="h5 text-gray-900">R$ <?php echo $drink->getPrice(); ?></h1>
                      </div>
                    </div>
                    <div>
                      <form action="add-product" method="post">
                        <input type="hidden" name="productId" value="<?php echo $drink->getId(); ?>">
                        <button class="btn btn-block btn-success btn-icon-split" type="submit">
                          <span class="icon text-white-50">
                            <i class="fas fa-shopping-cart"></i>
                          </span>
                          <span class="text">Adicionar</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <?php require_once "./modules/student/components/Footer.php" ?>
</body>

</html>