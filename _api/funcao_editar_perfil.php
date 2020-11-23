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
    $idPerfil = $_SESSION['id'];
    
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
            echo "         
            <script type=\"text/javascript\">
                alert(\"Atualizado com Sucesso.\");
                window.location.href='../index_fila.php';
            </script>                    ";	
            //header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
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

?>