<?php
session_start();

require __DIR__ . "/vendor/autoload.php";
$user = new \_api\Classes\Usuario();
$user->setId($_SESSION['idusuario']);
$usuarioDao = new \_api\Classes\UsuarioDao();

$usuarioDao->read($user);
foreach($usuarioDao->read($user) as $usuario):
    $foto = $usuario['Foto'];
    $nome = $usuario['Nome'];
    $email = $usuario['Email'];
endforeach;

if(isset($_SESSION['fila_11'])){

    if($_SESSION['fila_11'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_11'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_11'] = null;
    }

}elseif(isset($_SESSION['fila_21'])){
    
    if($_SESSION['fila_21'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_21'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_21'] = null;
    }

}elseif(isset($_SESSION['fila_31'])){

    if($_SESSION['fila_31'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_31'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_31'] = null;
    }

}elseif(isset($_SESSION['fila_41'])){

    if($_SESSION['fila_41'] == TRUE)
    {
        $fila11 = 1;
        $_SESSION['fila_41'] = null;
    }else
    {
        $fila11 = 2;
        $_SESSION['fila_41'] = null;
    }

}else{
    $fila11 = 0;
}

if(isset($_SESSION['idusuario']))	//verifica se sessao foi setada
  {

  }else{															

      header("location:index.php"); //se nao foi então manda para index.html
  }

  $filaDao = new \_api\Classes\FilaDao();
  $fila_1 = new \_api\Classes\Fila();
  $fila_1->setEquipamento(1);
  $fila_1->setUsuario($_SESSION['idusuario']);
  $filaDao->read_dentro($fila_1);
  if($filaDao->read_dentro($fila_1) == True)
  {
      $fila1 = True;
  }
  else
  {
      $fila1 = false;
  }
  
  $fila_2 = new \_api\Classes\Fila();
  $fila_2->setEquipamento(2);
  $fila_2->setUsuario($_SESSION['idusuario']);
  $filaDao->read_dentro($fila_2);
  if($filaDao->read_dentro($fila_2) == True)
  {
      $fila2 = True;
  }
  else
  {
      $fila2 = false;
  }
  
  $fila_3 = new \_api\Classes\Fila();
  $fila_3->setEquipamento(3);
  $fila_3->setUsuario($_SESSION['idusuario']);
  $filaDao->read_dentro($fila_3);
  if($filaDao->read_dentro($fila_3) == True)
  {
      $fila3 = True;
  }
  else
  {
      $fila3 = false;
  }
  
  $fila_4 = new \_api\Classes\Fila();
  $fila_4->setEquipamento(4);
  $fila_4->setUsuario($_SESSION['idusuario']);
  $filaDao->read_dentro($fila_4);
  if($filaDao->read_dentro($fila_4) == True)
  {
      $fila4 = True;
  }
  else
  {
      $fila4 = false;
  }
?>

<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>FIFO - Fcamara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
        
    </head>
<body>
    <header>
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index_fila.php" >
                            <div class="logo">
                                <img src="img/LOGO_BRANCA.png" id="img_logo" alt="FIFO Logo">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                    <div class="btn-group dropdowns_btn  ">
                                <button type="button" class="btn dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/Vector.png">
                                </button>
        
                                <div class="dropdown-menu header_dropdowns">
                                    <a class="dropdown-item header_dropdowns" href="index_fila.php">Página inicial</a>
                                    <a class="dropdown-item header_dropdowns" href="editar_perfil.php">Editar perfil</a>
                                    <a class="dropdown-item header_dropdowns" href="calendario.php">Calendário</a>
                                    <a class="dropdown-item header_dropdowns" href="#"></a>
                                    <a class="dropdown-item header_dropdowns" href="" data-toggle="modal" data-target="#modal_sair">sair da conta</a>  
                                </div>
        
                            </div> 
                    </div>
                    <div class="col-md-4 ">
                            <div class="te4">
          
                            <div >
                                <h6 id="header_nome" >Olá, <?php echo $nome ?>. <br>Bem vindo(a)</h6>
                            </div>
        
                            <div>
                                <?php echo "<img id='perfil' alt='FIFO Logo'  src='img/".$foto."'>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </header>

     <div class="container ">
        <div class="col-md-12" >
            <div class="texto_fila">
                <H4 align="left" class="cor_prin_02_texto">Escolha uma fila para jogar!</H2>
                <h6 align="left" id="texto_fila_a">A Fcamara oferece uma <b>variedade de jogos</b> para ajudar na sua rotina de  <br> 
                    trabalho. <b>Escolha uma fila,</b> acompanhe-a, saiba quando chegar sua vez e  <br>
                     <span class="cor_prin_02_texto">desestreeessa!!</span></h6>
            </div>
        </div>
    </div>
<!-- Começo  CARD -->
    <div class="espaco_grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">

                        <?php if($fila1 == false || $fila1 == null){?>
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" >
                                        <img src="img/fila/videogame1.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">VIDEOGAME 01 </h5>
                                            <h6 id="card_subtitulo">sala de descompressão</h6>                                
                                            <div class="card_numero_fila" id="fila1">
                                                <H1><span>0 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME01">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame1">
                                                 
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        <?php }else{ ?>

                            <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame1.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">VIDEOGAME 01 </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">sala de descompressão</h6>                                
                                            <div class="card_numero_fila cor_braco" id="fila1">
                                                <H1 ><span>0 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_videogame1">Sair da fila</button>
                                            </div>
                                            <div class="card_modaldetalhe" >
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame1_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto_ativo">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php } ?> 
                

                        </div>
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <?php if($fila2 == false || $fila2 == null){?>
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame2.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">VIDEOGAME 02 </h5>
                                            <h6 id="card_subtitulo">escritório</h6>                                
                                            <div class="card_numero_fila" id="fila2">
                                                <H1><span>0 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME02">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame2">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <!-- Card fila -->
                             <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame2.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">VIDEOGAME 02 </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">escritório</h6>                                
                                            <div class="card_numero_fila cor_braco" id="fila2">
                                                <H1><span>0 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_videogame2">Sair da fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame2_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto"class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php } ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <?php if($fila3 == false || $fila3 == null){?>
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/fliperama.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">FLIPERAMA </h5>
                                            <h6 id="card_subtitulo"><br></h6>                                
                                            <div class="card_numero_fila" id="fila3">
                                                <H1><span>0 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_FLIPERAMA">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_FLIPERAMA">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>   
                            <!-- Card fila -->
                             <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/fliperama.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">FLIPERAMA </h5>
                                            <h6 id="card_subtitulo" class="cor_braco"><br></h6>                                
                                            <div class="card_numero_fila cor_braco" id="fila3">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_FLIPERAMA">Sair da fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_FLIPERAMA_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>       
                        </div>
                        <div class="col-md-6">
                            <?php if($fila4 == false || $fila4 == null){?>
                            <!-- Card normal -->
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/sinuca.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">MESA DE JOGOS </h5>
                                            <h6 id="card_subtitulo">sinuca | ping pong</h6>                                
                                            <div class="card_numero_fila" id="fila4">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_MESA_DE_JOGOS">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <!-- Card fila -->
                             <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/sinuca.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">MESA DE JOGOS </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">sinuca | ping pong</h6>                                
                                            <div class="card_numero_fila cor_braco" id="fila4">
                                                <H1><span>0 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_MESADEJOGOS">Sair da fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Final -->

    <div class="espaco_grid calendario">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div >
                                <H4 id="titulo_calen"> CALENDÁRIO DE ATIVIDADES</H4>
                                <h6 id="calen_texto">Aqui você pode agendar uma noite de board games, organizar um<BR>
                                    campeonato de videogame ou checar quando haverá ginástica laboral na
                                    sede. Encontre seus amigos e divirta-se! </h6>
                                <div>
                                    <a href="calendario.php" type="button" class="btn button_fila" id="caledario_acesso" alt="button para acessar tela do calendario">Acessar aqui</a>
                                </div>
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div  class="calendario_img">
                                <img src="img/caledario.png"alt="caledario">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php include 'layout/footer.php';?>


    <!--MODAL ENTRA NA FILA 1 -->
    <div class="modal fade" id="modal_fila_VIDEOGAME01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/entrarfila.php" method="post">
                <div class="modal-content cormodal_1">
                    <div class="modal-header text-center cor_header_card">

                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                   

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="1" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input name="jogo" type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <input type="submit" name="Enviar" class="btn button_fila modal_tamanho_botao1" value="ENTRA NA FILA">
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    <!--MODAL VIDEOGAME 02 -->
    <div class="modal fade" id="modal_fila_VIDEOGAME02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/entrarfila.php" method="post">
                <div class="modal-content cormodal_1">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 02<br> escritório</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="2" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input name="jogo" type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <input type="submit" name="Enviar" class="btn button_fila modal_tamanho_botao1" value="ENTRA NA FILA">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--MODAL FILA FLIPERAMA -->
    <div class="modal fade" id="modal_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/entrarfila.php" method="post">
                <div class="modal-content cormodal_1">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FLIPERAMA<br></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="3" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input name="jogo" type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <input type="submit" name="Enviar" class="btn button_fila modal_tamanho_botao1" value="ENTRA NA FILA">
                    </div>
                       
                </div>
            </form>
        </div>
    </div>
    <!--MODAL ENTRA NA FILA MESA DE JOGOS -->
    <div class="modal fade" id="modal_fila_MESA_DE_JOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/entrarfila.php" method="post">
                <div class="modal-content cormodal_1">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">MESA DE JOGOS<br> sinuca | ping pong</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>


                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="4" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input name="jogo" type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <input type="submit" name="Enviar" class="btn button_fila modal_tamanho_botao1" value="ENTRA NA FILA">
                    </div>
                     
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila video game1 -->
    <div class="modal fade" id="modal_detalhe_fila_videogame1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila1">
                        
                    </div>
                    <div class="modal-footer">
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao" data-toggle="modal" data-target="#modal_fila_VIDEOGAME01" data-dismiss="modal" aria-label="Close">ENTRA NA FILA</button>
                        </div>
                    </div>     
                </div>
        </div>
    </div>
    
    <!--MODAL de detalhe na fila videogame2-->
    <div class="modal fade" id="modal_detalhe_fila_videogame2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 02<br> escritório</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila2">
                        
                        
                    </div> 
                    <div class="modal-footer">
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao" data-toggle="modal" data-target="#modal_fila_VIDEOGAME02" data-dismiss="modal" aria-label="Close">ENTRA NA FILA</button>
                        </div>
                    </div>  
                </div>
            </form>
        </div>
    </div>
    <!--MODAL de detalhe na fila FLIPERAMA-->
    <div class="modal fade" id="modal_detalhe_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FLIPERAMA<br></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila3">
                        
                        
                    </div>
                    <div class="modal-footer">
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao" data-toggle="modal" data-target="#modal_fila_FLIPERAMA" data-dismiss="modal" aria-label="Close">ENTRA NA FILA</button>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    
    <!--MODAL de detalhe na fila MESADEJOGOS-->
    <div class="modal fade" id="modal_detalhe_fila_MESADEJOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">MESA DE JOGOS<br>sinuca | ping pong</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila4">
        
                        
                    </div>
                    <div class="modal-footer">
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao" data-toggle="modal" data-target="#modal_fila_MESA_DE_JOGOS" data-dismiss="modal" aria-label="Close">ENTRA NA FILA</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>




<!--________________________________________________________________________________  -->
<!-- ________________________________Modal ativo para quando o usuario esta na fila  -->
<!--_______________________________________________________________________________ -->
    <!--MODAL salvar videogame1 -->
    <div class="modal fade" id="modal_sair_fila_videogame1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <input name="equipamento" type="text" value="1" hidden>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <input type="submit" value="SAIR" class="btn button_salvar_modal modal_sair_fila_button" >
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila videogame1 fila -->
    <div class="modal fade" id="modal_detalhe_fila_videogame1_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila_dentro1">
                        
                    </div>   
                </div>
            </form>
        </div>
    </div>


    <!--MODAL salvar videogame2 -->
    <div class="modal fade" id="modal_sair_fila_videogame2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <input name="equipamento" type="text" value="2" hidden>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <input type="submit" value="SAIR" class="btn button_salvar_modal modal_sair_fila_button" >
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila videogame2 fila  modal_detalhe_fila_FLIPERAMA_ativo-->
    <div class="modal fade" id="modal_detalhe_fila_videogame2_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila_dentro2">
                        
                    </div>   
                </div>
            </form>
        </div>
    </div>

    <!--MODAL salvar FLIPERAMA -->
    <div class="modal fade" id="modal_sair_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <input name="equipamento" type="text" value="3" hidden>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <input type="submit" value="SAIR" class="btn button_salvar_modal modal_sair_fila_button" >
                        
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--MODAL de detalhe na fila FLIPERAMA-->
    <div class="modal fade" id="modal_detalhe_fila_FLIPERAMA_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FLIPERAMA<br></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila_dentro3">
                        
                    </div>   
                </div>
            </form>
        </div>
    </div>



    <!--MODAL salvar MESADEJOGOS -->
    <div class="modal fade" id="modal_sair_fila_MESADEJOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <input name="equipamento" type="text" value="4" hidden>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <input type="submit" value="SAIR" class="btn button_salvar_modal modal_sair_fila_button" >
                        
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--MODAL de detalhe na fila MESADEJOGOS-->
    <div class="modal fade" id="modal_detalhe_fila_MESADEJOGOS_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal_1 ">
                    <div class="modal-header text-center cor_header_card">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">MESA DE JOGOS<br>sinuca | ping pong</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 " id="pessoal_fila_dentro4">
                        
                        
                    </div>   
                </div>
            </form>
        </div>
    </div>



















    <!-- Modal entra fila 1 -->
    <div class="modal fade" id="ModalEntrouFila1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                                <div class="col-md-9" id="filamodal1">
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
                                    <H1 class="modal_salvar_fila_numero">2</H1>
                                </div>
                                </div>
                                <h6 class="modal_salvar_fila_footer">Agora é só aguardar que<br> jajá é sua vez de jogar!</h6>
                            </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal entra fila 2 -->
    <div class="modal fade" id="ModalEntrouFila2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                                <div class="col-md-9" id="filamodal2">
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
                                    <H1 class="modal_salvar_fila_numero">2</H1>
                                </div>
                                </div>
                                <h6 class="modal_salvar_fila_footer">Agora é só aguardar que<br> jajá é sua vez de jogar!</h6>
                            </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal entra fila 3 -->
    <div class="modal fade" id="ModalEntrouFila3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                                <div class="col-md-9" id="filamodal3">
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
                                    <H1 class="modal_salvar_fila_numero">2</H1>
                                </div>
                                </div>
                                <h6 class="modal_salvar_fila_footer">Agora é só aguardar que<br> jajá é sua vez de jogar!</h6>
                            </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal entra fila 4 -->
    <div class="modal fade" id="ModalEntrouFila4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                                <div class="col-md-9" id="filamodal4">
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
                                    <H1 class="modal_salvar_fila_numero">2</H1>
                                </div>
                                </div>
                                <h6 class="modal_salvar_fila_footer">Agora é só aguardar que<br> jajá é sua vez de jogar!</h6>
                            </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>
 <!-- Modal saiu fila 1 -->

    <div class="modal fade" id="ModalSaiuFila" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                            <div class="col-md-9" >
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você saiu<br> da fila <br> e perdeu sua posição</H4>
                            </div>
                    </div>
                </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal ERRO -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">Erro Erro Erro</h6>
                        <div class=" d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Sair -->
    <div class="modal fade" id="modal_sair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/sairfila.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja sair?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <input name="equipamento" type="text" value="4" hidden>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <a href="_api/sair.php"><button  type="button" class="btn button_salvar_modal modal_sair_fila_button">SAIR</button></a>
                        
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

   




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script>
        var fila = setInterval(function() { $('#fila1').load('_api/fila_1.php'); }, 1000);
        var fila2 = setInterval(function() { $('#fila2').load('_api/fila_2.php'); }, 1000);
        var fila3 = setInterval(function() { $('#fila3').load('_api/fila_3.php'); }, 1000);
        var fila4 = setInterval(function() { $('#fila4').load('_api/fila_4.php'); }, 1000);
        var filamodal1 = setInterval(function() { $('#filamodal1').load('_api/fila1Entra.php'); }, 1000);
        var filamodal2 = setInterval(function() { $('#filamodal2').load('_api/fila2Entra.php'); }, 1000);
        var filamodal3 = setInterval(function() { $('#filamodal3').load('_api/fila3Entra.php'); }, 1000);
        var filamodal4 = setInterval(function() { $('#filamodal4').load('_api/fila4Entra.php'); }, 1000);
        var lista1 = setInterval(function() { $('#pessoal_fila1').load('_api/lista1.php'); }, 1000);
        var lista2 = setInterval(function() { $('#pessoal_fila2').load('_api/lista2.php'); }, 1000); 
        var lista3 = setInterval(function() { $('#pessoal_fila3').load('_api/lista3.php'); }, 1000); 
        var lista4 = setInterval(function() { $('#pessoal_fila4').load('_api/lista4.php'); }, 1000);
        var listadentro1 = setInterval(function() { $('#pessoal_fila_dentro1').load('_api/listadentro1.php'); }, 1000);
        var listadentro2 = setInterval(function() { $('#pessoal_fila_dentro2').load('_api/listadentro2.php'); }, 1000); 
        var listadentro3 = setInterval(function() { $('#pessoal_fila_dentro3').load('_api/listadentro3.php'); }, 1000); 
        var listadentro4 = setInterval(function() { $('#pessoal_fila_dentro4').load('_api/listadentro4.php'); }, 1000); 
    </script> 
   <?php if($fila11 == 1): ?>
    <script>
        $(document).ready(function(){
            $('#ModalEntrouFila1').modal('show');
        });
    </script>
<?php elseif($fila11 == 2): ?>
    <script>
        $(document).ready(function(){
            $('#ModalSaiuFila').modal('show');
        });
    </script>
<?php endif; ?>

<?php if($fila21 == 1): ?>
    <script>
        $(document).ready(function(){
            $('#ModalEntrouFila2').modal('show');
        });
    </script>
<?php elseif($fila21 == 2): ?>
    <script>
        $(document).ready(function(){
            $('#ModalSaiuFila').modal('show');
        });
    </script>
<?php endif; ?>

<?php if($fila31 == 1): ?>
<script>
    $(document).ready(function(){
        $('#ModalEntrouFila3').modal('show');
    });
</script>
<?php elseif($fila31 == 2): ?>
<script>
    $(document).ready(function(){
        $('#ModalSaiuFila').modal('show');
    });
</script>
<?php endif; ?>

<?php if($fila41 == 1): ?>
<script>
    $(document).ready(function(){
        $('#ModalEntrouFila4').modal('show');
    });
</script>
<?php elseif($fila41 == 2): ?>
<script>
    $(document).ready(function(){
        $('#ModalSaiuFila').modal('show');
    });
</script>
<?php endif; ?>
</body>

</html>