<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'db_pridruzi';

$conn = mysqli_connect ($serverName, $username, $password, $dbName);

if ($conn == FALSE) {
    echo "Neuspješno uspostavljanje veze!";
}