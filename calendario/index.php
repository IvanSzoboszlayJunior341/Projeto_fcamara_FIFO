<?php
session_start();
if(isset($_SESSION['idusuario']))	//verifica se sessao foi setada
{

}else{															
    header("location:../index.php"); //se nao foi então manda para index.html
}
require __DIR__ . "/../vendor/autoload.php";
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
        <title>Calendário de Atividades</title>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">

        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>
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
                        <img src="../img/LOGO_BRANCA.png" id="img_logo" alt="FIFO Logo">
                    </div>
                </a>
            </div>
            <div class="col-md-4">
            <div class="btn-group dropdowns_btn  ">
                        <button type="button" class="btn dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/Vector.png">
                        </button>

                        <div class="dropdown-menu header_dropdowns">
                            <a class="dropdown-item header_dropdowns" href="../index_fila.php">Página inicial</a>
                            <a class="dropdown-item header_dropdowns" href="../editar_perfil.php">Editar perfil</a>
                            <a class="dropdown-item header_dropdowns" href="index.php">Calendário</a>
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
                        <?php echo "<img id='perfil' alt='FIFO Logo'  src='../img/".$foto."'>"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div id='coluna1_calendario'>
        <div id='calendar'></div>

        <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhe da Atividade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="visevent">
                            <dl class="row">

                                <dt class="col-sm-3">Título</dt>
                                <dd class="col-sm-9" id="title"></dd>

                                <dt class="col-sm-3">Início</dt>
                                <dd class="col-sm-9" id="start"></dd>

                                <dt class="col-sm-3">Fim</dt>
                                <dd class="col-sm-9" id="end"></dd>
                            </dl>
                            <button class="btn btn-warning btn-canc-vis">Editar</button>
                            <a href="" id="apagar_evento" class="btn btn-danger">Apagar</a>
                        </div>
                        <div class="formedit">
                            <span id="msg-edit"></span>
                            <form id="editevent" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" >
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Nome da atividade">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Cores</label>
                                    <div class="col-sm-10">
                                        <select name="color" class="form-control" id="color">
                                            <option value="">Selecione</option>			
                                            <option style="color:#5CB0FE;" value="#5CB0FE">Azul</option>
                                            <option style="color:#A5F9D0;" value="#A5F9D0">Verde</option>
                                            <option style="color:#B69D94;" value="#B69D94">Tigro</option>
                                            <option style="color:#E1AAF4;" value="#E1AAF4">Roxo</option>	
                                            <option style="color:#E9E6A0;" value="#E9E6A0">Oliveira</option>
                                            <option style="color:#FE885C;" value="#FE885C">Laranja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Início</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Final</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                                        <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-warning">Salvar</button>                                    
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Que atividade você quer cadastrar hoje ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-cad"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Nome do atividade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cores</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <option style="color:#5CB0FE;" value="#5CB0FE">Azul</option>
                                        <option style="color:#A5F9D0;" value="#A5F9D0">Verde</option>
                                        <option style="color:#B69D94;" value="#B69D94">Tigro</option>
                                        <option style="color:#E1AAF4;" value="#E1AAF4">Roxo</option>	
                                        <option style="color:#E9E6A0;" value="#E9E6A0">Oliveira</option>
                                        <option style="color:#FE885C;" value="#FE885C">Laranja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Final</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id='coluna2_calendario'>
        
        <p><center><button type="button" class="btn btn-primary btn-lg active medio" role="button" aria-pressed="true" data-toggle="modal" data-target="#cadastrar">Agendar um Atividade</button></center></p>
        <p><center><a href="relatorio.php" class="btn btn-primary btn-lg active medio" role="button" aria-pressed="true">Imprimir Atividades</a></center></p>
        
        
    </div>
        
     <!-- Sair -->
     <div class="modal fade" id="modal_sair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="" method="post">
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
                        <a href="../_api/sair.php"><button  type="button" class="btn button_salvar_modal modal_sair_fila_button">SAIR</button></a>
                        
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>
