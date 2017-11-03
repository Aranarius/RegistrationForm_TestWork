<?php
//include("./Data_Post.php");
$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);

$name2query = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'");
if ($name2query) {
    $name2real = mysqli_fetch_array($name2query);
}