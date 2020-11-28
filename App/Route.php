<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['index'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['logar'] = array(
			'route' => '/logar',
			'controller' => 'indexController',
			'action' => 'logar'
		);

		$routes['home'] = array(
			'route' => '/home',
			'controller' => 'AppController',
			'action' => 'home'
		);

		$routes['orientacao'] = array(
			'route' => '/orientacoes',
			'controller' => 'AppController',
			'action' => 'orientacoes'
		);
		$routes['salvarorientacao'] = array(
			'route' => '/salvar-orientacao',
			'controller' => 'AppController',
			'action' => 'salvarorientacao'
		);

		$routes['estrutura'] = array(
			'route' => '/estrutura',
			'controller' => 'AppController',
			'action' => 'estrutura'
		);

		$routes['saveestrutura'] = array(
			'route' => '/saveEstrutura',
			'controller' => 'AppController',
			'action' => 'salvarEstrutura'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'indexController',
			'action' => 'sair'
		);
		
		$routes['cadastrar'] = array(
			'route' => '/cadastrar',
			'controller' => 'indexController',
			'action' => 'cadastrar'
		);

		$routes['cadastrando'] = array(
			'route' => '/cadastrando',
			'controller' => 'indexController',
			'action' => 'cadastrando'
		);

		$this->setRoutes($routes);
	}

}

?>