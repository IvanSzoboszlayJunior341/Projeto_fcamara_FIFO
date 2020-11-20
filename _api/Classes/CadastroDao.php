<?php
namespace _api\Classes;
class CadastroDao{

    public function create(Usuario $p){
        $sql = 'INSERT INTO tb_usuario (nome, apelido, email, senha, foto) VALUES ( ?, ?, ?, ?, "perfil.jpg")';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getApelido());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->execute();
    }

    public function read(Usuario $p){

        $sql = 'SELECT * From tb_usuario WHERE email = ?';

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