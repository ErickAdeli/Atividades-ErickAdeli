<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de alunos(as)</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  </head>
  <body>

    <h1>Lista de Alunos Cadastrados</h1>

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover table-condensed">  

        <caption>Lista de Alunos Cadastrados</caption>
    
        <thead>

          <tr>

            <th>Matrícula</th>
            <th>Nome</th>

          </tr>

        </thead>

        <tbody>

          <?php foreach($lista as $linha): ?>
          <tr>

            <td> <?= $linha['id']?></td>
            <td> <?= $linha['nome']?></td>

          </tr>
          <?php endforeach ?>

        </tbody>

      </table>

    </div>

  </body>
</html>