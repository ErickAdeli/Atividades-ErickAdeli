<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Atualizar Procedimentos</title>

    </head>
    <body>

        <h1>Atualizar Procedimentos</h1>

        <form method="post" action="router.php?op=10">
           
                <input type="hidden" name="id">

                <label for="id">Nome:</label>
                <input type="text" name="name">
                
                <label for="price">Preço:</label>
                <input type="text" name="price">     
                                                   
                <input type="submit"  value="Cadastrar">
                <input type="reset" value="Limpar">
               
        </form>

    </body>
</html>