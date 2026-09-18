<?php


if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['nom'])) {
        echo "Benvingut ".$_GET['nom'];
    }
}


