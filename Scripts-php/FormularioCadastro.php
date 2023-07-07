
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormCadastroUser.css">
    <title>Eletro Ice | Cadastre-se</title>
</head>
<?php
require_once("Userfuncionarios.php");

// cria um novo usuario e coloca as informações em um array
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($formData['addUser'])){
    
    $createUser = new Usuarios();   
    $createUser->formData = $formData;
    $result = $createUser->create();

    if($result){
        echo "Usuário cadastrado com sucesso!";
    }
    else{
        echo "Usuário não cadastrado";
    }
}
 
?>
<body>
<header>
        <img src="../Imagens/Captura_de_tela_2023-06-21_135752-removebg-preview (3).png" style="width: 280px;" alt="">
    </header>
    <div class="container">
        <div class="form-image">
        <img src="../Imagens/gif/giphy-47.gif" alt="">
        </div>
        <div class="form">
            <div class="box">
                <div class="form-header">
                   <div class="title">
                       <h1>CADASTRE-SE</h1>
                   </div>
                   <div>
                       <div class="sair-button">
                           <a href="Formulariologin.php">SAIR</a>
                       </div>
                   </div>
                  
               </div>
                
                        <div class="form-cadastre">
                            <form  name="createUser"  method="POST" action="">
                                <label>nome completo</label>
                                <input type="text"  name="nome" placeholder="Nome.." required><br><br>
                                <label>e-mail</label>
                                <input type="text"  name="email" placeholder="E-mail.." required><br><br>
                                <label>senha</label>
                                <input type="password" name="senha" placeholder="Senha.." required>
                                <div class="cad-button"><input class="SUBMIT-BUTTON" type="submit" value="Cadastrar" name="addUser" ><a href="Formulariologin.php"></a></div>
                            </div>
                        </div>
            </div>
        </div>

</body>

</html> 