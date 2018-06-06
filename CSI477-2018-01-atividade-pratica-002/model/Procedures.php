<?php

namespace Model;

use Model\Database

class Procedures{

	protected $db = null;
	private $id;
    private $name;
    private $price;
    private $user_id;

	public function __construct(){
		$this -> db = Database::getInstance()->getDB();
		$this -> id = 0;
	}

    public function __construct2($id, $nome, $price, $user_id){
        $this-> id = $id;
        $this-> name = $name;
        $this-> price = $price;
        $this-> user_id = $user_id;
    }

    public function __construct3($name, $price, $user_id){
        $this-> id = 0;
        $this-> name = $name;
        $this-> price = $price;
        $this-> user_id = $user_id;
    }
    public function __construct4($name, $price){
        session_start();
        $this-> id = $_SESSION['id'];
        $this-> name = $name;
        $this-> price = $price;
        $this-> user_id = $_SESSION['user_id'];
    }
    public function __construct5($name){
        $this-> id = $_SESSION['id'];
        $this-> name = $name;
        $this-> price =  $_SESSION['price'];
        $this-> user_id = $_SESSION['user_id'];
    }

	public function all(){

		$sql = "SELECT * FROM procedures ORDER BY name";
		return $this->db->query($sql);
	}

	public function setID($id){
		$this->id = $id;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPrice($price){
		$this->price = $price;
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
    	$sql = "INSERT INTO procedures (name, price, user_id, created_at, updated_at) VALUES ('" . $this->name . "','" . $this->price . "','" . $this->user_id . ")";
    	$this->db->query($sql);
    }

    public function update(){
    	$sql = "UPDATE procedures SET price = '" . $this->price . "' , updated_at = CURRENT_TIMESTAMP WHERE id = '" . $this->id . "' ";
    	$this->db->query($sql);
    }

    public function delete(){
    	$sql = "DELETE FROM procedures WHERE id ='" . $this->id. "'";
    	$this->db->query($sql);
    }


} 
