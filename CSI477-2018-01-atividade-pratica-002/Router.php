<!DOCTYPE html>
<html>
  <head>
    <title>Tabela</title>
    <link rel="stylesheet" href=".\view\css\bootstrap\bootstrap.css">
  </head>
  <body>
  </body>
</html>


<?php

include './model/Database.php';
include './model/Procedures.php';
include './model/Test.php';
include './model/User.php';
include './controller/ProceduresController.php';
include './controller/TestsController.php';
include './controller/UsersController.php';


use Controller\ProceduresController;
use Controller\TestsController;
use Controller\UsersController;

$op = $_GET['op'];
// Definição das rotas
if ( $op == 1 ) {
  $usersController = new UsersController;
  $usersController->create();
} else if ( $op == 2 ) {
  $usersController = new UsersController;
  $usersController->update();
} else if ( $op == 3 ) {
  //var_dump($_POST);
  $usersController = new UsersController;
  $usersController->delete();
} else if ( $op == 4 ) {
  $usersController = new UsersController;
  $usersController->listar();
} else if ( $op == 5 ) {
  $testsController = new TestsController;
  $testsController->create();
} else if ( $op == 6 ) {
  $testsController = new TestsController;
  $testsController->update();
} else if ( $op == 7 ) {
  $testsController = new TestsController;
  $testsController->delete();
} else if ( $op == 8 ) {
  $testsController = new TestsController;
  $testsController->listar();
} else if ( $op == 9 ) {
  $proceduresController = new ProceduresController;
  $proceduresController->create();
}else if ( $op == 10 ) {
  $proceduresController = new ProceduresController;
  $proceduresController->update();
}else if ( $op == 11 ) {
  $proceduresController = new ProceduresController;
  $proceduresController->listar();