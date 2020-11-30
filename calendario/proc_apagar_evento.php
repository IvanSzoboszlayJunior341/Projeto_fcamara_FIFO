<?php

session_start();

include_once './conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $query_event = "DELETE FROM events WHERE id=:id";
    $delete_event = $conn->prepare($query_event);
    
    $delete_event->bindParam("id", $id);
    
    if($delete_event->execute()){
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Atividade foi apagado com sucesso!</div>';
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Atividade não foi apagado com sucesso!</div>';
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Atividade não foi apagado com sucesso!</div>';
    header("Location: index.php");
}
