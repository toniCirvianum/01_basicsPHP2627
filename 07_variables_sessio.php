<?php
//les variables de sessio son variables que viuen al servidor
//Quan tanquem el navegador s'esborren
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION['user']='xx';

    echo "LA variable de sessio ".$_SESSION['user'];
    
    ?>
    <a href="./07_sessio.php">veure varaible de sessio</a>
    
</body>
</html>