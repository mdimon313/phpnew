<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "tryst";

$con = mysqli_connect($hostname, $username, $password, $db_name);

if (!$con) {
    echo "Error". mysqli_connect_error();
}
