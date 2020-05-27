<?php
$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $test = $_POST["test"];


    $query = "SELECT items.name FROM items WHERE price < '". $test ."'";
    echo 'Результаты поиска:' . '</br>';
    foreach ($dbh->query($query) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}