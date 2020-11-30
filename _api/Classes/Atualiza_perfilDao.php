<?php
namespace _api\Classes;
Class Atualiza_perfilDao{

    public function updateFoto(Usuario $p){

        $sql = 'UPDATE usuario SET Nome = ?, Email = ?, Senha = ?, Foto = ? WHERE idUsuario = ?';
    
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEmail());
        $stmt->bindValue(3, $p->getSenha());
        $stmt->bindValue(4, $p->getImagem());
        $stmt->bindValue(5, $p->getId());
    
        $stmt->execute();
    
    
    }

    public function update(Usuario $p){

        $sql = 'UPDATE usuario SET Nome = ?, Email = ?, Senha = ? WHERE idUsuario = ?';
    
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEmail());
        $stmt->bindValue(3, $p->getSenha());
        $stmt->bindValue(4, $p->getId());
    
        $stmt->execute();
    
    
    }

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

    public function reademail(Usuario $p){

        $sql = 'SELECT * From usuario WHERE Email = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmailc());
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