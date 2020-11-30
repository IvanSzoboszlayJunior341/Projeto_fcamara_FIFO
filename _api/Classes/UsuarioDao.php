<?php
namespace _api\Classes;

Class UsuarioDao
{
    public function read(Usuario $p){

        $sql = 'SELECT * From usuario WHERE idUsuario = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
         endif;            
       
    }       
    
}
?>