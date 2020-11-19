<?php
session_start();
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
    <?php if(isset($_GET['idPerfil'])){ $idclicado = $_GET['idPerfil'];}?>
</head>

<body>

    <nav class="navbar navbar-dark default-color ">
        <a href="index.html">
            <div class="logo">
                <img src="img/logo_temp.png" alt="FIFO Logo">
            </div>
        </a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <a href="" class="button" data-toggle="modal" data-target="#modal_editar_perfil">EDITAR PERFIL</a>
            <a href="" class="button" data-toggle="modal" data-target="#modalCadastroForm">SAIR</a>
        </form>
    </nav>

    <div class="container">
        <div class="col-md-12">
            <div>
                <!--            TODO alterar imagem-->
                <img src="img/blank.png" alt="FIFO" align="right">
            </div>
            <h2 align="left">O SITE 123 DE JOGOS DA FCÂMARA</h2>
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

    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>VEJA AS FILAS EM TEMPO REAL</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/ps4.jpg" alt="">

                            <div class="date-content">
                                <h6>4</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Videogame</h4>
                            <span>Sala de descompressão</span>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <!--<div class="text-button">
                                    <a href="#">Add to favorites</a>
                                </div>-->
                                </div>
                                <div class="col-md-6">
                                    <!--<div class="text-button">
                                    <a href="#">Continue Reading</a>
                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/ps4.jpg" alt="">

                            <div class="date-content">
                                <h6>6</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Videogame</h4>
                            <span>Escritório</span>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <!--<div class="text-button">
                                    <a href="#">Add to favorites</a>
                                </div>-->
                                </div>
                                <div class="col-md-6">
                                    <!--<div class="text-button">
                                    <a href="#">Continue Reading</a>
                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/flipp.jpg" alt="">

                            <div class="date-content">
                                <h6>3</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Videogame</h4>
                            <span>Fliperama</span>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <!--<div class="text-button">
                                    <a href="#">Add to favorites</a>
                                </div>-->
                                </div>
                                <div class="col-md-6">
                                    <!--<div class="text-button">
                                    <a href="#">Continue Reading</a>
                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/sinuca.jpg" alt="">

                            <div class="date-content">
                                <h6>2</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Videogame</h4>
                            <span>Mesa de jogos</span>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <!--<div class="text-button">
                                    <a href="#">Add to favorites</a>
                                </div>-->
                                </div>
                                <div class="col-md-6">
                                    <!--<div class="text-button">
                                    <a href="#">Continue Reading</a>
                                </div>-->
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
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/logo_temp.png" alt="FIFO Logo">
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, esse ipsam asperiores velit a
                            sequi neque laborum optio, modi ipsa reprehenderit. Veniam quam sint quisquam inventore
                            nobis commodi veritatis? Perspiciatis.</p>
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
                                <a href="https://www.glassdoor.com.br/Avalia%C3%A7%C3%B5es/Grupo-FCamara-Avalia%C3%A7%C3%B5es-E668818.htm"
                                    target="_blank">
                                    <svg id="glassdoor" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false"
                                        width="1em" height="1em"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path
                                            d="M17.144 20.572H3.43A3.427 3.427 0 0 0 6.856 24h10.286a3.428 3.428 0 0 0 3.428-3.428V6.492a.123.123 0 0 0-.124-.125h-3.18a.125.125 0 0 0-.123.126v14.08zm0-20.572a3.429 3.429 0 0 1 3.427 3.43H6.858v14.078a.126.126 0 0 1-.125.125H3.554a.125.125 0 0 1-.125-.125V3.428A3.429 3.429 0 0 1 6.856 0h10.287"
                                            fill="#fe662e" />
                                        <rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="sub-footer">
        <p>Copyright &copy; 2020 Fcamara
    </div>


    <!--MODAL EDITAR PERFIL-->

    <div class="modal fade" id="modal_editar_perfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="_api/funcao_editar_perfil.php" method="post">

                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">EDITAR PERFIL</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body mx-3">

                        <form method="post" action="../_api/api.php">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                        
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
                                    <input type="text" name="nome_perfil" class="form-control validate" placeholder="Nome" value="<?php echo $_SESSION['nome'] ; ?>">
                                
                                </div>

                                <div class="form-group col-md-12">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Apelido</label>
                                    <input type="text" name="apelido_perfil" class="form-control validate" placeholder="Apelido" value="<?php echo $_SESSION['apelido']; ?>">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">E-mail</label>
                                    <input type="email" name="email_perfil" class="form-control" placeholder="E-mail" value="<?php echo $_SESSION['email']; ?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Senha</label>
                                    <input type="text" name="senha_perfil" class="form-control" placeholder="Senha" value="<?php echo $_SESSION['senha'];?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Foto</label>
                                    <input type="file" name="foto_perfil" class="" placeholder="Foto" value="<?php echo $_SESSION['foto']; ?>">
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo que esta mudança não terá volta
                                    </label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="AtualizarPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-primary">ATUALIZAR</button>
                                <!--<button type="submit" name="ExcluirPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-danger">Excluir Conta</button>
                                -->
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--MODAL LOGIN-->

    <div class="modal fade" id="modalCadastroForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content">
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
                        <input type="submit" name="cadastro" class="button">
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
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>  
    <?php if(isset($_SESSION['UserMsg'])) {?>
    <script >
    swal({
    title: "<?php echo $_SESSION['alerta'];?>",
    text: "<?php echo $_SESSION['UserMsg'];?>",
    icon: "<?php echo $_SESSION['opt'];?>",
    button: "ok!",
    });
    </script>

    <?php } unset($_SESSION['UserMsg']); unset($_SESSION['opt']); unset($_SESSION['alerta']); unset($_SESSION['BuscarPerfil']); ?>


</body>

</html>