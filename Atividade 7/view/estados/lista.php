<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Estados</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  </head>
  <body>

    <h1>Estados Cadastrados</h1>

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover table-condensed">  

        <caption>Lista de Estados Cadastrados</caption>
    
        <thead>

          <tr>

            <th>Identificação</th>
            <th>Nome</th>
            <th>Sigla</th>

          </tr>

        </thead>

        <tbody>

          <?php foreach($lista as $linha): ?>
          <tr>

            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['sigla'] ?></td>

          </tr>
          <?php endforeach ?>

        </tbody>

      </table>

    </div>

  </body>
</html>
