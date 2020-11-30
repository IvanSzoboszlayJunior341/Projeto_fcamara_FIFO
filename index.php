<?php
session_start();
$erro_login = 0;
if(isset($_SESSION['erro_login']) && !empty($_SESSION['erro_login'])):
    $erro_login = $_SESSION['erro_login'];
endif;

$erro_cadastro = 0;
if(isset($_SESSION['erro_cad']) && !empty($_SESSION['erro_cad'])):
    $erro_cadastro = $_SESSION['erro_cad'];   
endif;
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
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilohome.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>

<body>
    <div class="topnav">
    <nav class="navbar navbar-dark default-color ">
        <a href="index.php">
            <div class="logo">
                <img src="img/LOGO BRANCA COM FCAMARA 1.png" alt="FIFO Logo">
            </div>
        </a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <a href="" class="button" data-toggle="modal" data-target="#modalCadastroForm">CADASTRE-SE</a>
            <a href="" class="button-login" data-toggle="modal" data-target="#modalLoginForm">FAZER LOGIN</a>
        </form>
    </nav>
    <h1 id="h1-topnav">O SITE DE JOGOS DA FCÂMARA</h1>
    <p id="p-topnav">O FIFO reúne todas as informações que você precisa para acessar de forma rápida
        e fácil as jogatinas e outras atividades disponíveis para você na sua sede!
    </p>
    </div>

    <div class="espaco_grid">
        <div class="container-fluid" id="container-fluid-padding">
        <h3 id="h3-fila-tempo-real">FILAS EM TEMPO REAL</h3>
            <h5 id="h5-fila-tempo-real">Monitore as filas e, quando quiser jogar, em poucos cliques
                você também pode entrar na de sua preferência. Depois é só aguardar
                sua vez! <a href="#">Cadastre-se agora e acesse!</a>
            </h5>
            <div class="row">
                <div class="cards-retangle" >
                    <div class="row no-gutters">
                        <div id="img-card1">
                            <img src="img/home/videogame01.png" class="img-cards-index" alt="...">
                        </div>
                        <div>
                            <div class="card-body-index">
                                <H4 class="card-titulo-index">VIDEOGAME 01</H4>
                                <h7 class="card-desc-index">sala de descompressão</h7>
                                <div class="card-pessoas-fila" id="fila1">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-retangle" >
                    <div class="row no-gutters">
                        <div id="img-card1">
                            <img src="img/home/videogame02.png" class="img-cards-index" alt="...">
                        </div>
                        <div>
                            <div class="card-body-index">
                                <H4 class="card-titulo-index">VIDEOGAME 02</H4>
                                <h7 class="card-desc-index">escritório</h7>
                                <div class="card-pessoas-fila" id="fila2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-retangle" >
                    <div class="row no-gutters">
                        <div id="img-card1">
                            <img src="img/home/fliperama.png" class="img-cards-index" alt="...">
                        </div>
                        <div>
                            <div class="card-body-index">
                                <H4 class="card-titulo-index">FLIPERAMA</H4>
                                <h7 class="card-desc-index">escritório</h7>
                                <div class="card-pessoas-fila" id="fila3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-retangle" >
                    <div class="row no-gutters">
                        <div id="img-card1">
                            <img src="img/home/jogo de mesa.png" class="img-cards-index" alt="...">
                        </div>
                        <div>
                            <div class="card-body-index">
                                <H4 class="card-titulo-index">JOGO DE MESA</H4>
                                <h7 class="card-desc-index">sinuca | ping pong</h7>
                                <div class="card-pessoas-fila" id="fila4">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="espaco_grid calendario">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="calendario_conteudo">
                                <H3 class="cor_prin_02_texto" id="titulo_calen">
                                QUE TAL AGENDAR UMA ATIVIDADE?</H3>
                                <h5 id="calen_texto">Quer marcar noites de <b>board 
                                game</b>, organizar um </b>campeonato de viodegames</b> ou 
                                checar quando haverá <b>ginástica laboral</b> na sede?
                                Com o nosso calendário de atividades você pode 
                                fazer tudo isso. <a href="#">Acesse seu perfil</a> e experimente agora!</h5>
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div  class="calendario_img">
                                <img src="img/caledario.jpg "alt="caledario">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="session_mobile">
    <img id="imgHome" src="img/session_mobile.png" alt="FIFO" align="left">

        <!-- <div class="col-md-12">
            <div>
                <img id="imgHome" src="img/mobile3 1.png" alt="FIFO" align="left">
            </div>
            <h3 id="h3-session-mobile" align="left">Não está em sua sede da FCâmara e deseja entrar na plataforma?</h3>
            <h5 id="h5-session-mobile" align="left">Simples! É só entrar pela plataforma no seu celular
                para ter acesso a todas as vantagens do FIFO!
            </h5>
        </div> -->
    </div>

    <?php include 'layout/footer.php';?>
    
    


    <!--MODAL LOGIN-->

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="_api/login.php" method="post">
                    <div class="modal-header text-center" style="color: white;background: #FE5517;border-radius: 35px 35px 0 0;height: 177px; display: revert;">
                        <img src="img/LOGO BRANCA COM FCAMARA 1.png" style="width: 100px;" alt="FIFO Logo">
                        <h6 class="modal-title w-100 font-weight-bold" style="color: white; margin-top: 30px;">ACESSE SUA CONTA</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -150px;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                            <input name="email" type="email" id="defaultForm-email" class="form-control validate"
                                placeholder="seunome@empresa.com">
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                            <input name="senha" type="password" id="defaultForm-pass" class="form-control validate">
                        </div>

                        <div class="btnForm">
                            <input type="submit" name="Enviar" class="button-modal">
                        </div>
                        <div>

                            <div class="modal-footer">
                                <label><a href="">Esqueceu a senha?</a></label>
                                <div>
                                    <label>ou <a href="">cria sua conta</a></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--MODAL CADASTRO-->

    <div class="modal fade" id="modalCadastroForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/cadastro.php" method="post">
                <div class="modal-content">
                    <div class="modal-header text-center" style="color: white;background: #FE5517;border-radius: 35px 35px 0 0;height: 177px; display: inline-table;">
                        <img src="img/LOGO BRANCA COM FCAMARA 1.png" style="width: 100px; margin-bottom: 20px;" alt="FIFO Logo">
                        <h6 class="modal-title w-100 font-weight-bold" style="color: white;">CADASTRE-SE E DIVIRTA-SE</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -120px;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-apelido">Como você gostaria
                                de
                                ser chamado?</label>
                            <input name="apelido"  type="name" id="defaultForm-apelido" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                            <input name="email" type="email" id="defaultForm-email" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                            <input name="senha" type="password" id="defaultForm-pass" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-Confpass">Confirme a
                                senha</label>
                            <input name="senhaconf" type="password" id="defaultForm-Confpass" class="form-control validate">
                        </div>
                        <div>
                            <input type="checkbox" id="termos" name="termos">
                            <label for="termos">Concordo com os <a href="">termos de uso</a></label>
                        </div>
                    </div>


                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" name="cadastro" class="button-modal">
                    </div>
                    <span style="text-align: center; padding-bottom: 20px">ou <a href="#">faça login</a></span>

                </div>
            </form>
        </div>
    </div>

    <!--Modal erro login email-->
    <div class="modal fade" id="modal_login_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">E-mail não encontrado</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal erro login senha-->
    <div class="modal fade" id="modal_login_senha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">Senha incorreta</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Modal erro cadastro vazio-->
    <div class="modal fade" id="modal_cadastro_vazio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">Preencha todos os campos</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal erro cadastro senha-->
    <div class="modal fade" id="modal_cadastro_senha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">As senhas não são iguais!!!</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal erro cadastro email-->
    <div class="modal fade" id="modal_cadastro_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">E-mail já cadastrado</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Modal erro cadastro sucesso-->
    <div class="modal fade" id="modal_cadastro_sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                            <div class="col-md-9">
                                <H4 class="cor_braco modal_salvar_fila_texto">Cadastro feito com sucesso</H4>
                                
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- SVG -->

    <div hidden>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="facebook" viewBox="0 0 24 24">
                <title>facebook</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m6.812 13.937h2.518v9.312c0 .414.335.75.75.75l4.007.001c.415 0 .75-.337.75-.75v-9.312h2.387c.378 0 .697-.282.744-.657l.498-4c.056-.446-.293-.843-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75v-3.577c0-.375-.277-.692-.648-.743-.314-.043-1.555-.166-3.094-.166-7.01 0-5.567 7.772-5.74 8.437h-2.519c-.414 0-.75.336-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518c.414 0 .75-.336.75-.75v-3.151c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474c-.414 0-.75.336-.75.75v9.311h-2.505v-9.312c0-.414-.336-.75-.75-.75h-2.519z"
                    fill="#fe662e" data-original="#000000" style="" class="" />
            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <title>instagram</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m4.75 24h14.5c2.619 0 4.75-2.131 4.75-4.75v-14.5c0-2.619-2.131-4.75-4.75-4.75h-14.5c-2.619 0-4.75 2.131-4.75 4.75v14.5c0 2.619 2.131 4.75 4.75 4.75zm-3.25-19.25c0-1.792 1.458-3.25 3.25-3.25h14.5c1.792 0 3.25 1.458 3.25 3.25v14.5c0 1.792-1.458 3.25-3.25 3.25h-14.5c-1.792 0-3.25-1.458-3.25-3.25z"
                    fill="#fe662e" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m12 18.13c3.38 0 6.13-2.75 6.13-6.13s-2.75-6.13-6.13-6.13-6.13 2.75-6.13 6.13 2.75 6.13 6.13 6.13zm0-10.76c2.553 0 4.63 2.077 4.63 4.63s-2.077 4.63-4.63 4.63-4.63-2.077-4.63-4.63 2.077-4.63 4.63-4.63z"
                    fill="#fe662e" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.358 7.362c.986 0 1.729-.74 1.729-1.721 0-1.023-.782-1.721-1.728-1.721-.986 0-1.729.74-1.729 1.721 0 1.021.778 1.721 1.728 1.721zm.177-1.886c.316.279-.405.618-.405.166 0-.27.367-.2.405-.166z"
                    fill="#fe662e" data-original="#000000" style="" />
            </symbol>
            <symbol id="youtube" viewBox="0 0 24 24">
                <title>youtube</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m9.939 7.856c-.497-.297-1.134.062-1.134.644v7c0 .585.638.939 1.134.645l5.869-3.495c.488-.291.487-.997.001-1.289zm.366 6.325v-4.36l3.655 2.183z"
                    fill="#fe662e" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m19.904 3.271c-4.653-.691-11.153-.691-15.808 0-1.862.276-3.329 1.738-3.649 3.636-.596 3.523-.596 6.664 0 10.186.32 1.899 1.787 3.36 3.649 3.636 2.332.346 5.124.519 7.915.519 2.786 0 5.571-.172 7.894-.518 1.86-.276 3.326-1.737 3.648-3.636.596-3.523.596-6.665 0-10.188-.32-1.897-1.787-3.359-3.649-3.635zm2.17 13.573c-.213 1.256-1.173 2.222-2.39 2.402-4.518.671-10.838.671-15.368-.001-1.218-.181-2.179-1.146-2.391-2.402-.574-3.394-.574-6.291 0-9.687.213-1.256 1.173-2.22 2.392-2.402 2.262-.335 4.973-.503 7.682-.503 2.711 0 5.422.168 7.684.503 1.218.181 2.179 1.146 2.391 2.402.574 3.396.574 6.293 0 9.688z"
                    fill="#fe662e" data-original="#000000" style="" />
            </symbol>
            <symbol id="linkedin" viewBox="0 0 24 24">
                <title>linkedin</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.59 24c.103 0 4.762-.001 4.66-.001.414 0 .75-.336.75-.75-.35-7.857 1.842-16.148-6.338-16.148-1.573 0-2.826.537-3.729 1.247 0-1.461-1.579-.653-5.224-.87-.414 0-.75.336-.75.75.302 14.166-.674 15.771.75 15.771h4.66c1.353 0 .492-1.908.75-8.188 0-2.594.75-3.102 2.046-3.102 1.434 0 1.675.996 1.675 3.228.257 6.167-.598 8.063.75 8.063zm-2.425-12.791c-4.491 0-3.546 4.938-3.546 11.29h-3.16v-13.521h2.974v1.298c0 .72 1.097 1.074 1.479.35.492-.934 1.77-2.025 3.75-2.025 3.527 0 4.838 1.733 4.838 6.396v7.503h-3.16c0-7.144.756-11.291-3.175-11.291z"
                    fill="#fe662e" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m1.122 7.479c-1.42 0-.448 1.585-.75 15.771 0 .414.336.75.75.75h4.665c1.42 0 .448-1.585.75-15.771 0-1.295-1.881-.531-5.415-.75zm3.915 15.021h-3.165v-13.521h3.165z"
                    fill="#fe662e" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m3.452 0c-4.576 0-4.548 6.929 0 6.929 4.545 0 4.581-6.929 0-6.929zm0 5.429c-2.568 0-2.592-3.929 0-3.929 2.597 0 2.564 3.929 0 3.929z"
                    fill="#fe662e" data-original="#000000" style="" />
            </symbol>
        </svg>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <?php 
    if($erro_login == 1){?>
        <script>
            $(document).ready(function(){
                $('#modal_login_email').modal('show');
            });
        </script>
        <?php $_SESSION['erro_login'] = 0 ;
        }elseif($erro_login == 2){ ?>
        <script>
            $(document).ready(function(){
                $('#modal_login_senha').modal('show');
            });
        </script>
        <?php $_SESSION['erro_login'] = 0 ;
    }
    
    

    if($erro_cadastro == 1){?>
        <script>
            $(document).ready(function(){
                $('#modal_cadastro_vazio').modal('show');
            });
        </script>
        <?php $_SESSION['erro_cad'] = 0 ;
        }elseif($erro_cadastro == 2){ ?>
        <script>
            $(document).ready(function(){
                $('#modal_cadastro_senha').modal('show');
            });
        </script>
        <?php $_SESSION['erro_cad'] = 0 ;
    }elseif($erro_cadastro == 3){ ?>
        <script>
            $(document).ready(function(){
                $('#modal_cadastro_email').modal('show');
            });
        </script>
        <?php $_SESSION['erro_cad'] = 0 ;
    }elseif($erro_cadastro == 4){ ?>
        <script>
            $(document).ready(function(){
                $('#modal_cadastro_sucesso').modal('show');
            });
        </script>
        <?php $_SESSION['erro_cad'] = 0 ;
    } 
    ?>
    <script>
        var intervalo1 = setInterval(function() { $('#fila1').load('_api/fila1.php'); }, 1000);
        var intervalo2 = setInterval(function() { $('#fila2').load('_api/fila2.php'); }, 1000);
        var intervalo3 = setInterval(function() { $('#fila3').load('_api/fila3.php'); }, 1000);
        var intervalo4 = setInterval(function() { $('#fila4').load('_api/fila4.php'); }, 1000);
    </script>


</body>

</html>