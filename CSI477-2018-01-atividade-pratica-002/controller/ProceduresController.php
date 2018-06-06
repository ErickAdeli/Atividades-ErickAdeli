<?php  

namespace Controller;

use Model\Procedure;

use Model\User;

use Model\Test;

class ProceduresController{

	public function listar(){

		//acesso ao modelo
		$procedure = new Procedure();

		//Manipular os dados

		$lista = $procedure->all();

		//Invocar a View
		include './view/proceure/lista.php';

	}

	
	public function create(){
		
	 	$user = new User;
	 	$lista = $user->all();
		include './view/user/create.php';

	}

	public function delete($request) {
        $id = $request['id'];
        $procedure = new Procedure();
        $procedure->setId($id);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($procedure->delete()) {
            $_SESSION['updated_op'] = "Procedimento excluido com sucesso";
        } else {
            $_SESSION['NOTupdated_op'] = "Falha! Esse procedimento possui exames agendados";
        }
        header("Location: router.php?op=107");
        die();
    }
    public function update($request) {
        $id = $request['id'];
        $price = $request['price'];
        $procedure = new Procedure();
        $procedure->setId($id);
        $procedure->setPrice($price);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($procedure->update()) {
            $_SESSION['updated_op'] = "Preço atualizado com sucesso";
        } else {
            $_SESSION['NOTupdated_op'] = "Falha ao atualizar preço";
        }
        header("Location: router.php?op=106");
        die();
    }

	public function store($request){

	 	$name = $request['name'];
	 	$price = $request['price'];
	 	$procedure = new Procedure();
	 	$procedure->setName($name);
	 	$procedure->setPrice($price); 
	 	$procedure->save();
	 	

	 	session_start();
	 	$_SESSION['mensagem'] = "Procedimento adicionado com sucesso!";
	 	//$_COOKIE[''] pode ser usado também

	 	//this->listar();
	 	//$cidade->listar();

	 	$this->redir();

	 }

	private function redir() {

		header("Location: http://localhost:8080");
	 	exit();

	}
}

