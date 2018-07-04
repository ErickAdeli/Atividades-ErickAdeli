<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">  
  </head>
  <body>

	<?php
      session_start();
      if ( isset($_SESSION['mensagem']) ) {
        echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
        unset($_SESSION['mensagem']);
      }
    ?>

    <h1>Sistema de Controle Acadêmico</h1><br><br>
    <!-- Links //-->

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <a href="router.php?op=4"><input type="button" class="btn btn-primary" value="Inserir Aluno"></a><br>
          <a href="router.php?op=5"><input type="button" class="btn btn-success" value="Inserir Estados"></a><br>
          <a href="router.php?op=6"><input type="button" class="btn btn-warning" value="Inserir Cidades"></a><br>
  

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

    </body>
</html>