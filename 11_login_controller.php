<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $regex_username = '/^[a-z0-9]{4,}$/'; //cal afegir / al principi i al final del regex
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!preg_match($regex_username, $username)) {

            $_SESSION['error'] = "Credencials incorrectes";
            header('Location: ./11_login_example.php');
            exit;
        }

        if (
            $username == $_SESSION['user']['name'] &&
            $password == $_SESSION['user']['password']
        ) {
            header('Location: ./11_app.php');
            exit;
        }

        $_SESSION['error'] = "Credencials incorrectes";
        header('Location: ./11_login_example.php');
        exit;
    }
}
