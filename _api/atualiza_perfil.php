<?php
session_start();
require __DIR__ . "/../vendor/autoload.php";

if(isset($_POST['AtualizarPerfil'])){

  

    $user = new \_api\Classes\Usuario();
    $user->setEmail($_POST['email_perfil']);
    $user->setNome($_POST['nome_perfil']);
    $user->setSenha($_POST['senha_perfil']);
    $user->setId($_SESSION['idusuario']);
    

    //parametro da foto para inserir no banco
    $arquivo = $_FILES['arquivo']['name'];

    //Pasta onde o arquivo vai ser salvo
    $_UP['pasta'] = '..\\img\\';

    //Tamanho máximo do arquivo em Bytes
    $_UP['tamanho'] = 1024*1024*100; //5mb

    //Array com a extensões permitidas
    $extensoes =array('png', 'jpg', 'jpeg', 'gif');

    //Renomeiar
    $_UP['renomeia'] = false;

    //Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
    if($_FILES['arquivo']['error'] != 0){
        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; //Para a execução do script
    }
        // Pega a extensão
        $extensao = pathinfo ( $arquivo, PATHINFO_EXTENSION );
 
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao);
   
        if(array_search($extensao, $extensoes)=== false){		
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_fcamera/index_fila.php'>
                <script type=\"text/javascript\">
                    alert(\"A imagem não foi cadastrada extesão inválida.\");
                </script>
            ";
        }
        //Faz a verificação do tamanho do arquivo --else
        if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_fcamera/index_fila.php'>
                <script type=\"text/javascript\">
                    alert(\"Arquivo muito grande.\");
                </script>
            ";
        }

        //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
        else{
            //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
            $nome_final = time().'.jpg';
            
            //Verificar se é possivel mover o arquivo para a pasta escolhida
            if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
                
                //Upload efetuado com sucesso, exibe a mensagem
                    $user->setImagem($nome_final);

                    $Atualiza_perfilDao = new \_api\Classes\Atualiza_perfilDao();
                    $Atualiza_perfilDao->update($user);
               
            
                    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_fcamera/index_fila.php'>
                    <script type=\"text/javascript\">
                        alert(\"Imagem cadastrada com Sucesso.\");
                    </script>
                ";	

            }else{
                //Upload não efetuado com sucesso, exibe a mensagem
               echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_fcamera/index_fila.php'>
                    <script type=\"text/javascript\">
                        alert(\"Imagem não foi cadastrada com Sucesso.\");
                    </script>
                ";
            }
        }
    }
    
        
        
      
?>