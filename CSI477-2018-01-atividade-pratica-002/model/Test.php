<?php

namespace Model;

use Model\Database;

class Test{

	protected $db = null;
    private $id;
    private $user_id;
    private $date;
    private $procedure_id;

    public function __construct(){
    	$this->db = Database::getInstance()->getDB();
    	$this -> id = 0;
    }

    public function __construct2($id, $user_id, $procedure_id,$date){
    $this->id = $id;
    $this->user_id = $user_id;
    $this->procedure_id = $procedure_id;
    $this->date = $date;
    }

    public function all(){
        
        $sql = "SELECT tests.id, tests.user_id, tests.procedure_id ,procedures.name,tests.date FROM  tests, procedures WHERE tests.user_id = '" . $this->user_id . "' AND  tests.procedure_id = procedures.id ";
        return $this->db->query($sql);
    }

    public function setID($id){
		$this->id = $id;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function setProcedure_id($procedure_id){
		$this->procedure_id = $procedure_id;
	}

	public function setUser_id($user_id){
		$this->user_id = $user_id;
	}

	public function save(){
    	if ( $this->id == 0 ){
      		$this->insert();
    	}
    	else{
      		$this->update();
    	}
  	}

  	public function insert(){
        $sql = "INSERT INTO tests (user_id,procedure_id, date, created_at, updated_at) VALUES ('" . $this->user_id . "','" . $this->procedure_id . "','" . $this->date . ")";
        $this->db->query($sql);
    }

    public function delete(){
        $sql = "DELETE FROM tests WHERE id='" . $this->user_id . "'";
        $this->db->query($sql);
    }

    public function update(){
        $sql = "UPDATE tests SET user_id ='" . $this->user_id . "' ,procedure_id= '" . $this->procedure_id . "' , date = '" . $this->date . "',  updated_at= CURRENT_TIMESTAMP WHERE id= '" . $this->id . "'";
        $this->db->query($sql);
    }

    public function relatorio(){
        $sql = "SELECT users.name, procedures.name AS procedures, procedures.price  FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ";      
        return $this->db->query($sql);
    }


}


