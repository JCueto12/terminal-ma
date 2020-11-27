<?php
    $link = 'mysql:host=localhost;dbname=id15414907_terminaldeautobuses';
    $usuario ='id15414907_terminal90';
    $password='Terminalmercado90?';

    try{
        $pdo = new PDO($link,$usuario);

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }