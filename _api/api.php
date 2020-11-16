<?php
include("conexao.php");

// Sair
session_start();
if(isset($_POST['sair'])){
    unset($_SESSION['Userdata']);
    $_SESSION['UserMsg'] = 'Deslogad@ com sucesso! Volte sempre.';
    $_SESSION['opt'] = 'success';
    $_SESSION['alerta'] = 'Sucesso!';
    header("location: ../index.php");
};

// Modelo insert
if (isset($_GET['acao'])=='X'){
$iduser = $_GET['iduser'];
$res = $pdo->prepare("INSERT INTO tabela(x, x, x)values(:y, :y, :y)");
$res->bindValue(":y", $iduser);
$res->execute();
echo 'ok';
}

// Modelo update
if (isset($_POST['acao'])){
    $titulo = $_POST['titulo_editar'];
    $res = $pdo->prepare("UPDATE tabela SET x = :y, x = :y WHERE id_post = :id");
    $res->bindValue(":titulo", $titulo);
    $res->bindValue(":id", $id);
    if ($res->execute()) {
        header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
        exit;
    }
};

// Modelo delete
if (isset($_POST['deletarpost'])){ 
    $post = $_POST['deletarpost'];
    $res = $pdo-> prepare("DELETE FROM tabela WHERE id_post = :id");
    $res->bindValue(":id", $post);
    if ($res->execute()) {
        header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
        exit;
    } 
};

// Buscar perfil por id
if(isset($_POST['BuscarPerfil'])){
    $idPerfil = $_POST['idPerfil'];
    $res = $pdo->query("SELECT * FROM tb_usuario where idusuario = $idPerfil");
    $res->execute();
    $_SESSION['BuscarPerfil']= $res->fetch(PDO::FETCH_ASSOC);
    if(empty($_SESSION['BuscarPerfil'])){
        $_SESSION['UserMsg'] = 'Nenhum perfil encontrado com esse ID';
        $_SESSION['opt'] = 'warning';
        $_SESSION['alerta'] = 'Ops!';
        unset($_SESSION['BuscarPerfil']);
        header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
    }else{
        header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
    } 
}

// Atualizar perfil
if(isset($_POST['AtualizarPerfil'])){
    $nome = $_POST['nome_perfil'];
    $apelido = $_POST['apelido_perfil'];
    $email = $_POST['email_perfil'];
    $senha = $_POST['senha_perfil'];
    $foto = $_POST['foto_perfil'];
    $idPerfil = $_POST['AtualizarPerfil'];
    $res = $pdo->prepare("UPDATE tb_usuario SET nome = :nomePerf, apelido = :apelidoPerf, email = :emailPerf, senha = :senhaPerf, foto = :fotoPerf WHERE idusuario = :idPerfil");
    $res->bindValue(":nomePerf", $nome);
    $res->bindValue(":apelidoPerf", $apelido);
    $res->bindValue(":emailPerf", $email);
    $res->bindValue(":senhaPerf", $senha);
    $res->bindValue(":fotoPerf", $foto);
    $res->bindValue(":idPerfil", $idPerfil);
    if($res->execute()){
        $res = $pdo->query("SELECT * FROM tb_usuario WHERE idusuario = $idPerfil");
        if($res->execute()){
            $_SESSION['BuscarPerfil']= $res->fetch(PDO::FETCH_ASSOC);
            $_SESSION['UserMsg'] = 'Perfil atualizada com sucesso';
            $_SESSION['opt'] = 'success';
            $_SESSION['alerta'] = 'Sucesso!';
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
        };
    }
}

// Excluir perfil
if(isset($_POST['ExcluirPerfil'])){
    $idPerfil = $_POST['ExcluirPerfil'];
    $res = $pdo-> prepare("DELETE FROM tb_usuario WHERE idusuario = :id");
    $res->bindValue(":id", $idPerfil);
    if ($res->execute()) {
        $_SESSION['BuscarPerfil']= $res->fetch(PDO::FETCH_ASSOC);
        $_SESSION['UserMsg'] = 'Perfil excluído com sucesso';
        $_SESSION['opt'] = 'success';
        $_SESSION['alerta'] = 'Sucesso!';
        header("Location: ../home.php");
    } 
}
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
            $_SESSION['usuario'] = $info['nome'];
            header("Location: main.php");
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