<?php
session_start();

echo $_SESSION['user'];

if ($_SESSION['user']=='toni') {
    echo "tens persmis";
} else {
    echo "no tens permis";
}

?>