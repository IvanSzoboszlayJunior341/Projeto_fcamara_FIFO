<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senhaconf']) && !empty($_POST['senhaconf']) && isset($_POST['apelido']) && !empty($_POST['apelido'])){
  
    $user = new \_api\Classes\Usuario();
    $usuario = $_POST['apelido'];
    $senha = $_POST['senha'];
    $apelido = $_POST['apelido'];
    $senhaconf = $_POST['senhaconf'];
    $email = $_POST['email'];
    $user->setEmail($email);
    $user->setNome($apelido);
    $user->setApelido($apelido);
    $user->setSenha($senha);
   

    if($senha == $senhaconf){
        $cadastroDao = new \_api\Classes\CadastroDao();
        $cadastroDao->read($user);
        if($cadastroDao->read($user) == FALSE){
            $cadastroDao->create($user);
            $_SESSION['erro_cad'] = 4;
            header("Location: ../index.php");
        }
        else{
            //ERRO EMAIL JA EXISTENTE
            echo "email";
            $_SESSION['erro_cad'] = 3;
            header("Location: ../index.php");
        }
    }
    else
    {
        //ERRO SENHAS DIFERENTES
        echo "senha";
        $_SESSION['erro_cad'] = 2;
        header("Location: ../index.php");
    }
}
else
{
    echo "vazio";
    $_SESSION['erro_cad'] = 1;
    header("Location: ../index.php");
}


?>