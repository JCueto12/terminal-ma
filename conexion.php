<?php
    $link = 'mysql:host=127.0.0.1:3305;dbname=terminal';
    $usuario ='root';
    $password="";

    try
    {
        $pdo = new PDO($link,$usuario);
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }