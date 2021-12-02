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
            <div class="col-xl-5 col-md-10 mb-4 mt-5">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row align-items-center justify-content-center">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Cadastro do Aluno</h1>
                    </div>

                    <form action="REGISTER-STUDENT" method="post" class="row w-100 justify-content-center">
                      <div class="form-group p-0">
                        <input class="form-control" type="text" name="studentId" placeholder="Matrícula do aluno" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="class" placeholder="Turma do aluno"
                          required>
                      </div>

                      <div class="form-group p-0">
                        <select name="shift" class="form-control" required>
                          <option value="">Selecione um turno...</option>
                          <option value="1">Matutino</option>
                          <option value="2">Vespertino</option>
                          <option value="3">Matutino</option>
                        </select>
                      </div>

                      <div class="form-group p-0">
                        <input type="text" class="form-control" name="name"
                          placeholder="Nome do aluno" required>
                      </div>

                      <div class="form-group p-0">
                        <input type="tel" class="form-control" name="phone"
                          placeholder="Telefone" >
                      </div>

                      <div class="form-group p-0">
                        <input type="email" class="form-control" name="email"
                          placeholder="Email do aluno" required>
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