<?php

try {
    $access = new PDO("mysql:host=localhost;dbname=dolcavita;charset=utf8", "carene", "carene");

    $access -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    $e -> getMessage();
}

?>