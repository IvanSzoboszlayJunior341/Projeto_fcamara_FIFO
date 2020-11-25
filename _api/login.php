<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $user = new \_api\Classes\Usuario();
    
    $user->setEmail($_POST['email']);
    $psenha = $_POST['senha'];

    $LoginDao = new \_api\Classes\LoginDao();
    $LoginDao->read($user);

    if($LoginDao->read($user) == []){
        $_SESSION['erro_login'] = 1;
        header("Location: ../index.php");
        echo "erro email";
    }
    else
    {
        foreach($LoginDao->read($user) as $login):
            $senha = $login['senha'];
            $id = $login['idusuario'];
            
        endforeach;
        if($senha == $psenha){
            $_SESSION['idusuario'] = $id;
            header("Location: ../index_fila.php");
        }
        else
        {
            echo "erro senha";
            $_SESSION['erro_login'] = 2;
            header("Location: ../index.php");
        }
    }
    
    
        
?>