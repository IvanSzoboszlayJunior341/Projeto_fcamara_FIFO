<?php
namespace _api\Classes;

Class LoginDao
{
    public function read(Usuario $p){

        $sql = 'SELECT * From tb_usuario WHERE email = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmail());
        $stmt->execute();

        if($stmt->rowCount() > 0){
            while($linha = $stmt->fetch(\PDO::FETCH_ASSOC)){
               if($linha['senha'] == $p->getSenha()){
                $resultado = 0;
                return $resultado;
               }
               else
               {
                   $resultado = 1;
                   return $resultado;
               }
            }            
        }
        else
        {
            $resultado = 2;
            return $resultado;
        }
    }       
    
}
?>