<?php
namespace _api\Classes;
Class FilaDao{

    public function create(Fila $p) {	
		
        $sql = 'INSERT INTO fila (Hora, Jogo, Usuario_idUsuario, Equipamento_idequipamento) VALUES (?,?,?,?)';

		$stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getHora());
        $stmt->bindValue(2, $p->getJogo());
        $stmt->bindValue(3, $p->getUsuario());
        $stmt->bindValue(4, $p->getEquipamento());
		$stmt->execute();

    }
    
    public function read1() {

		$sql = 'SELECT `fila`.*, `usuario`.*
        FROM `fila` 
            LEFT JOIN `usuario` ON `fila`.`Usuario_idUsuario` = `usuario`.`idUsuario` where Equipamento_idequipamento = 1';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function read2() {

		$sql = 'SELECT `fila`.*, `usuario`.*
        FROM `fila` 
            LEFT JOIN `usuario` ON `fila`.`Usuario_idUsuario` = `usuario`.`idUsuario` where Equipamento_idequipamento = 2';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function read3() {

		$sql = 'SELECT `fila`.*, `usuario`.*
        FROM `fila` 
            LEFT JOIN `usuario` ON `fila`.`Usuario_idUsuario` = `usuario`.`idUsuario` where Equipamento_idequipamento = 3';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;


	}

	public function read4() {

		$sql = 'SELECT `fila`.*, `usuario`.*
        FROM `fila` 
            LEFT JOIN `usuario` ON `fila`.`Usuario_idUsuario` = `usuario`.`idUsuario` where Equipamento_idequipamento = 4 ';

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

		$sql = 'DELETE FROM fila WHERE Usuario_idUsuario = ? and Equipamento_idequipamento = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getUsuario());
		$stmt->bindValue(2, $p->getEquipamento());
		$stmt->execute();

	}

	public function read_dentro(Fila $p){

		$sql = 'SELECT * FROM fila where Usuario_idUsuario = ? && Equipamento_idequipamento = ?';
            

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
        FROM `fila` where Equipamento_idequipamento = 1';

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
        FROM `fila` where Equipamento_idequipamento = 2';

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
        FROM `fila` where Equipamento_idequipamento = 3';

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
        FROM `fila` where Equipamento_idequipamento = 4';

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