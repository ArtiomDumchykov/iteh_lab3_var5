<?php
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");

$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $vendor = $_GET["vendor"];

    $query = "SELECT items.name FROM items , vendors WHERE items.FID_Vendor = vendors.ID_Vendors AND vendors.name = '". $vendor ."'";
    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    foreach ($dbh->query($query) as $row) {
        echo '<name>'.'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>'.'</name>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}