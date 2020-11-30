<?php
namespace _api\Classes;
class Fila{
    private $id, $hora, $usuario, $equipamento, $jogo;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getEquipamento(){
        return $this->equipamento;
    }

    public function setEquipamento($equipamento){
        $this->equipamento = $equipamento;
    }

    public function getJogo(){
        return $this->jogo;
    }

    public function setJogo($jogo){
        $this->jogo = $jogo;
    }
}
?>