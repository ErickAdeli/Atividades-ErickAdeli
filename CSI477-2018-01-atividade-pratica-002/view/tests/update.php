<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Atualizar Exames</title>

    </head>
    <body>

        <h1>Atualizar Exames</h1>

        <form method="post" action="router.php?op=6">
           
                <label for="date">Data:</label>
                <input type="date" date="date">
                
                <label for="user_id">Id Usuario:</label>
                <input type="text" name="user_id">

                <label for="procedure_id">Id Procedimento:</label>
                <input type="text" name="procedure_id">     
                                                   
                <input type="submit"  value="Cadastrar">
                <input type="reset" value="Limpar">
            
        </form>
        
    </body>
</html>