<!-- Connecting -->
<?php

$databaseName = 'NCYR1_final';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'ncyr1_writer';
$password = 'z5p6Si5SqtkV';

$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->
