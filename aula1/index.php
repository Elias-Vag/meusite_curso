<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeira página do elias</title>
    <style>
        body { 
font-family: Arial, Helvetica, sans-serif;
font-size: 16px; 
background-color: #005179ff;
color: #ffffff;

    }
    </style>
</head>
<body>
    <h1>meu website </h1>
    <p>
        bem vindo, ao meu site elias.universo.com
    </p>
    <hr>
olá mundo <br> Hoje <?php echo "Boa noite"; ?> <br> <?php echo date("H:i:s"); ?>
<hr>
<form method="POST" action="acesso.php">
    Nome: <input type="text" name="nomeusuario"><br>
    Senha: <input type="password" name="senhadousuario"><br>
    <input type="submit" value="Enviar">

</body>
</html>