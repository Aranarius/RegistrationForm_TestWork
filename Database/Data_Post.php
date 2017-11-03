<?php
$DB_host = 'localhost'; // адрес сервера
$databaseName = 'TestTuskRegistration'; // имя базы данных
$DB_user = 'root'; // имя пользователя
$DB_password = ''; // пароль



$login2 = $_POST['login2'];
$password2 = $_POST['password2'];
//$email2 = $_POST['login'];

$login2= stripslashes($login2);
$password2= stripslashes($password2);
$login2= trim($login2);
$password2= trim($password2);


$password2 = md5($password2);

//$email2 =stripslashes($email2);


//setcookie("login", "$login2" );
//setcookie("password", "$password2" );


//include("./Data_Fetch.php");

//include("../Views/SignIn_2.php");


$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);