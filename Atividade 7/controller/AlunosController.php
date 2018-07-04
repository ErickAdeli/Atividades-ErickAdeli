<?php

namespace Controller;

use Model\Aluno;

class AlunosController {
	
	public function listar(){

		//acesso ao modelo
		$aluno = new Aluno();

		//Manipular os dados
		$lista = $aluno->all();

		//Invocar a View
		include './view/alunos/lista.php';

	}

}

