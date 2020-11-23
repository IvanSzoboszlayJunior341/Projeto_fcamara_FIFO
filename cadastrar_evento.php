<?php 

        include "conexao.php";
                            
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        
        $query = "INSERT INTO `eventos` (`title`, `start`) VALUES ('$nome', '$data')";
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>