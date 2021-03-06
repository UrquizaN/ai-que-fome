<?php require "./modules/canteen/components/Header.php" ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php require "../components/Sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="d-flex flex-column align-items-center">

            <!-- Product Register Form -->
            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Consultar Saldo</h1>
                    </div>

                    <form
                      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Matrícula do aluno" name="student-id" >
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow border-left-primary">
                <div class="card-header py-3">
                  <div class="text-center">
                    <h1 class="h3 m-0 font-weight-bold text-primary">Maria Eduarda</h1>
                  </div>
                </div>
                <div class="text-center">
                  <h1 class="h4 text-gray-900 py-4">R$ 350,00</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

         <!-- Footer -->
         <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Ai Que Fome 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

</body>

</html>