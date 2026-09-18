<?php


if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['nom'])) {
        echo "Benvingut ".$_POST['nom'];
    }
}