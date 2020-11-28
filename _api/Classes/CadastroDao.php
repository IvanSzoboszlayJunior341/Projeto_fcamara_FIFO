<?php
namespace _api\Classes;
class CadastroDao{

    public function create(Usuario $p){
        $sql = 'INSERT INTO usuario (idUsuario, Nome, Senha, Email, Foto) VALUES (Null, ?, ?, ?, "perfil.png")';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getSenha());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->execute();
    }

    public function read(Usuario $p){

        $sql = 'SELECT * From usuario WHERE Email = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmail());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = true;
            return $resultado;
        else:
            $resultado = false;
            return $resultado;
        endif;            
    }
}
?>