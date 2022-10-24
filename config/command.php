<?php

function add($picture, $name, $price, $desc) {
    if (require ("connection.php")) {
        $req = $access -> prepare ("INSERT INTO produits (image, nom, prix, description) values ($picture, $name, $price, $desc)");
        $req -> execute(array($picture, $name, $price, $desc));
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

function delete ($id) {
    if (require ("connection.php")) {
        $req = $access -> prepare("DELE * FROM produits WHERE id = ?");
        $req -> execute(array($id));
    }
}
?>