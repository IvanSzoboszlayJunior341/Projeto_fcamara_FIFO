<?php
session_start();
if(isset($_SESSION['idusuario']))	//verifica se sessao foi setada
{

}else{															

    header("location:index.php"); //se nao foi então manda para index.html
}
$erro_edit = 0;
if(isset($_SESSION['erro_editar']) && !empty($_SESSION['erro_editar'])):
    $erro_edit = $_SESSION['erro_editar'];
endif;

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



    <div class="espaco_grid">
        <form id="editar_perfil" action="_api/atualiza_perfil.php" method="POST" enctype="multipart/form-data">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <?php echo "<img id='img_perfil_usuario' alt='FIFO Logo'  src='img/".$foto."'>"; ?>
                                </div>
                                <div class="alterar_foto_button">
                                    
                                    <label  for="fotoo"  title="Mudar Foto">
                                        <a class="button_alterar_foto" >ALTERAR FOTO</a>
       
                                    </label> 
                                    <input name="arquivo" type="file" id="fotoo" hidden>
                                </div>
  
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                            <H3 id="titulo_editar_perfil">EDITAR PERFIL</H3>
                                      
                                            <h5 id="subtitulo_espaco">INFORMAÇÕES PESSOAIS</h5>
                                            
                                        <div>
                                            <label for="formGroupExampleInput2">Como você quer ser chamado</label>
                                            <input required value="<?php echo $nome ?>" name="nome_perfil" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome" value="a">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group " id="div_email" >
                                            <label for="formGroupExampleInput2">Email *</label>
                                            <input required value="<?php echo $email ?>" name="email_perfil" type="text" class="form-control" id="formGroupExampleInput2" placeholder="email">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                        </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 id="subtitulo_espaco"> SUA SENHA</h5>

                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Sua senha atual </label>
                                            <input name="senha_atual_perfil" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Senha atual">
                                        </div> 

                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nova senha</label>
                                            <input name="senha_perfil" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Nova senha">
                                        </div> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group " id="div_repetir_senha">
                                            <label for="formGroupExampleInput2">Repetir nova senha *</label>
                                            <input name="senha_conf_perfil" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Repetir nova senha">
                                        </div>
                                        <div class="row">
                                            <div>
                                                <a href="index_fila.php" class="d-none d-lg-block" id="button_CANCELAR">CANCELAR</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn button_salvar" data-toggle="modal" data-target="#modal_salvar">SALVAR ALTERAÇÕES</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php include 'layout/footer.php';?>

    <!--MODAL salvar -->
    <div class="modal fade" id="modal_salvar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content modal_tamanho_cor">
                <div class=" text-center ">
                    <h5 class="modal-title w-100 font-weight-bold modal_titulo">Confirma que deseja<br> salvar suas alterações?</h5>
                    <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                        <img src="img/close.png"  class="modal_icone_close">
                    </button> -->
                </div>
                <div class="modal-body mx-3 ">   
                    <h6 class="cor_braco" id="modal_texto_h7">Elas não poderão ser desfeitas.</h6>
                        <button type="button" class="btn button_salvar_modal" data-dismiss="modal">RETONAR</button>
                        <button form="editar_perfil" type="submit" class="btn button_salvar_modal" >SALVAR</button>   
                    </div>
            </div>
        </div>
    </div>

    <!--Modal erro email ja existente-->
    <div class="modal fade" id="modal_email_existe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                        <h6 class="modal_erro_texto">Este E-mail já esta sendo usado</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--Modal erro senha atual-->
     <div class="modal fade" id="modal_senha_atual_errada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    <h6 class="modal_erro_texto">A senha atual esta errada</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--Modal erro senha diferente-->

    <div class="modal fade" id="modal_senha_diferente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    <h6 class="modal_erro_texto">As senhas não estão iguais</h6>
                <div class=" d-flex justify-content-center">
                </div>
                </div>
            </div>
        </div>
    </div>

  <!--Modal erro imagem -->

    <div class="modal fade" id="modal_erro_imagem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    <h6 class="modal_erro_texto">As senhas não estão iguais</h6>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                <H4 class="cor_braco modal_salvar_fila_texto">Edição<br> feita com<br> Sucesso</H4>
                                
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center">
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
    

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script>
        $(function(){
        $('#fotoo').change(function(){
            const file = $(this)[0].files[0]
            const fileReader = new FileReader()
            fileReader.onloadend = function(){
                $('#img_perfil_usuario').attr('src',fileReader.result)
            }
            fileReader.readAsDataURL(file);
             })
        })
    </script>
<?php
if($erro_edit == 1){?>
<script>
    $(document).ready(function(){
        $('#modal_email_existe').modal('show');
    });
</script>
<?php $_SESSION['erro_editar'] = 0 ;
}elseif($erro_edit == 2){ ?>
<script>
    $(document).ready(function(){
        $('#modal_senha_atual_errada').modal('show');
    });
</script>
<?php $_SESSION['erro_editar'] = 0 ;
 }elseif($erro_edit == 3){ ?>
 <script>
    $(document).ready(function(){
        $('#modal_senha_diferente').modal('show');
    });
</script>
<?php $_SESSION['erro_editar'] = 0 ;
 }elseif($erro_edit == 4){ ?>
    <script>
        $(document).ready(function(){
            $('#modal_erro_imagem').modal('show');
        });
    </script>
 <?php $_SESSION['erro_editar'] = 0 ;
}elseif($erro_edit == 5){?>
    <script>
        $(document).ready(function(){
            $('#sucesso').modal('show');
        });
    </script>
<?php $_SESSION['erro_editar'] = 0 ;
}?>
</html>