<?php


namespace APP\Models;

use MF\Model\Model;

class Estrutura extends Model{

    private $resumo;
    private $introducao;
    private $referencial;
    private $metodologia;
    private $analise;
    private $conclusoes;
    private $referencias;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }


    public function salvar(){
        $query = "INSERT INTO 
                    tb_estrutura (resumo, introducao, referencial, metodologia, analise, conclusoes, referencias)
                VALUES(:resumo, :introducao, :referencial, :metodologia, :analise, :conclusoes, :referencias)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':resumo', $this->__get('resumo'));
        $stmt->bindValue(':introducao', $this->__get('introducao'));
        $stmt->bindValue(':referencial', $this->__get('referencial'));
        $stmt->bindValue(':metodologia', $this->__get('metodologia'));
        $stmt->bindValue(':analise', $this->__get('analise'));
        $stmt->bindValue(':conclusoes', $this->__get('conclusoes'));
        $stmt->bindValue(':referencias', $this->__get('referencias'));

        $stmt->execute();

    }

    public function Validação(){

        $validar = true;

        if(empty($this->__get('resumo'))){
            $validar = false;
        }
        if(empty($this->__get('introducao'))){
            $validar = false;
        }
        if(empty($this->__get('referencial'))){
            $validar = false;
        }
        if(empty($this->__get('metodologia'))){
            $validar = false;
        }
        if(empty($this->__get('analise'))){
            $validar = false;
        }
        if(empty($this->__get('conclusoes'))){
            $validar = false;
        }
        if(empty($this->__get('referencias'))){
            $validar = false;
        }

        return $validar;

       
    }




}



