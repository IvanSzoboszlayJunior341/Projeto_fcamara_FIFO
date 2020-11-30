<?php
    require __DIR__ . "/../vendor/autoload.php";
    session_start();
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->read3();
    $cont = 0;
    foreach($filaDao->read3() as $filas):
    $cont = $cont + 1; 
            if($_SESSION['idusuario'] == $filas["idUsuario"] ){?>
            
            <ul class="modal_detalhe_ul" >
                <li class="modal_espaco_img">
                    <?php echo "<img src='img/".$filas["Foto"]. "' alt='Foto Usuario' class='modal_detalhe_img'>"; ?>
                </li>
                <li class="modal_fila_texto ">
                    <h6 class="cor_preta"><br><b> <?php echo $filas["Nome"]; ?></b><br> Jogo: <?php echo $filas["Jogo"]?> </h6>
                </li>
            </ul>
            <?php
            } else{ 
            ?>
                <ul class="modal_detalhe_ul" >
                    <li class="modal_espaco_img">
                        <?php echo "<img src='img/".$filas["Foto"]. "' alt='Foto Usuario' class='modal_detalhe_img'>"; ?>
                    </li>
                    <li class="modal_fila_texto ">
                        <h6 class="cor_preta"><br><b> <?php echo $filas["Nome"]; ?></b><br> Jogo: <?php echo $filas["Jogo"]?> </h6>
                    </li>
                </ul>
            <?php }
    endforeach;
?>