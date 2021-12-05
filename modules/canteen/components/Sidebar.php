  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" href="index.html">
      <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div> -->
      <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['user'] ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="dashboard">
        <i class="fas fa-fw fa-utensils"></i>
        <span>Cardápio</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- <div class="sidebar-heading">
      Consulta
    </div>

    <li class="nav-item">
      <a class="nav-link" href="../views/Balance.php">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Saldo</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="../views/FindParent.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Responsável</span></a>
    </li>

    <hr class="sidebar-divider"> -->

    <div class="sidebar-heading">
      Cadastro
    </div>

    <li class="nav-item">
      <a class="nav-link" href="cadastrar-produto">
        <i class="fas fa-fw fa-utensils-alt"></i>
        <span>Produtos</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="cadastrar-responsavel">
        <i class="fas fa-fw fa-user"></i>
        <span>Responsável</span></a>
    </li>
  </ul>
  <!-- End of Sidebar -->  