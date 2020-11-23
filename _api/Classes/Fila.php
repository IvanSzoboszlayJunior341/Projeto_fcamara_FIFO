<?php
namespace _api\Classes;
class Fila{
    private $id, $hora, $status, $usuario, $equipamento;

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

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
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
}
?>