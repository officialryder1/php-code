<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'emart';

$DBconnect = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

if (!$DBconnect) {
    die('Connection to database failed'.mysqli_connect_error());
}