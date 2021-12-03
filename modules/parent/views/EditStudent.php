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
          <div class="row justify-content-center">

            <!-- Product Register Form -->
            <div class="col-xl-5 col-md-8 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Editar Aluno</h1>
                    </div>

                    <form action="update-student" method="post" class="row w-100 justify-content-center">
                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="studentId" placeholder="Matrícula do aluno" value="<?php echo $student->getStudentId() ?>" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="class" placeholder="Turma do aluno" value="<?php echo $student->getClass() ?>" required>
                      </div>

                      <div class="form-group p-0">
                        <select name="shift" class="form-control" required>
                          <option>Selecione um turno...</option>
                          <option value="1" <?php if ($student->getShift() == '1') {?> selected <?php } ?>>Matutino</option>
                          <option value="2" <?php if ($student->getShift() == '2') {?> selected <?php } ?>>Verspertino</option>
                          <option value="3" <?php if ($student->getShift() == '3') {?> selected <?php } ?>>Noturno</option>
                        </select>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="name" placeholder="Nome do aluno" value="<?php echo $student->getName() ?>" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="tel" class="form-control" name="phone" placeholder="Telefone" value="<?php echo $student->getPhone() ?>" >
                      </div>

                      <div class="form-group p-0">
                        <input type="email" class="form-control" name="email" placeholder="Email do aluno" value="<?php echo $student->getEmail() ?>" required>
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

            <?php require './modules/parent/components/Footer.php'; ?>


          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

</body>

</html>