<?php

namespace App\Models;

use MF\Model\Model;


class Orientacao extends Model{

    private $id_orientacao;
    private $orientador;
    private $aluno;
    private $texto;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function salvarorientacao(){
        $query = "INSERT INTO 
                        tb_orientacao (orientador, aluno, texto)
                    VALUES
                        (:orientador, :aluno, :texto)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':orientador', $this->__get('orientador'));
        $stmt->bindValue(':aluno', $this->__get('aluno'));
        $stmt->bindValue(':texto', $this->__get('texto'));

        $stmt->execute();


    }


}



