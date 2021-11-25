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
				require "./modules/canteen/views/index.php";
				break;
			case "CADASTRAR-PRODUTO":
				require "./modules/canteen/views/RegisterProduct.php";
				break;
			case "REGISTER-PRODUCT":
				require "./modules/product/controllers/RegisterProductController.php";
				$controller = new RegisterProductController();
				$controller->createProduct();
				break;
			default:
				require "./home.php";
				break;
		}
	}
	else                     
		$url = '404.php';
?>
	