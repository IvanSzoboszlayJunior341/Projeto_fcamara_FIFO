<?php
include("conexao.php");

// Iniciar sess
session_start();

//LOGIN
if(isset($_POST['Enviar'])){
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = ?");
    $sql->execute([$usuario]);

    if($sql->rowCount() == 1){
        $info = $sql->fetch();
        if($senha ==  $info['senha']){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $info['idusuario'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['apelido'] = $info['apelido'];
            $_SESSION['email'] = $info['email'];
            $_SESSION['foto'] = $info['foto'];
            $_SESSION['senha'] = $info['senha'];
            header("Location: ../index_fila.php");
            die();
        }
        else
        {
            //Erro
            $_SESSION['erro_login'] = "2";
            header("Location: ../index.php");
        }
    }
    else
    {
        //Erro
        $_SESSION['erro_login'] = "1";
        header("Location: ../index.php");
        
    }    
}
//Cadastro
if(isset($_POST['cadastro'])){
    $usuario = $_POST['apelido'];
    $senha = $_POST['senha'];
    $apelido = $_POST['apelido'];
    $senhaconf = $_POST['senhaconf'];
    $email = $_POST['email'];
    
    if($usuario == '' || $senha == ''){
        echo 'Preencha o campo.';
        $_SESSION['erro_cad'] = "1";
        header("Location: ../index.php");
    }else
    {   
        if($senhaconf =! $senha)
        {
            echo "Senhas diferentes";
            $_SESSION['erro_cad'] = "2";
            header("Location: ../index.php");
        }
        else{
            $emailcad = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = ?");
            $emailcad->execute([$email]);

            if($emailcad->rowCount() == 1)
            {
                $_SESSION['erro_cad'] = "3*";
                header("Location: ../index.php");
                
            }
            else
            {
                $cadastro = $pdo->prepare("INSERT INTO tb_usuario (idusuario, nome, apelido, email, senha) VALUES (null, ?, ?, ?, ?)");
                $cadastro->execute([$usuario, $apelido, $email, $senha]);
                echo 'Usuário cadastrado com sucesso';
                $_SESSION['erro_cad'] = "4";
                header("Location: ../index.php");
            }
        }
    }
}

?>