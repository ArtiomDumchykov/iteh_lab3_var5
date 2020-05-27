<?php

$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $category = "SELECT category.name FROM category";
    $cat[] = array();
    unset($cat[0]);

    foreach ($dbh->query($category) as $row) {
        $cat[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}