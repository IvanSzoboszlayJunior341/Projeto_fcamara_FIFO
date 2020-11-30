
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
<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <title> Calendário Eventos e Board Games </title>
    
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    
    <!-- script de tradução -->
    <script src='fullcalendar/lang/pt-br.js'></script>
        
    <script>
       $(document).ready(function() {	
           	
            //CARREGA CALENDÁRIO E EVENTOS DO BANCO
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2020-11-20',
                editable: true,
                eventLimit: true, 
                events: 'eventos.php',           
                eventColor: '#FFA500'
            });	
            
            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {   
                        if(data == "1"){
                            alert("Cadastrado com sucesso! ");
                            //atualiza a página!
                            location.reload();
                        }else{
                            alert("Houve algum problema.. ");
                        }
                    }
                });                
                return false;
            });	
	   }); 
                
    </script>
    
    <style>
        #calendario{
            position: relative;
            width: 50%;
            margin: 0px auto;
        }        
    </style>
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
    <div id='calendario'>
        <br/>
        <form id="novo_evento" action="" method="post">
            Nome do Evento ou Board Game: <input type="text" name="nome" required/><br/><br/>            
            Data do Evento ou Board Game: <input type="date" name="data" required/><br/><br/>            
            <button type="submit"> Agendar novo evento ou board game </button>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
