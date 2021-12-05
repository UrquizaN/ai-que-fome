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

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
          <div class="row justify-content-center">

            <!-- Product Register Form -->
            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Editar Produto</h1>
                    </div>

                    <form action="update-product" method="post" class="row w-100 justify-content-center">
                      <input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
                      
                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="code" placeholder="Código do produto" value="<?php echo $product->getCode() ?>" readonly required>
                      </div>

                      <div class="form-group p-0">
                        <select name="category" class="form-control" required>
                          <option>Selecione uma categoria...</option>
                          <option value="1" <?php if ($product->getCategory() == '1') {?> selected <?php } ?>>Comida</option>
                          <option value="2" <?php if ($product->getCategory() == '2') {?> selected <?php } ?>>Bebida</option>
                        </select>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="name" placeholder="Nome do produto" value="<?php echo $product->getName() ?>"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="ingredients"
                          placeholder="Ingredientes do produto" value="<?php echo $product->getIngredients() ?>" >
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="image"
                          placeholder="URL da imagem do produto" value="<?php echo $product->getImage() ?>" >
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="price" maxlength="10"
                          placeholder="Valor do produto" value="<?php echo $product->getPrice() ?>" required>
                      </div>

                      <hr>

                      <button class="btn btn-success btn-icon-split" type="submit">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Salvar</span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <?php require "./modules/canteen/components/Footer.php" ?>            

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

</body>

</html>