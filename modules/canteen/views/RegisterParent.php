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
                      <h1 class="h4 text-gray-900 mb-4">Cadastro de Responsável</h1>
                    </div>

                    <form action="register-parent" method="post" class="row w-100 justify-content-center">
                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="name" placeholder="Nome do responsável" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="document" placeholder="CPF"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <input type="tel" class="form-control" name="phone"
                          placeholder="Telefone" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="email" class="form-control" name="email"
                          placeholder="E-mail" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="login"
                          placeholder="Login" >
                      </div>

                      <div class="form-group p-0">
                        <input type="password" class="form-control" name="password"
                          placeholder="Senha" required>
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

           

          </div>
          <!-- End of Content Wrapper -->

           

        </div>
        <!-- End of Page Wrapper -->
        
      <?php require_once "./modules/canteen/components/Footer.php" ?>

</body>

</html>