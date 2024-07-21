<?php
    $host = 'localhost';
    $dbn = 'crud';
    $username = 'root';
    $passwod = '';
    // $charset ='utf8md4';
    

    try {
        $dsn = "mysql:host=$host;dbname=$dbn";
    
        $pdo = new PDO($dsn, $username, $passwod);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 
    } catch(PDOException $e) {
        throw new PDOException($e ->getMessage(), (int)$e -> getCode());
    }
    