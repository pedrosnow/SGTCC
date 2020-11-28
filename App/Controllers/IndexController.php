<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function logar(){

		$usuario = Container::getModel('usuario');

		$usuario->__set('usuario', $_POST['Usuario']);
		$usuario->__set('senha', $_POST['Senha']);

		$usuario->logar();

		if(!empty($usuario->__get('id_login')) && !empty($usuario->__get('senha'))){

			session_start();
			
			$_SESSION['id'] = $usuario->__get('id_login');
			$_SESSION['usuario'] = $usuario->__get('usuario');
			
			header('Location: /home');

			
	
		 }else{
			
			header('Location: /');
	
		 }
	


	}

	public function sair(){

		session_start();
		session_destroy();
		header('Location: /');

	}
	public function cadastrar(){

		$this->render('cadastro');

	}

	public function cadastrando(){

		$usuario = Container::getModel('usuario');

		$usuario->__set('usuario', $_POST['Usuario']);
		$usuario->__set('senha', $_POST['Senha']);

		
		if($usuario->validarUser()){
			
			$usuario->cadastrando();

			header('Location: /cadastrar?sucesso');

		}else{

			header('Location: /cadastrar?erro');

		}


	}

}


?>