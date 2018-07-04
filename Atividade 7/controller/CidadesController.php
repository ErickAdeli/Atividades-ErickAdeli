<?php

namespace Controller;

use Model\Cidade;


class CidadesController{

	public function listar(){

		//acesso ao modelo
		$cidade = new Cidade();

		//Manipular os dados

		$lista = $cidade->all();

		//Invocar a View
		include './view/cidades/lista.php';

	}

	
}





  
 