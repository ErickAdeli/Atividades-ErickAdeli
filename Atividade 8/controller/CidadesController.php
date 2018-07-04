<?php

namespace Controller;

use Model\Cidade;
use Model\Estado;

class CidadesController{

	public function listar(){

		//acesso ao modelo
		$cidade = new Cidade();

		//Manipular os dados

		$lista = $cidade->all();

		//Invocar a View
		include './view/cidades/lista.php';

	}

		public function create() {
		
		$estados = new Estado;

		$lista = $estados->all();
		
		include './view/cidades/create.php';
	}
	public function store($request) {
		
		$nome = $request['nome'];
		$estado_id = $request['estado_id'];
		$cidade = new Cidade();
		$cidade->insert($nome, $estado_id);
	}

	
}





  
 