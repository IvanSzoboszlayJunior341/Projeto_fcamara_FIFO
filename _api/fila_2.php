<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->readFila2();
    $cont = 0;
    foreach($filaDao->readFila2() as $filas):
                        
    $cont = $cont + 1; 
    endforeach;
?>
<H1><span><?php echo $cont; ?></span></H1>
<div class="card_conteudo_fila">
    <span>Jogador</span>  <br>      
    <span >na fila</span><br>
</div