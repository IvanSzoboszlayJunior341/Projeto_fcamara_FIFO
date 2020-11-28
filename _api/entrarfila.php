<?php
    session_start();
    require __DIR__ . "/../vendor/autoload.php";

    if(isset($_POST['equipamento']) && !empty($_POST['equipamento']))
    {
        $fila = new \_api\Classes\Fila();
        $fila->setEquipamento($_POST['equipamento']);
        $fila->setUsuario($_SESSION['idusuario']);
        $fila->setHora(date("H:i:s"));
        $fila->setJogo($_POST['jogo']);
        $nomefila = 'fila_'. $_POST['equipamento'];

        $filaDao = new \_api\Classes\FilaDao();
        $filaDao->create($fila);
        
        
        $filaDao->read_dentro($fila);

        if($filaDao->read_dentro($fila) == True)
        {
            $_SESSION[$nomefila] = True;
            $_SESSION[$nomefila."1"] = True;
            header("Location: ../index_fila.php");
        }
        else
        {
            $_SESSION[$nomefila] = false;
            $_SESSION[$nomefila1."1"] = false;
            header("Location: ../index_fila.php");
        }
    }
?>