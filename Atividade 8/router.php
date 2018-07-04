<?php

// Includes - framework
include './model/Aluno.php';
include './model/Cidade.php';
include './model/Estado.php';
include './model/Database.php';
include './controller/EstadosController.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';

// Tratamento das rotas
use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;

$op = $_GET['op'];

// Definição das rotas
if ( $op == 1 ) {
	$alunoController = new AlunosController;
  	$alunoController->listar();
}
if($op == 2){
	$estadoController = new EstadosController;
	$estadoController->listar();
}
if($op == 3){
	$cidadeController = new CidadesController;
	$cidadeController->listar();
}

if($op == 4){
	$alunoController = new AlunosController;
  	$alunoController->create();
}

if($op == 5){
	$estadoController = new EstadosController;
  	$estadoController->create();
}

if($op == 6){
	$cidadeController = new CidadesController;
  	$cidadeController->create();
}

if($op == 7){
	$alunoController = new AlunosController;
	$alunoController->store($_POST);
}

if($op == 8){
	$cidadeController = new CidadesController;
	$cidadeController->store($_POST);
}

if($op == 9){
	$estadoController = new EstadosController;
	$estadoController->store($_POST);
}


