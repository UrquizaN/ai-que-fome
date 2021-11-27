<?php 
  require "ParentsDAO.php";

  class Parents {
    private $name;
    private $document;
    private $phone;
    private $email;
    private $login;
    private $password;

    public function __construct($name, $document, $phone, $email, $login = null, $password) {
      $this->name = $name;
      $this->document = $document;
      $this->phone = $phone;
      $this->email = $email;
      $this->login = $login;
      $this->password = $password;
    }

    public function getName() {
      return $this->name;
    }

    public function getDocument() {
      return $this->document;
    }

    public function getPhone() {
      return $this->phone;
    }

    public function getEmail() {
      return $this->email;
    }

    public function getLogin() {
      return $this->login;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function setDocument($document) {
      $this->document = $document;
    }

    public function setPhone($phone) {
      $this->phone = $phone;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function setLogin($login) {
      $this->login = $login;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function createParent() {
      $parentDAO = new ParentsDAO();
      $parentDAO->createParent($this);
    }
  }
?>