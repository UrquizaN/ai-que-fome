<?php require "./modules/canteen/components/Header.php" ?>


<!-- <script>
  function findParent() {
    <?php
    require_once "./modules/canteen/controllers/ParentController.php";
    $controller = new ParentController();
    $parents = $controller->findParent();
    ?>
  }
</script> -->

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

            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Consultar Responsável</h1>
                    </div>

                    <form method="post" action="busca" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="E-mail do responsável" name="parent-email">
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

            <?php
            if (isset($parents) and $parents != false) {
            ?>
              <div class="col-xl-5 col-md-10 mb-4 mt-5">
                <div class="card shadow h-100 py-2 border-left-primary">
                  <div class="card-body">
                    <div class="row align-items-center justify-content-center">
                      <div>
                        <ul class="mb-0">
                          <li class="d-flex justify-content-between">
                            <p class="mb-0 d-flex align-items-center"><?php echo $parents->getName(); ?></p>
                            <div class="d-flex align-items-center">
                              <form action="editar-pai" method="post" class="m-0 mx-1">
                                <input type="hidden" name="parent-email" value="<?php echo $parents->getEmail(); ?>" />
                                <button class="btn btn-block my-1 btn-primary btn-icon-split">
                                  <span class="icon text-white-50 d-flex align-items-center">
                                    <i class="fas fa-pen"></i>
                                  </span>
                                  <span class="text">Editar</span>
                                </button>
                              </form>

                              <form action="delete-parent" method="post" class="m-0" onsubmit="return confirm('Deseja realmente excluir o responsável <?php echo $parents->getName(); ?>?');">
                                <input type="hidden" name="id" value="<?php echo $parents->getId(); ?>">

                                <button type="submit" class="d-flex btn btn-block my-1 btn-danger btn-icon-split">
                                  <span class="icon text-white-50 d-flex align-items-center">
                                    <i class="fas fa-trash"></i>
                                  </span>
                                  <span class="text">Remover</span>
                                </button>
                              </form>
                            </div>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            <?php

            }
            ?>

            <?php
            if (isset($parents) and $parents == false) {
            ?>
              <h1>Responsável não encontrado</h1>
            <?php

            }
            ?>

          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="removeModal">Confirmação de exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Você realmente deseja excluir?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                  <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                  </span>
                  <span class="text">Remover</span>
                </a>
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

</body>

</html>