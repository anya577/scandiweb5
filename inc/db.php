<?php
$host='localhost';
$db='catalog5';
$user='scandiweb5';
$pass='root';
$charset='utf8';

//connection to DB
$dsn="mysql:host=$host; dbname=$db; charset=$charset";

//structure of getting data from DB
$opt=
[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
];
$pdo=new PDO($dsn, $user, $pass, $opt);

?>