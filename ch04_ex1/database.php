<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=us57';
    $username = 'us57';
    $password = 'SNTWAlNug';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>