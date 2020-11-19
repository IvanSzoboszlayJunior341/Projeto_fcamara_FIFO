<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
</head>

</body>
    <?php
        include_once("conexao.php");

        //parametro da foto para inserir no banco
        $arquivo = $_FILES['arquivo']['name'];

        //Parametro Id do usuario
        $id = $_POST['id'];

        //Pasta onde o arquivo vai ser salvo
        $_UP['pasta'] = 'F:\\xampp\\htdocs\\fcamera\\_img\\';

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

        //Faz a verificação da extensao do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if(array_search($extensao, $extensoes)=== false){		
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/fcamera/perfil/'>
                <script type=\"text/javascript\">
                    alert(\"A imagem não foi cadastrada extesão inválida.\");
                </script>
            ";
        }
        //Faz a verificação do tamanho do arquivo --else
        if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/fcamera/perfil/'>
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

                $res = $pdo->prepare("update tb_usuario set foto='$nome_final' WHERE idusuario = $id");
                $res->execute();
            
                    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/fcamera/perfil/'>
                    <script type=\"text/javascript\">
                        alert(\"Imagem cadastrada com Sucesso.\");
                    </script>
                ";	

            }else{
                //Upload não efetuado com sucesso, exibe a mensagem
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/fcamera/perfil/'>
                    <script type=\"text/javascript\">
                        alert(\"Imagem não foi cadastrada com Sucesso.\");
                    </script>
                ";
            }
        }

    ?>
</body>
</html>