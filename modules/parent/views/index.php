<!DOCTYPE html>
<html lang="en">

  <?php include 'modules/parent/components/Header.php'; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require './modules/parent/components/Sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="col-xl-10 col-md-12 d-flex flex-column align-items-center">
            <?php var_dump($students); ?>

            <div class="mb-4 mt-5">
              <div class="card shadow h-100 py-2 my-2 border-left-primary">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">

                    <div>
                      <ul class="mb-0">
                        <li class="d-flex justify-content-between">
                          <p class="mb-0 d-flex align-items-center flex-fill">Maria Eduarda</p>
                          <p class="mb-0 d-flex align-items-center px-5">R$ 250,00</p>
                          <div>
                            <a href="depositar.html" class="btn btn-success btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-dollar-sign"></i>
                              </span>
                              <span class="text">Depositar</span>
                            </a>
                            
                            <a href="editar-aluno.html" class="btn btn-primary btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                              </span>
                              <span class="text">Editar</span>
                            </a>

                            <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                              <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                              </span>
                              <span class="text">Remover</span>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>

              <div class="card shadow h-100 py-2 my-2 border-left-primary">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div>
                      <ul class="mb-0">
                        <li class="d-flex justify-content-between">
                          <p class="mb-0 d-flex align-items-center flex-fill">Daniel</p>
                          <p class="mb-0 d-flex align-items-center px-5">R$ 250,00</p>
                          <div>
                            <a href="depositar.html" class="btn btn-success btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-dollar-sign"></i>
                              </span>
                              <span class="text">Depositar</span>
                            </a>
                            
                            <a href="editar-aluno.html" class="btn btn-primary btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                              </span>
                              <span class="text">Editar</span>
                            </a>

                            <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                              <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                              </span>
                              <span class="text">Remover</span>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="removeModal" tabindex="-1" role="dialog"
          aria-labelledby="removeModal" aria-hidden="true">
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

        <?php require './modules/parent/components/Footer.php'; ?>

</body>

</html>