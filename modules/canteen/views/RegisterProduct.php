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

  <?php require_once "./modules/canteen/components/Sidebar.php" ?>

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
                      <h1 class="h4 text-gray-900 mb-4">Cadastro de Produto</h1>
                    </div>

                    <form action="register-product" method="POST" class="row w-100 justify-content-center">
                      <div class="form-group p-0">
                        <select name="category" class="form-control">
                          <option value="0">Selecione uma categoria...</option>
                          <option value="1">Bebida</option>
                          <option value="2">Comida</option>
                        </select>
                      </div>

                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="code" placeholder="Código do produto" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="name" placeholder="Nome do produto"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="ingredients"
                          placeholder="Ingredientes do produto">
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="image"
                          placeholder="URL da imagem do produto">
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="price" maxlength="10"
                          placeholder="Valor do produto" required>
                      </div>

                      <hr>

                      <button class="btn btn-primary btn-block" type="submit">
                        Cadastrar
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Ai Que Fome 2021</span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

</body>

</html>