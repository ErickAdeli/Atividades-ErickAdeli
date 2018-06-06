<?php

namespace Model;

use Model\Database;

class user{

	protected $db = null;
    private $id;
    private $name;
    private $email;
    private $password;
    private $remember_token;
    private $type;

    public function __construct(){
        $this->db = Database::getInstance()->getDB();
        $this->id = 0;
    }

    public function __construct2($id, $name, $email, $password, $type){
        $this-> id = $id;
        $this-> name = $name;
        $this-> email = $email;
        $this-> password= $password;
        $this-> type= 3;
    }

    public function __construct3($name, $email, $password, $type){
        $this-> id = 0;
        $this-> name = $name;
        $this-> email = $email;
        $this-> password = $password;
        $this-> type= 3;
    }
    public function __construct4($name, $email, $password){
        $this-> id = 0;
        $this-> name = $name;
        $this-> email = $email;
        $this-> password = $password;
        $this-> type= 3;
    }

    public function all(){
        $sql = "SELECT * FROM users ";
        return $this->db->query($sql);
    }

    public function setID($id){
		$this->id = $id;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setRemember_token($remember_token){
		$this->remember_token = $remember_token;
	}

	public function setType($type){
		$this->type = $type;
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
        $sql = "INSERT INTO users (name,email, password, type, remember_token, created_at, updated_at) VALUES ('" . $this->name . "','" . $this->email . "','" . $this->password . "', '" . $this->type . "' ,'" . $this->remember_token .")";
        $this->db->query($sql);
    }
    public function update() {
        $sql = "UPDATE users SET name = '" . $this->name . "' , email = '" . $this->email . "', password =  '" . $this->name . "', type= '" . $this->name . "' , remember_token = '" . $this->name . "', updated_at= CURRENT_TIMESTAMP WHERE id = '" . $this->id . "'";
        $this->db->query($sql);
    }


}
