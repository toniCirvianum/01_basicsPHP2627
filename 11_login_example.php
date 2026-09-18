<?php
session_start();
$_SESSION['user']=[
    'name'=> 'toni',
    'password'=>'P@ssw0rd'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./11_login_controller.php" method="post">
        <label for="name">Introdueix el nom d'usuari</label>
        <input type="text" name="username" placeholder="tot en minuscules">
        <br>
        <label for="password">Introdueix el password</label>
        <input type="password" name="password" placeholder="ha de tenir numeros, leltres i simbols i un min de 8 caracters">
        <br>
        <input type="submit" value="Envia">
    </form>
    <?php 
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red;'>" .$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    ?>

</body>
</html>