<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "skelbimai";

$dbc = @mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$query = "SELECT category, title, description FROM skelbimai"

$response = @mysqli_query($dbc, $query);
