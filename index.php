<?php
	session_start();
	if (isset($_GET['url'])) {
		$url =  strtoupper($_GET['url']);
		switch ($url){
			case "LOGIN":
				require "./modules/login/views/index.php";
				break;
			case "LOGIN-VALIDATION":
				require "./modules/login/controllers/LoginController.php";
				$controller = new LoginController();
				$controller->login();
				break;
			case "CADASTRAR":
				require("./modules/register/views/index.php");
				break;
			case "REGISTER-SCHOOL":
				require "./modules/register/controllers/RegisterController.php";
				$controller = new RegisterController();
				$controller->createSchool();
				break;
			case "DASHBOARD":
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$controller->getProducts();
				break;
			case "CADASTRAR-PRODUTO":
				require "./modules/canteen/views/RegisterProduct.php";
				break;
			case "REGISTER-PRODUCT":
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$controller->createProduct();
				break;
			case "EDITAR-PRODUTO":
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$product = $controller->findProduct();
				require "./modules/canteen/views/EditProduct.php";
				break;
			case "UPDATE-PRODUCT":
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$controller->updateProduct();
				break;
			case "DELETE-PRODUCT":
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$controller->deleteProduct();
				break;
			case "CADASTRAR-RESPONSAVEL":
				require "./modules/canteen/views/RegisterParent.php";
				break;
			case "REGISTER-PARENT":
				require "./modules/canteen/controllers/RegisterParentController.php";
				$controller = new RegisterParentController();
				$controller->createParent();
				break;
			case "CARDAPIO":
				require "./modules/canteen/views/RegisterParent.php";
				break;
			case "PAINEL-PAIS":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$students = $controller->getStudents();
      	require "./modules/parent/views/index.php";
				break;
			case "CADASTRAR-ALUNO":
				require "./modules/parent/views/StudentRegister.php";
				break;
			case "REGISTER-STUDENT":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$controller->createStudent();
				break;
			case "EDITAR-ALUNO":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$student = $controller->findStudent();
				require("./modules/parent/views/EditStudent.php");
				break;
			case "UPDATE-STUDENT":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$controller->updateStudent();
				break;
			case "DEPOSITAR":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$student = $controller->findStudent();
				require "./modules/parent/views/Deposit.php";
				break;
			case "DEPOSIT":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$controller->deposit();
				header("Location: painel-pais");
				break;
			case "REMOVE-STUDENT":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$controller->deleteStudent();
				break;
			default:
				require "./home.php";
				break;
		}
	}
	else                     
		$url = '404.php';
?>
	