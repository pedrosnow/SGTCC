<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model{

    private $id_login;
    private $usuario;
    private $senha;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function logar(){
        $query = "SELECT * FROM tb_login WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':usuario', $this->__get('usuario'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

        if(!empty($usuario['id_login'])){
           
           $this->__set('id_login', $usuario['id_login']);

           return $this;
            
        }

    }

    public function cadastrando(){

        $query = "INSERT INTO tb_login (usuario, senha) VALUES(:usuario, :senha)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':usuario', $this->__get('usuario'));
        $stmt->bindValue(':senha', $this->__get('senha'));

        $stmt->execute();




    }

    public function validarUser(){

        $validar = true;

        if(empty($this->__get('usuario'))){
            $validar = false;
        }
        if(empty($this->__get('senha'))){
            $validar = false;
        }

        return $validar;
    }

}

