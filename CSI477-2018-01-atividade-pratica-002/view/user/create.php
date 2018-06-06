<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inserir Usuario</title>

    </head>
    <body>

        <h1>Inserir Usuario</h1>

        <form method="post" action="router.php?op=1">
           
                <label for="name">Nome:</label>
                <input type="text" date="name">
                
                <label for="email">Email:</label>
                <input type="text" name="email">

                <label for="password">Password:</label>
                <input type="text" name="password">

                <label for="remember_token">Chave de lembrança:</label>
                <input type="text" name="remember_token">

                <label for="type">Tipo:</label>
                <input type="text" name="type">     
                                                   
                <input type="submit"  value="Cadastrar">
                <input type="reset" value="Limpar">
            
        </form>
        
    </body>
</html>