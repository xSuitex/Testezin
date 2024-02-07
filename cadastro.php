<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Kogen</title>
</head>
<body>
    <div class="Topo">
        <h1>Anime Center</h1>
    </div>

    <div class="back">
       
        <div class="box">
            <form  action="cadastrar.php" method="post">

                <h1>Cadastar</h1>
                <p>Email</p>
                <input type="text" name="email" id="camp"> <br> <br>
                <p>Senha</p>
                <input type="text" name="senha" id="camp"><br> <br>
                <p>Confirmar Senha</p>
                <input type="text" name="confirmar" id="camp"><br> <br>
    
                <input type="submit" value="Criar" id="but"> <br> <br>
                 <a href="login.php"><input type="button" value="Cancelar" id="but"></a>

            </form>
               
            
           
        </div>
    </div>
</body>
</html>