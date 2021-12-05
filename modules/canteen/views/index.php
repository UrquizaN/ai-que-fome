<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro de Produtos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./css/styles.css" rel="stylesheet">

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
              <?php if(!$foods) {?><h2>Nenhuma comida cadastrada...</h2><?php } ?>
              <?php forEach($foods as $food)

              if($food->getCategory() == "1"){ ?>
                <li class="card shadow m-4 item-container">
                  <img
                    src="<?php echo $food->getImage() ?>"
                    class="card-img-top item-image" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $food->getName() ?></h5>
                    <p class="card-text"><?php echo $food->getIngredients() ?></p>
                    <div class="text-left">
                      <h1 class="h5 text-gray-900">R$ <?php echo $food->getPrice() ?></h1>
                    </div>
                    <div>
                      <form action="edit-product" method="post">
                        <input type="hidden" name="code" value="<?php echo $food->getCode() ?>" />
                        <button class="btn btn-block my-1 btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                          </span>
                          <span class="text">Editar</span>
                        </button>
                      </form>

                      <form action="delete-product" method="post" onsubmit="return confirm('Deseja realmente excluir o produto <?php echo $food->getName(); ?>?');">
                        <input type="hidden" name="id" value="<?php echo $food->getId() ?>">
                        
                        <button type="submit" class="btn btn-block my-1 btn-danger btn-icon-split" >
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

            <div class="text">
              <h1 class="font-weight-bold text-primary">Bebidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <?php if(!$drinks) {?><h2>Nenhuma bebida cadastrada...</h2><?php } ?>
              <?php forEach($drinks as $drink)
              if($drink->getCategory() == "2"){ ?>
                <li class="card shadow m-4 item-container">
                  <img
                    src="<?php echo $drink->getImage() ?>"
                    class="card-img-top item-image" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $drink->getName() ?></h5>
                    <p class="card-text"><?php echo $drink->getIngredients() ?></p>
                    <div class="text-left">
                      <h1 class="h5 text-gray-900">R$ <?php echo $drink->getPrice() ?></h1>
                    </div>
                    <div>
                      <form action="edit-product" method="post">
                        <input type="hidden" name="code" value="<?php echo $drink->getCode() ?>">
                        <button type="submit" class="btn btn-block my-1 btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                          </span>
                          <span class="text">Editar</span>
                        </button>
                      </form>

                      <form action="delete-product" method="post" onsubmit="return confirm('Deseja realmente excluir o produto <?php echo $drink->getName(); ?>?');">
                        <input type="hidden" name="id" value="<?php echo $drink->getId() ?>">
                        
                        <button type="submit" class="btn btn-block my-1 btn-danger btn-icon-split" >
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