<<?php 

namespace Controller;

use Model\Procedure;

use Model\User;

use Model\Test;

class TestsController{

    public function listar(){

        //acesso ao modelo
        $test = new Test();

        //Manipular os dados

        $lista = $test->all();

        //Invocar a View
        include './view/tests/read.php';

    }

    
    public function create(){
        
        $user = new User;
        $procedures = new Procedure();
        $lista = $user->all();
        $lista2 = $procdures->all();
        include './view/tests/create.php';

    }

    public function delete($request){
        $id = $request['id'];
        $test = new Test();
        $test->setUser_id($user_id);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($test->delete()) {
            $_SESSION['deleted'] = "Exame desmarcado com sucesso!";
        } else {
            $_SESSION['NOTdeleted'] = "Falha ao desmarcar exame!";
        }
        
        $this->listar();
    }
    public function update($request){
        $id = $request['id'];
        $user_id = $request['user_id'];
        $procedure_id = $request['procedure_id'];
        $date = $request['date'];
        $test = new Test();

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($test->update()) {
            $_SESSION['updated'] = "Exame remarcado com sucesso!";
        } else {
            $_SESSION['NOTupdated'] = "Falha ao remarcar exame!";
        }
      $this->listar();
    }

    public function store($request){

        $user_id = $request['user_id'];
        $procedure_id = $request['procedure_id'];
        $date = $request['date'];
        $test = new Test();
        

        session_start();
        $_SESSION['mensagem'] = "Exame agendado com sucesso!";
        //$_COOKIE[''] pode ser usado também

        //this->listar();
        //$cidade->listar();

        $this->listar();

     }
  
}


 