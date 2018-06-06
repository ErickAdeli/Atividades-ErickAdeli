<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
    <link rel="stylesheet" href=".\view\css\bootstrap\css\bootstrap.css">
    <script src='.\view\css\bootstrap\js\jquery-3.2.1.js'></script>
    <script src='.\view\css\bootstrap\js\bootstrap.min.js'></script>
  </head>
  <body>
    <body style="overflow-x: hidden;">
    <div class="row">
      <h1 style="text-align: center; background-color: lightgray"> Sistema de Controle de Solicitações de Análises Laboratoriais </h1>
    </div>

    <div class="row">
      <nav class="navbar navbar-inverse bg-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários</a>
              <ul class="dropdown-menu">
                <li><a href="router.php?op=1">1. Create</a></li>
                <li><a href="router.php?op=2">2. Update</a></li>
                <li><a href="router.php?op=3">3. Deletar</a></li>
                <li><a href="router.php?op=4">4. Listar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exames
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="router.php?op=5">1. Create</a></li>
                <li><a href="router.php?op=6">2. Update</a></li>
                <li><a href="router.php?op=7">3. Deletar</a></li>
                <li><a href="router.php?op=8">4. Listar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Procedimentos
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="router.php?op=9">1. Create</a></li>
                <li><a href="router.php?op=10">2. Update</a></li>
                <li><a href="router.php?op=11">4. Listar</a></li>
              </ul>
          </ul>
        </div>
      </nav>
    </div>

  </body>
</html>