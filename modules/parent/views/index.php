<!DOCTYPE html>
<html lang="en">

<?php include 'modules/parent/components/Header.php'; ?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require './modules/parent/components/Sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column vh-100">
      <!-- Main Content -->

      <!-- Begin Page Content -->
      <div class="container-fluid h-100">

        <!-- Content Row -->
        <div class="col-xl-10 col-md-12 d-flex flex-column align-items-center">
          <ul class="mb-4 mt-5">
            <?php if (!$students) { ?><h2>Nenhuma aluno cadastrado...</h2><?php } ?>

            <?php foreach ($students as $student) { ?>
              <li class="card shadow h-100 py-2 my-2 border-left-primary">
                <div class="mb-0">
                  <div class="card-body">
                    <div class="row align-items-center justify-content-center">
                      <div>
                        <div class="d-flex justify-content-between">
                          <p class="mb-0 d-flex align-items-center flex-fill"><?php echo $student->getName() ?></p>
                          <p class="mb-0 d-flex align-items-center px-5">R$ <?php echo $student->getBalance() ?></p>
                          <div class="d-flex">
                            <form action="depositar" method="post">
                              <input type="hidden" name="studentId" value="<?php echo $student->getStudentId() ?>">
                              <button type="submit" class="btn btn-success btn-icon-split mx-1">
                                <span class="icon text-white-50">
                                  <i class="fas fa-dollar-sign"></i>
                                </span>
                                <span class="text">Depositar</span>
                              </button>
                            </form>

                            <form action="editar-aluno" method="post" class="d-flex justify-content-between">
                              <input type="hidden" name="studentId" value="<?php echo $student->getStudentId() ?>">
                              <button type="submit" class="btn btn-primary btn-icon-split mx-1">
                                <span class="icon text-white-50">
                                  <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Editar</span>
                              </button>
                            </form>

                            <form action="remove-student" method="post" onsubmit="return confirm('Deseja realmente excluir o aluno <?php echo $student->getName(); ?>?');">
                              <input type="hidden" name="studentId" value="<?php echo $student->getStudentId() ?>">
                              <button type="submit" class="btn btn-danger btn-icon-split mx-1">

                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Remover</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>

        </div>
        <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <?php require './modules/parent/components/Footer.php'; ?>
    </div>
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
            Você realmente deseja excluir? <?php echo $_SESSION['studentToDelete'] ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

            <form action="remove-student" method="post">
              <input type="hidden" name="studentToDelete" value="<?php echo $_SESSION['studentToDelete'] ?>">
              <button type="submit" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Remover</span>
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>