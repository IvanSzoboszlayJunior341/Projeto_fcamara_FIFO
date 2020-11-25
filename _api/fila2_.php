<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->readFila2();
    $cont = 0;
    foreach($filaDao->readFila2() as $filas):
                        
    $cont = $cont + 1; 
    endforeach;
?>
<span class=""><?php echo $cont; ?></span>
