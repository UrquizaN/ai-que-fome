<?php 
  require "ParentsDAO.php";

  class Parents {
    private $id;
    private $name;
    private $document;
    private $phone;
    private $email;
    private $login;
    private $password;
    private $userType;

    public function __construct($id = null, $name = '', $document = null, $phone = null, $email = '', $login = null, $password = null, $userType = '2') {
      $this->id = $id;
      $this->name = $name;
      $this->document = $document;
      $this->phone = $phone;
      $this->email = $email;
      $this->login = $login;
      $this->password = $password;
      $this->$userType = $userType;
    }

    public function getId() {
      return $this->id;
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

    public function getUserType() {
      return $this->userType;
    }

    public function setId($id) {
      $this->id = $id;
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

    public function setUserType($userType) {
      $this->userType = $userType;
    }

    public function createParent() {
      $parentDAO = new ParentsDAO();
      $parentDAO->createParent($this);
    }

    public function updateParent() {
      $parentDAO = new ParentsDAO();
      $parentDAO->updateParent($this);
    }

    public function deleteParent() {
      $parentDAO = new ParentsDAO();
      $parentDAO->deleteParent($this);
    }

    public function findParent($parentEmail) {
      $parentDAO = new ParentsDAO();
      return $parentDAO->findParent($parentEmail);
    }
  }
?>