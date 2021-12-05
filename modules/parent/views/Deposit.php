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
                      <h1 class="h4 text-gray-900 mb-4">Depositar</h1>
                    </div>
                    <form action="deposit" method="post" class="row w-100 justify-content-center">
                      <!-- <div class="form-group p-0">
                        <select name="studentId" class="form-control">
                          <option>Selecione um aluno...</option>
                          <?php
                          foreach ($students as $student) : ?>
                            <option value="<?php $student->getStudentId() ?>"><?php echo $student->getName() ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> -->
                      <input type="hidden" name="studentId" value="<?php echo $student->getStudentId() ?>">

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="name" value="<?php echo $student->getName() ?>" readonly required>
                      </div>
                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="amount" placeholder="Valor" required>
                      </div>

                      <hr>

                      <button class="btn btn-success btn-icon-split" type="submit">
                        <span class="icon text-white-50">
                          <i class="fas fa-dollar-sign"></i>
                        </span>
                        <span class="text">Depositar</span>
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

        <?php require './modules/parent/components/Footer.php'; ?>

</body>

</html>