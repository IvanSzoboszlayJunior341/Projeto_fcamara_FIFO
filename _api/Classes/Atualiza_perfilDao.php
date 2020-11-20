<?php
namespace _api\Classes;
Class Atualiza_perfilDao{

    public function update(Usuario $p){

        $sql = 'UPDATE tb_usuario SET nome = ?, apelido = ?, email = ?, senha = ?, foto = ? WHERE idusuario = ?';
    
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getApelido());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->bindValue(5, $p->getImagem());
        $stmt->bindValue(6, $p->getId());
    
        $stmt->execute();
    
    
    }
    
    public function read() {
    
        $sql = 'SELECT * FROM produtos';
    
        $stmt = Conexao::getConn()->prepare($sql);
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