<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro de Produtos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/styles.css" rel="stylesheet">

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
          <div class="col d-flex flex-column align-items-center">

            <div class="text">
              <h1 class="font-weight-bold text-primary">Comidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <div class="text">
              <h1 class="font-weight-bold text-primary">Bebidas</h1>
            </div>
            <ul class="d-flex menu-container">
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="card shadow m-4 item-container">
                <img
                  src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                  class="card-img-top item-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sanduiche</h5>
                  <p class="card-text">Ingredientes.</p>
                  <div class="text-left">
                    <h1 class="h5 text-gray-900">R$ 5,00</h1>
                  </div>
                  <div>
                    <a href="editar-produto.html" class="btn btn-block my-1 btn-block btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-danger btn-icon-split" data-toggle="modal" data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Remover</span>
                    </a>

                    <a href="#" class="btn btn-block my-1 btn-secondary btn-icon-split" data-toggle="modal"
                      data-target="#removeModal">
                      <span class="icon text-white-50">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span class="text">Bloquear</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModal"
          aria-hidden="true">
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