<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Cidades</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  </head>
  <body>

    <h1>Cidades Cadastradas</h1>

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover table-condensed">  

        <caption>Lista de Cidades Cadastrados</caption>
    
        <thead>

          <tr>

            <th>Código</th>
            <th>Cidade</th>
            <th>Estado</th>

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