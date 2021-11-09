<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/styles.css" rel="stylesheet">

  <script>
    function registerValidation() {
      var password = document.getElementById("password").value;
      var passwordConfirmation = document.getElementById("passwordConfirmation").value;

      if (password != passwordConfirmation) {
        alert("As senhas não são iguais");
        return false;
      }
      alert("Cadastro realizado com sucesso!");
      return true;
    }

  </script>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Ai Que Fome!</h1>
                  </div>
                  <form class="user" method="post" action="../controllers/index.php" onsubmit="return registerValidation()">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="name" name="name"
                        aria-describedby="emailHelp" placeholder="Nome da escola" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="address" name="address"
                        placeholder="Endereço" required>
                    </div>
                    <div class="form-group">
                      <input type="cnpj" class="form-control form-control-user" id="cnpj" name="cnpj"
                        placeholder="CNPJ" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Digite o seu email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password"
                        placeholder="Digite sua senha" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="passwordConfirmation" name="passwordConfirmation"
                        placeholder="Confirme sua senha" required>
                    </div>

                    <hr>

                    <button class="btn btn-primary btn-user btn-block" type="submit">
                      Cadastrar
                    </button>
                  </form>
                  <hr>

                  <div class="text-center">
                    <a class="small" href="../../login/views/index.php">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>