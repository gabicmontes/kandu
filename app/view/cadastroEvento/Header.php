<?php
    session_start(); 
    if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true)) {
      unset($_SESSION['nome']);
      unset($_SESSION['senha']);
      echo "n existe sessao";
      header('location:login');
  }
  ?>

<div class="py-5" id="header" bgcolor="#fff">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-12">
          <div id="logo">
           <img src="<?php echo DIRIMG ?>/logo.png">
        </div>
      </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
    <a class="navbar-brand" href="feed">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação" id="pesquisar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dados">Dados Pessoais <span class="sr-only">(página atual)</span></a>
        </li>

      <?php
        if($_SESSION['tipo'] == "promotor") {
          echo '<li class="nav-item active">
          <a class="nav-link" href="cadastroevento">Cadastrar Evento <span class="sr-only">(página atual)</span></a>
        </li>';
      } ?>

      </ul>
      Bem, vindo <?php echo $_SESSION['nome'] ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>