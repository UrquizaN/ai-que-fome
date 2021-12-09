<?php

require_once "./modules/parent/models/Student.php";
require_once "./modules/student/models/CarrinhoSession.php";
require_once "./modules/student/models/ItemCarrinho.php";
require_once "./modules/student/controllers/IControlador.php";

class ControladorListaCarrinho implements IControlador{
    private $carrinho;

    public function __construct(){
        $this->carrinho = new CarrinhoSession();  
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        
        $total = $this->carrinho->getTotal();
        $_SESSION['totalCart'] = $total;

        require "./modules/student/views/Cart.php";
    }

    public function getItems() {
        $order = array();

        $itensCarrinho = $this->carrinho->getItensCarrinho();

        $total = $this->carrinho->getTotal();
        $_SESSION['totalCart'] = $total;

        array_push($order, $itensCarrinho, $total);

        return $order;
    }

    public function order() {
        $student = new Student();
        $studentDAO = new StudentDAO();
        $student = $student->findStudent($_POST['studentId']);

        $studentDAO->debit($student->getStudentId(), $_SESSION['totalCart']);
        $total = $student->getBalance() - $_SESSION['totalCart'];
        $student->setBalance($total);

        $_SESSION['balance'] = $student->getBalance() ;
    }

    public function back(){
        $this->carrinho->clear();

        $_SESSION['totalCart'] = "0";

        header("Location: cardapio", true, 302);
    }
}
?>