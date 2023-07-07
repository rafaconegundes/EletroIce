<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormCad.css">
    <title>CADASTRAR</title>
</head>

<body>
  <?php
  require_once("Usergeladeira.php");
  require_once("Listgeladeira.php");
  
  $formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  if(!empty($formData['addUser'])){
    if (!empty($id)) {
  
      //Instanciar a classe e criar o objeto
      $viewUser = new Geladeira();
  
      //Enviando o id para o atributo id da classe User
      $viewUser->id = $id;
  
      $valueUser = $viewUser->view();
  
      extract($valueUser);
  }
      @$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      $createUser = new Geladeira();
      $createUser->formData = $formData;
      $listUsers = new ListUsers();
      $result_users = $listUsers->list();
  
}

          $result = $createUser->create();
          if($result){
            echo "cadastrado com sucesso!";
        }
        else{
            echo "não cadastrado";
        }

  ?>
  
  <header>
        <img src="../Imagens/Captura_de_tela_2023-06-21_135752-removebg-preview (3).png" style="width: 300px;" alt="">
    </header>
    <div class="container">
        <div class="form-image">
            <div class="sliders">
                <div class="slides">
                    <!--RadioButton-->

                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="../Imagens/imagens-slides1/geladeira-samsung-inox.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="../Imagens/imagens-slides1/geladeira-brastemp-bro85ak-frontal-1.webp"alt="">
                    </div>
                    <div class="slide">
                        <img src="../Imagens/imagens-slides1/aed49813-e84e-4b09-8820-462e0ada89a9.webp"alt="">
                    </div>
                    <div class="slide">
                        <img src="../Imagens/imagens-slides1/6698010162_1.webp"alt="">
                    </div>
                </div>

                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </div>

        <div class="form">
            <div class="box">
                <div class="form-header">
                    <div class="title">
                        <h1>Formulário de Cadastro</h1>
                    </div>

                    <div class="login-button">
                        <a href="index.php">SAIR</a>
                    </div>
                </div>
                <div>
                <div class="table-linha">
                        <div class ="input-box1">
                            <label>Marca</label>
                            <input type="text" placeholder="Digite a marca" name="marca">
                        </div>
                            <div class="input-box1">
                                <label>Modelo</label>
                                <input type="text" placeholder="Digite o modelo" name="modelo">
                            </div>
                            <div class="input-box1">
                                <label>Quantidade</label>
                                <input type="text" placeholder="Digite a quantidade" name="quantidade">
                            </div>
                        </div>
                        <br>
                            <div class="table-linha">
                                <div class="input-grupo">
                                    <form name="createUser" method="POST" action="">
                                        <div class="input-box">
                                            <label>cor</label>
                                                <select name="cor" required>
                                                    <option value="null">Selecione a Opção</option>
                                                    <option value="Branco">Branco</option>
                                                    <option value="Preto">Preto</option>
                                                    <option value="Cinza">Cinza</option>
                                                    <option value="Inox">Inox</option>
                                                </select>
                                        </div>
                                
                                            <div class="input-box">
                                                <label>material</label>
                                                <select name="material" required>
                                                    <option value="null">Selecione a Opção</option>
                                                    <option value="Aluminio">Aluminio</option>
                                                    <option value="Inox">Inox</option>
                                                    <option value="Aço">Aço</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <label>portas</label>
                                                <select name="portas" required>
                                                    <option value="null">Selecione a Opção</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                
                                </div>
                            </div>

                        <div class="cad-button">  <a href="formulariofreezer.php"><button class="cad" type="submit" value="Cadastrar" name="addUser">CADASTRAR</button></a>
                          
                        </div>
                    
                </div>
            </div>
            <script src="script-slides.js"></script>
</body>
</html>