<?php

function add($name, $picture, $price, $desc) {
    if (require ("connection.php")) {
        $req = $access -> prepare ("INSERT INTO produits (image, nom, prix, description) values ($picture, $name, $price, $desc)");
        $req -> execute(array($name, $picture, $price, $desc));
        $req -> closeCursor();
    }
}

function show () {
    if (require ("connection.php")) {
        $req = $access -> prepare ("SELECT * FROM produits ");
        $req -> execute();
        $data = $req -> fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req -> closeCursor();
    }
}
?>