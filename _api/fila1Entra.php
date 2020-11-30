<?php
    require __DIR__ . "/../vendor/autoload.php";
    session_start();
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->read1();
    $cont = 0;
    foreach($filaDao->read1() as $filas):
        $cont = $cont + 1; 
        if($_SESSION['idusuario'] == $filas["idUsuario"] ){?>
        
            <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
            <H1 class="modal_salvar_fila_numero"><?php echo  $cont; ?></H1>
     <?php }
    endforeach; ?>
