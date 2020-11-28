<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->readFila4();
    $cont = 0;
    foreach($filaDao->readFila4() as $filas):
                        
    $cont = $cont + 1; 
    endforeach;
    $cont = $cont + 1;
?>
<p class="numero_fila"><?php echo $cont; ?></p>