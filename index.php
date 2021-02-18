<?php
    require 'config/connect.php';
    $nume = "Ion";
    $prenume = "Alion";
    $grupa = "Clasa 11";
    $email = "alin@email.com";
    $data_nasterii = "2001.11.11";

//    try {
//        $sql = "INSERT INTO elevi(nume, prenume, grupa, email, data_nasterii)
//        VALUES('$nume', '$prenume', '$grupa', '$email', '$data_nasterii')";
//        $conn->exec($sql);
//        echo 'Datele au fost inserate cu success!';
//    }catch ( PDOException $e ){
//        echo $e->getMessage();
//    }

    $sql = "Select * FROM elevi";
    $date = $conn->query($sql)->fetchAll();
$conn = null;
include 'views/index.view.php';