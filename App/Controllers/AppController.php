<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{
    
    public function home(){

        session_start();
        
        if(isset($_SESSION['id'])){

            $this->render('home');
            
        }else{

            header('Location: /');


        }


    }

    public function orientacoes(){

        session_start();
        
        if(isset($_SESSION['id'])){

            $this->render('orientacao');
            
        }else{

            header('Location: /');


        }

        
    }

    public function salvarorientacao(){

        session_start();

        if(isset($_SESSION['id'])){


            $Orientacao = Container::getModel('Orientacao');

            $Orientacao->__set('orientador', $_POST['orientador']);
            $Orientacao->__set('aluno', $_POST['Aluno']);
            $Orientacao->__set('texto', $_POST['orientacoes']);
    
            $Orientacao->salvarorientacao();
    
            header('Location: /orientacoes');
    

        }else{

            header('Location: /');

        }

       


    }

    public function estrutura(){

        session_start();

        if(isset($_SESSION['id'])){
            
            $this->render('estrutura');

        }else{

            header('Location: /');


        }



    }

    public function salvarEstrutura(){

       session_start();

       if(isset($_SESSION['id'])){

        $Estrutura = Container::getModel('Estrutura');

        $Estrutura->__set('resumo', $_POST['resumo']);
        $Estrutura->__set('introducao', $_POST['introducao']);
        $Estrutura->__set('referencial', $_POST['referencial']);
        $Estrutura->__set('metodologia', $_POST['metodologia']);
        $Estrutura->__set('analise', $_POST['analise']);
        $Estrutura->__set('conclusoes', $_POST['conclusoes']);
        $Estrutura->__set('referencias', $_POST['referencias']);

    
        if($Estrutura->Validação()){
            
            $Estrutura->salvar();
            Header('Location: /estrutura?sucesso');   

        }else{

            $this->view->status = 'erro';

            Header('Location: /estrutura?erro&resumo=' . $Estrutura->__get('resumo') . '&introducao=' . $Estrutura->__get('introducao') . '&referencial=' .  $Estrutura->__get('referencial') . '&metodologia=' .  $Estrutura->__get('metodologia') . '&analise=' .  $Estrutura->__get('analise') . '&conclusoes=' .  $Estrutura->__get('conclusoes') . '&referencias=' .  $Estrutura->__get('referencias'));   

        }



       }else{

            header('Location: /');

       }

    


    }

}

