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
          <div class="row justify-content-center">

            <!-- Product Register Form -->
            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Editar dados do responsável</h1>
                    </div>

                    <form action="update-parent" method="post" class="row w-100 justify-content-center">
                      <input type="hidden" name="id" value="<?php echo $parents->getId(); ?>">
                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="name" placeholder="Nome do responsável"
                          value="<?php echo $parents->getName(); ?>" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="document" value="<?php echo $parents->getDocument(); ?>" placeholder="CPF"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <input type="tel" class="form-control" name="phone" value="<?php echo $parents->getPhone(); ?>"
                          placeholder="Telefone" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="email" class="form-control" name="email" value="<?php echo $parents->getEmail(); ?>"
                          placeholder="E-mail" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="login" value="<?php echo $parents->getLogin(); ?>" placeholder="Login"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <input type="password" class="form-control" name="password" value="<?php echo $parents->getPassword(); ?>" placeholder="Senha"
                          required>
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