<?php
namespace _api\Classes;
Class FilaDao{

    public function create(Fila $p) {	
		
        $sql = 'INSERT INTO tb_fila(hora, status, fk_usuario, fk_equipamento) VALUES (?,?,?,?)';

		$stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getHora());
        $stmt->bindValue(2, $p->getStatus());
        $stmt->bindValue(3, $p->getUsuario());
        $stmt->bindValue(4, $p->getEquipamento());
		$stmt->execute();

    }
    
    public function read() {

		$sql = 'SELECT `tb_fila`.*, `tb_usuario`.*
        FROM `tb_fila` 
            LEFT JOIN `tb_usuario` ON `tb_fila`.`fk_usuario` = `tb_usuario`.`idusuario`';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function delete(Fila $p) {

		$sql = 'DELETE FROM tb_fila WHERE fk_usuario = ? and fk_equipamento = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getUsuario());
		$stmt->bindValue(2, $p->getEquipamento());
		$stmt->execute();

	}

	public function read_dentro(Fila $p){

		$sql = 'SELECT * FROM tb_fila where fk_usuario = ? && fk_equipamento = ?';
            

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getUsuario());
		$stmt->bindValue(2, $p->getEquipamento());
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = true;
			return $resultado;
		else:
			$resultado = false;
			return $resultado;
		endif;


	}

	public function readFila1() {

		$sql = 'SELECT *
        FROM `tb_fila` where fk_equipamento = 1';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function readFila2() {

		$sql = 'SELECT *
        FROM `tb_fila` where fk_equipamento = 2';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function readFila3() {

		$sql = 'SELECT *
        FROM `tb_fila` where fk_equipamento = 3';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function readFila4() {

		$sql = 'SELECT *
        FROM `tb_fila` where fk_equipamento = 4';

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