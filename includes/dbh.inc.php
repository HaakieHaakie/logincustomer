<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "logincustomer";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$db_tablel1 = "login";
$db_col1 = "login_id";
$db_col2 = "login_username";
$db_col3 = "login_pwd";
$db_col4 = "login_B2B_code";