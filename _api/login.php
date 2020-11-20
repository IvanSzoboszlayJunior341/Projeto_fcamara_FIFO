<?php
require __DIR__ . "/../vendor/autoload.php";

    $user = new \_api\Classes\Usuario();
    
    $user->setEmail($_POST['email']);
    $user->setSenha($_POST['senha']);

    $LoginDao = new \_api\Classes\LoginDao();
    $LoginDao->read($user);
    if($LoginDao->read($user) == 0){
        header("Location: ../index_fila.php");
    }
    elseif($LoginDao->read($user) == 1)
    {
        echo "erro senha";
    }elseif($LoginDao->read($user)== 2){
        echo "erro email";
    }
?>