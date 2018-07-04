<?php

namespace Model;

use Model\Database;

class Cidade {

  protected $db = null;

  public function __construct() {

    $this->db = Database::getInstance()->getDB();

  }

  public function all() {

    $sql = "SELECT * FROM cidades ORDER BY nome";

    return $this->db->query($sql);
  }

  public function insert($nome, $estado_id) {
		$sql = "INSERT INTO cidades (nome, estado_id) VALUES ('$nome', '$estado_id')";
	  $this->db->query($sql);
	}
  
}