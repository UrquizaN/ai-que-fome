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
			case "LOGOUT":
				require "./modules/login/controllers/LoginController.php";
				$controller = new LoginController();
				$controller->logout();
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
				$products = $controller->getProducts();
				require "./modules/canteen/views/index.php";
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
				require "./modules/canteen/controllers/ProductController.php";
				$controller = new ProductController();
				$products = $controller->getProducts();
				require "./modules/student/views/index.php";
				break;
			case "PAINEL-PAIS":
				require "./modules/parent/controllers/StudentsController.php";
				$controller = new StudentsController();
				$students = $controller->findStudentsByParent();
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
			case "ADD-PRODUCT":
				require "./modules/student/controllers/ControladorAddItemCarrinho.php";
				require_once './modules/student/models/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorAddItemCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "CARRINHO":
				require "./modules/student/controllers/ControladorListaCarrinho.php";
				$controlador = new ControladorListaCarrinho();
				$controlador->processaRequisicao();
				break;
			case "CARRINHOALTQUANT":
				require "./modules/student/controllers/ControladorAlteraQuantCarrinho.php";
				require_once './modules/student/models/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorAlteraQuantCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "APAGAITEMCARRINHO":
				require "./modules/student/controllers/ControladorApagaItemCarrinho.php";
				require_once './modules/student/models/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorApagaItemCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "MAKE-ORDER":
				require_once "./modules/student/controllers/ControladorListaCarrinho.php";
				$controlador = new ControladorListaCarrinho();
				$controlador->order();
				header("Location: pedido", true, 301);
				break;
			case "PEDIDO":
				require_once "./modules/student/controllers/ControladorListaCarrinho.php";
				$controlador = new ControladorListaCarrinho();
				$order = $controlador->getItems();
				require "./modules/student/views/Order.php";
				break;
			case "BACK":
				require_once "./modules/student/controllers/ControladorListaCarrinho.php";
				$controlador = new ControladorListaCarrinho();
				$order = $controlador->back();
				break;
			default:
				require "./home.php";
				break;
		}
	}
	else                     
		$url = '404.php';
?>
	