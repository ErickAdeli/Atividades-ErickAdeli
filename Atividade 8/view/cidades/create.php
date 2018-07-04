<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserir cidades</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  </head>
  <body>

    <h1>Inserir Cidades</h1>

    <div class="row">

      <div class="col-md-2">
        
      </div>

      <div class="col-md-8">

        <form method="post" action="router.php?op=6">

          <div class="form-group">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control"><br>

            <label for="estado_id">Estado:</label>
            <select name="estado_id"><br>

              <option value="">Selecione:</option>
              <!-- Estados //-->
              <?php foreach( $lista as $e ): ?>
              <option value="<?= $e['id'] ?>"><?= $e['nome'] ?></option>
              <?php endforeach ?>
            </select>

          </div>

          <button type="submit" class="btn btn-success" value="Cadastrar"></button>
          <button type="reset" class="btn btn-danger" value="Limpar"></button><br>

        </form>

      </div>

      <div class="col-md-2">
      
      </div>

    </div>

  </body>
</html>


