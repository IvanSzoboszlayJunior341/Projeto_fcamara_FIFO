<?php

//dados do servidor local
$banco = 'banco_fcamera';
$host = 'localhost';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");
    // echo "Conectado ao banco de dados";
    } catch (Exception $e) {
    echo "Erro ao conectar ao banco!! ". $e;
    }

?>