<?php


if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['name']) && isset($_POST['contrasenya'])) {
        $regex_username='/^[a-z0-9]{8,}$/'; //cal afegir / al principi i al final del regex
        $username = $_POST['name'];
        if (preg_match($regex_username,$username)) {
            echo "el nom d'usuari satisfa les condicions";
        } else {
            echo "el nom d'usuari no satisfa les condicions";
        }
    }
}