<?php require "./modules/canteen/components/Header.php" ?>

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
                          <option value="1">Comida</option>
                          <option value="2">Bebida</option>
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

          <?php require_once "./modules/canteen/components/Footer.php" ?>

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

</body>

</html>