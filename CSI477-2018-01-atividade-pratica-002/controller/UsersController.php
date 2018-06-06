<<?php 

namespace Controller;

use Model\Procedure;

use Model\User;

use Model\Test;

class UsersController{

    public function listar(){

        //acesso ao modelo
        $user = new User();

        //Manipular os dados

        $lista = $user->all();

        //Invocar a View
        include './view/user/read.php';

    }

    
    public function create(){
        
        $user = new User;
        $lista = $user->all();
        include './view/users/create.php';

    }
    
    }
    public function update($request){
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];
        $type = $request['type'];
        $user = new User();
        $user->update();
    }

    public function store($request){

        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];
        $user = new User();
        

        session_start();
        $_SESSION['mensagem'] = "Usuario adicionado com sucesso!";
        //$_COOKIE[''] pode ser usado também

        //this->listar();
        //$cidade->listar();

        die();
     }
  
}