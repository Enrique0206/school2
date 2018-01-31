<?php
namespace App\Controller;

class HomeController extends AppController{
	
	// /cakephp/home/index o cakephp/home
	public function index (){
		//renderiza la vista /template/home/index.ctp
		
		//agregando bienvenida al home
		$usuario = "Enrique Condori";
		$this->set('nombres', $usuario);
	}
	
}
