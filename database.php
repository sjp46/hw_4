<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=sjp46';
    $username = 'sjp46';
    $password = '6IX59hy8y';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
