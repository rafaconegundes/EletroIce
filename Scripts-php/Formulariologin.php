<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormLogin.css">
    <title>Eletro Ice | LOGIN</title>
</head>

<?php
require_once("Logar.php");


$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($formData['login'])){
    $createUser = new Usuarios();   
    $createUser->formData = $formData;
    $result = $createUser->logar();
}
?>
<body>
   
   <header>
   <img src="../Imagens/Captura_de_tela_2023-06-21_135752-removebg-preview (3).png" style="width: 280px;" alt="">
   </header>
   <div class="container">
       <div class="form-image">
          <img src="../Imagens/gif/giphy-47.gif">
       </div>
       
       
       <div class="form">
           <div class="box">
               <div class="form-header">
                   <div class="title">
                       <h1>LOGIN</h1>
                   </div>
                   <div>
                       <div class="cadastro-button">
                           <a href="FormularioCadastro.php">CADASTRE-SE</a>
                       </div>
                   </div>
                  
                   
               </div>
               
                   <div class="form-login">
                       <form  name="login" method="post" action="">
                           <label>E-mail</label>
                           <input type="email" name="email" placeholder="E-mail:" required><br><br>
                           <label>Senha</label>
                           <input type="password" name="senha" placeholder="Senha:" required >
                             <div class="button-login">
                             <input type="submit" value="entrar" name="login">
                            <a href="index.php"><input type="button" value="Voltar" ></a>
    
                             </div>
                       </form> 
                   
                   </div>        
</div>
       </div>
   </div>

</body>

</html>
