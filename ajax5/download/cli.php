<?php

$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $vendor = "SELECT vendors.name FROM vendors";
    $fuc[] = array();
    unset($fuc[0]);

    foreach ($dbh->query($vendor) as $row) {
        $fuc[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}