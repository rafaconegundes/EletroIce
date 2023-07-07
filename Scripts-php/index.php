<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<script src="script.js"></script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eletro Ice</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <header>
    <nav class="nav-bar">
      <img class="logo" style=" height: 60px;"
        src="../Imagens/Captura_de_tela_2023-06-21_135752-removebg-preview (3).png" alt="">

      <div class="nav-list">
        <ul>
          <li class="nav-item"><a href="index.php?pagina=Cadatrar">CADASTRAR PRODUTOS</a></li>
          <li class="nav-item"><a href="index.php?pagina=Editar">EDITAR USUARIOS</a></li>
          <li class="nav-item"><a href="index.php?pagina=Cadastrado">PRODUTOS CADASTRADOS</a></li>
        </ul>
        <div class="login-button">
          <button><a href="Formulariologin.php">LOGIN</a></button>
        </div>
      </div>
      <div class="mobile-menu-icon">
        <button onclick="menuShow()"><img class="icon" src="../Imagens/baseline_menu_white_24dp.png" alt=""></button>
      </div>
    </nav>
    <div class="mobile-menu">
      <ul>
        <li class="nav-item"><a href="index.php?pagina=Cadatrar">PRODUTOS CADASTRADOS</a></li>
        <php>
        if(false){
  header('Location:Formulariologin.php');
  exit();
}
?>
        <li class="nav-item"><a href="index.php?pagina=Editar">EDITAR USUARIOS</a></li>
        <li class="nav-item"><a href="index.php?pagina=Cadastrado">CADASTRAR PRODUTOS</a></li>
      </ul>
      <div class="login-button">
        <button><a href="login.html">LOGIN</a></button>
      </div>
    </div>
  </header>
 <?php
 $troca_pag = @$_GET['pagina'];

 if($troca_pag=='Cadastrar'){
  include('principal.php');
 }
 elseif($troca_pag=='Editar'){
  include('Viewusuarios.php');
 }
 elseif($troca_pag=='Cadastrado'){
  include('Cadastro.php');
  }
 else{
  include('principal.php');
 }
 ?>
</body>

</html>