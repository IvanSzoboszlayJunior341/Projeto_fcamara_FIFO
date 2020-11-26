<?php
session_start();
$erro_login = 0;
if(isset($_SESSION['erro_login']) && !empty($_SESSION['erro_login'])):
$erro_login = $_SESSION['erro_login'];
endif;
$erro_cad = 0;
if(isset($_SESSION['erro_cad']) && !empty($_SESSION['erro_cad'])):
    $erro_cad = $_SESSION['erro_cad'];
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
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
</head>

<body>
    <!--MODALS DE ERROS-->

        <!--CADASTRO REALIZADO COM SUCESSO!-->
        <div class="modal fade" id="ModalSucessoCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">CADASTRO REALIZADO COM SUCESSO!</p>    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--EMAIL JA CADASTRADO-->
        <div class="modal fade" id="ModalErroEmailCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">ESSE E-MAIL JÁ ESTA SENDO USADO! </p> 
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Senhas diferente-->
        <div class="modal fade" id="ModalErroSenhaDiferentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">SENHAS DIFERENTES!!! TENTE NOVAMENTE!</p> 
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Campos vazios cadastro-->
        <div class="modal fade" id="ModalErroVazioCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">EXISTEM CAMPOS VAZIOS POR FAVOR OS PREENCHA!</p> 
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- senha incorreta!-->

        <div class="modal fade" id="ModalErroSenhaLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">USUÁRIO OU SENHA INCORRETOS!</p>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Email incorreto!-->

        <div class="modal fade" id="ModalErroLoginEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  cormodal ">
                    <form action="_api/login.php" method="post">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 erros_modal">
                            <div class="md-form mb-5 erro_modal">
                                <img class="erros_modal_img" src="img/Vector.png" alt="">  
                            </div>
                            <div class="md-form mb-4 erro_modal msg_erros">
                                <p class="msg_erro">USUÁRIO NÃO ENCONTRADO! TENTE NOVAMENTE!</p>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        


<header class="header">
        <nav class="navbar navbar-dark default-color ">
            <div class="heander_nav_img">
                <a href="index_fila.php">
                    <div class="logo">
                        <img src="img/LOGO_COMPLETA.png" alt="FIFO Logo">
                    </div>
                </a>
            </div>    
            <form class="form-inline my-2 my-lg-0 ml-auto menu_form">
                <a href="" class="button" data-toggle="modal" data-target="#modalLoginForm">LOGIN</a>
                <a href="" class="button" data-toggle="modal" data-target="#modalCadastroForm">CRIE UMA CONTA</a>
            </form>


        </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="textoH2">
                            <H2>O SITE DE JOGOS <br>DA FCÂMARA</H2>
                        </div>
                    </div>
                </div>
            </div>
    </header>


    
    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/tets.jpg" alt="" class="img_fila">    
                        </div>
                        <div class="down-content" id="baixo_fila">
                            <p class="titulo_fila">VIDEOGAME 01</p>
                            <p class="sub_titulo_fila">Sala de descompressão</p>
                            <div class="pessoas_fila">
                                <img id="icone_fila" src="img/icon5.png">
                                <div class="date-content" id="fila1">
                                    
                                </div>
                                <div class="div_pessoas_fila">
                                    <p class="texto_pessoas_fila1">PESSOAS </p>
                                    <p class="texto_pessoas_fila2">NA FILA </p>
                                </div>  
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/fifa.jpg" alt="" class="img_fila">
                        </div>
                        <div class="down-content"  id="baixo_fila">
                            <p class="titulo_fila">VIDEOGAME 02</p>
                            <p class="sub_titulo_fila">Escritório</p>
                            <div class="pessoas_fila">
                                <img id="icone_fila" src="img/icon5.png">
                                <div class="date-content" id="fila2">
                                    
                                </div>
                                <div class="div_pessoas_fila">
                                    <p class="texto_pessoas_fila1">PESSOAS </p>
                                    <p class="texto_pessoas_fila2">NA FILA </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img class="flip" src="img/flippp.jpg" alt="">
                        </div>
                        <div class="down-content"  id="baixo_fila">
                            <p class="titulo_fila">FLIPERAMA</p>
                            <p class="sub_titulo_fila">Escritório</p>
                            <div class="pessoas_fila">
                                <img id="icone_fila" src="img/icon5.png">
                                <div class="date-content" id="fila3">
                                    
                                </div>
                                <div class="div_pessoas_fila">
                                    <p class="texto_pessoas_fila1">PESSOAS </p>
                                    <p class="texto_pessoas_fila2">NA FILA </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/sinucas.jpg" alt="" class="img_fila">
                        </div>
                        <div class="down-content"  id="baixo_fila">
                            <p class="titulo_fila">MESA DE JOGOS</p>
                            <p class="sub_titulo_fila">Sinuca/Ping Pong</p>
                            <div class="pessoas_fila">
                                <img id="icone_fila" src="img/icon5.png">
                                <div class="date-content" id="fila4">
                                    
                                </div>
                                <div class="div_pessoas_fila">
                                    <p class="texto_pessoas_fila1">PESSOAS </p>
                                    <p class="texto_pessoas_fila2">NA FILA </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div>
                <!--            TODO alterar imagem-->
                <img class="imgHome" src="img/celular_blank.png" alt="FIFO" align="left">
            </div>
            <p align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident</p>
            <p align="left">-ncididunt ut labore et dolore magna aliqua</p>
            <p align="left">-ncididunt ut labore et dolore magna aliqua</p>
            <p align="left">-ncididunt ut labore et dolore magna aliqua</p>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6">  
                        <div class="logo footer_img">
                            <img src="img/LOGO_FIFO_1.png" alt="FIFO Logo"><br>
                            <img src="img/LOGO_FCAMARA(1).png" alt="Logo FCAMARA">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="about-veno footer_icone">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.instagram.com/grupo.fcamara/" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#instagram" />
                                        </svg>
                                    </a>
                                    <a href="https://pt-br.facebook.com/grupofcamara/" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#facebook" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/company/fcamara-consulting-&-training/"
                                        target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#linkedin" />
                                        </svg>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCHsQ04xha1YKv48dSzQFlpw" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#youtube" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <p><h6 class="footer_texto">&copy; 2020 FCamara Formação e Consultoria.<br>
                            Todos os direitos reservados<h6></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <!--MODAL LOGIN-->

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        >
        <div class="modal-dialog" role="document">
            <div class="modal-content cormodal">
                <form action="_api/login.php" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">LOGIN</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                            <input name="email" type="email" id="defaultForm-email" class="form-control validate"
                                placeholder="seunome@empresa.com" required>
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                            <input name="senha" type="password" id="defaultForm-pass" class="form-control validate" required>
                        </div>

                        <div class="btnForm ">
                            <input type="submit" name="Enviar" class="button_fila">
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
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">CADASTRO</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-apelido">Como você gostaria
                                de
                                ser chamado?</label>
                            <input name="apelido"  type="name" id="defaultForm-apelido" class="form-control validate" required>
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                            <input name="email" type="email" id="defaultForm-email" class="form-control validate" required>
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                            <input name="senha" type="password" id="defaultForm-pass" class="form-control validate" required>
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-Confpass">Confirme a
                                senha</label>
                            <input name="senhaconf" type="password" id="defaultForm-Confpass" class="form-control validate" required>
                        </div>
                        <div>
                            <input type="checkbox" id="termos" name="termos" required>
                            <label for="termos">Concordo com os <a href="">termos de uso</a></label>
                        </div>
                    </div>


                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" name="cadastro" class="button_fila">
                    </div>
                </div>
            </form>
        </div>
    </div>

        <!-- SVG -->
    <div hidden>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="facebook" viewBox="0 0 16 28">
                <title>facebook</title>
                <path d="M9.9629 27.9227H5.62191C4.89683 27.9227 4.307 27.3341 4.307 26.6104V16.8382H1.77438C1.0493 16.8382 0.459473 16.2493 0.459473 15.5259V11.3385C0.459473 10.6148 1.0493 10.0261 1.77438 10.0261H4.307V7.92922C4.307 5.85007 4.96115 4.08115 6.19851 2.81401C7.44145 1.54109 9.17846 0.868408 11.2218 0.868408L14.5324 0.873775C15.2563 0.875013 15.845 1.46369 15.845 2.18612V6.07402C15.845 6.79769 15.2554 7.38636 14.5306 7.38636L12.3015 7.38719C11.6217 7.38719 11.4486 7.52321 11.4116 7.56491C11.3506 7.63405 11.278 7.82952 11.278 8.36928V10.0259H14.363C14.5953 10.0259 14.8203 10.0831 15.0137 10.1908C15.4308 10.4235 15.6901 10.8633 15.6901 11.3387L15.6885 15.5261C15.6885 16.2493 15.0987 16.838 14.3736 16.838H11.278V26.6104C11.278 27.3341 10.688 27.9227 9.9629 27.9227ZM5.89615 26.3367H9.68867V16.1282C9.68867 15.645 10.0826 15.252 10.5666 15.252H14.0993L14.1008 11.6122H10.5664C10.0824 11.6122 9.68867 11.2192 9.68867 10.736V8.36928C9.68867 7.74964 9.75175 7.04497 10.2204 6.51532C10.7866 5.87504 11.679 5.80115 12.3011 5.80115L14.2559 5.80032V2.4594L11.2205 2.45445C7.93676 2.45445 5.89615 4.55238 5.89615 7.92922V10.736C5.89615 11.219 5.50238 11.6122 5.01844 11.6122H2.04862V15.252H5.01844C5.50238 15.252 5.89615 15.645 5.89615 16.1282V26.3367ZM14.5293 2.45982H14.5295H14.5293Z" 
                fill="white" width="16" height="28" viewBox="0 0 16 28"/>

            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <title>instagram</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m4.75 24h14.5c2.619 0 4.75-2.131 4.75-4.75v-14.5c0-2.619-2.131-4.75-4.75-4.75h-14.5c-2.619 0-4.75 2.131-4.75 4.75v14.5c0 2.619 2.131 4.75 4.75 4.75zm-3.25-19.25c0-1.792 1.458-3.25 3.25-3.25h14.5c1.792 0 3.25 1.458 3.25 3.25v14.5c0 1.792-1.458 3.25-3.25 3.25h-14.5c-1.792 0-3.25-1.458-3.25-3.25z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m12 18.13c3.38 0 6.13-2.75 6.13-6.13s-2.75-6.13-6.13-6.13-6.13 2.75-6.13 6.13 2.75 6.13 6.13 6.13zm0-10.76c2.553 0 4.63 2.077 4.63 4.63s-2.077 4.63-4.63 4.63-4.63-2.077-4.63-4.63 2.077-4.63 4.63-4.63z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.358 7.362c.986 0 1.729-.74 1.729-1.721 0-1.023-.782-1.721-1.728-1.721-.986 0-1.729.74-1.729 1.721 0 1.021.778 1.721 1.728 1.721zm.177-1.886c.316.279-.405.618-.405.166 0-.27.367-.2.405-.166z"
                    fill="#fff" data-original="#000000" style="" />
            </symbol>
            <symbol id="youtube" viewBox="0 0 24 24">
                <title>youtube</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m9.939 7.856c-.497-.297-1.134.062-1.134.644v7c0 .585.638.939 1.134.645l5.869-3.495c.488-.291.487-.997.001-1.289zm.366 6.325v-4.36l3.655 2.183z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m19.904 3.271c-4.653-.691-11.153-.691-15.808 0-1.862.276-3.329 1.738-3.649 3.636-.596 3.523-.596 6.664 0 10.186.32 1.899 1.787 3.36 3.649 3.636 2.332.346 5.124.519 7.915.519 2.786 0 5.571-.172 7.894-.518 1.86-.276 3.326-1.737 3.648-3.636.596-3.523.596-6.665 0-10.188-.32-1.897-1.787-3.359-3.649-3.635zm2.17 13.573c-.213 1.256-1.173 2.222-2.39 2.402-4.518.671-10.838.671-15.368-.001-1.218-.181-2.179-1.146-2.391-2.402-.574-3.394-.574-6.291 0-9.687.213-1.256 1.173-2.22 2.392-2.402 2.262-.335 4.973-.503 7.682-.503 2.711 0 5.422.168 7.684.503 1.218.181 2.179 1.146 2.391 2.402.574 3.396.574 6.293 0 9.688z"
                    fill="#fff" data-original="#000000" style="" />
            </symbol>
            <symbol id="linkedin" viewBox="0 0 24 24">
                <title>linkedin</title>
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m18.59 24c.103 0 4.762-.001 4.66-.001.414 0 .75-.336.75-.75-.35-7.857 1.842-16.148-6.338-16.148-1.573 0-2.826.537-3.729 1.247 0-1.461-1.579-.653-5.224-.87-.414 0-.75.336-.75.75.302 14.166-.674 15.771.75 15.771h4.66c1.353 0 .492-1.908.75-8.188 0-2.594.75-3.102 2.046-3.102 1.434 0 1.675.996 1.675 3.228.257 6.167-.598 8.063.75 8.063zm-2.425-12.791c-4.491 0-3.546 4.938-3.546 11.29h-3.16v-13.521h2.974v1.298c0 .72 1.097 1.074 1.479.35.492-.934 1.77-2.025 3.75-2.025 3.527 0 4.838 1.733 4.838 6.396v7.503h-3.16c0-7.144.756-11.291-3.175-11.291z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m1.122 7.479c-1.42 0-.448 1.585-.75 15.771 0 .414.336.75.75.75h4.665c1.42 0 .448-1.585.75-15.771 0-1.295-1.881-.531-5.415-.75zm3.915 15.021h-3.165v-13.521h3.165z"
                    fill="#fff" data-original="#000000" style="" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="m3.452 0c-4.576 0-4.548 6.929 0 6.929 4.545 0 4.581-6.929 0-6.929zm0 5.429c-2.568 0-2.592-3.929 0-3.929 2.597 0 2.564 3.929 0 3.929z"
                    fill="#fff" data-original="#000000" style="" />
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
    <script>
        var intervalo1 = setInterval(function() { $('#fila1').load('_api/fila1.php'); }, 1000);
        var intervalo2 = setInterval(function() { $('#fila2').load('_api/fila2.php'); }, 1000);
        var intervalo3 = setInterval(function() { $('#fila3').load('_api/fila3.php'); }, 1000);
        var intervalo4 = setInterval(function() { $('#fila4').load('_api/fila4.php'); }, 1000);
    </script>
    <?php
        
    if($erro_login == "1" || $erro_login == "2")
    {
        if($erro_login == "1")
        {
                    ?>      
                        <script>
                            $(document).ready(function(){
                                $('#ModalErroLoginEmail').modal('show');
                            });
                        </script>
                    <?php 
                    
                    $_SESSION['erro_login'] = null;
        }
        else
        {
                     ?>      
                        <script>
                            $(document).ready(function(){
                                $('#ModalErroSenhaLogin').modal('show');
                            });
                        </script>
                    <?php 
                    
                    $_SESSION['erro_login'] = null;
        }
    }
    else
    $_SESSION['erro_login'] = null;

    
    if($erro_cad == "1" || $erro_cad == "2" || $erro_cad == "3" || $erro_cad == "4")
    {
        if($erro_cad == "1")
        {
                     ?>      
                        <script>
                            $(document).ready(function(){
                                $('#ModalErroVazioCadastro').modal('show');
                            });
                        </script>
                    <?php 
                    
                    $_SESSION['erro_cad'] = null;
        }
        else if ($erro_cad == "2")
        {
                    ?>      
                    <script>
                        $(document).ready(function(){
                            $('#ModalErroSenhaDiferentes').modal('show');
                        });
                    </script>
                    <?php 
                    
                    $_SESSION['erro_cad'] = null;
        }
        else if ($erro_cad == "3")
        {
             
                ?>      
                <script>
                    $(document).ready(function(){
                        $('#ModalErroEmailCadastro').modal('show');
                    });
                </script>
                <?php
                $_SESSION['erro_cad'] = null;
        }
        else if($erro_cad == "4")
        {
                ?>
                <script>
                    $(document).ready(function(){
                        $('#ModalSucessoCadastro').modal('show');
                    });
                </script>
                <?php
                $_SESSION['erro_cad'] = null;
        }
    }
    else
    {
        $_SESSION['erro_cad'] = null;
    }


?>
    <?php
    $situacao_usuario = "pendente";
    if($situacao_usuario == "pendente"){ ?>
        <script>
            $(document).ready(function(){
                $('#myModal').modal('show');
            });
        </script>
    <?php } ?>


</body>

</html>