<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Expresions regulars</h1>
    <form action="./10_Expresions_regulars_controller.php" method="post">
        <label for="name">Introdueix el nom d'usuari</label>
        <input type="text" name="name" placeholder="tot en minuscules" required>
        <br>
        <label for="password">Introdueix el password</label>
        <input type="text" name="contrasenya" placeholder="ha de tenir numeros, leltres i simbols i un min de 8 caracters">
        <br>
        <input type="submit" value="Envia">
    </form>
</body>

</html>