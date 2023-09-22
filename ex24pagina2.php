<?php
    $pass1 = $_POST["pass"];
    $pass2 = $_POST["pass2"];

    

    if ($pass1 != $pass2) {
        echo "ERROR: les contrasenyes han de coincidir<br>";
    }
    $correcte = false;
    for($i = 0; $i <= strlen($pass1); $i++) {
        if (is_numeric($pass1[$i])) {
            $correcte = true;
        }
    }
    if(!$correcte) {
        echo "ERROR: la contrasenya ha de tenir al menys un número";
    }

?>