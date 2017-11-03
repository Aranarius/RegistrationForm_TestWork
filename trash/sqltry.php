<?php
$DB_host = 'localhost'; // адрес сервера
$databaseName = 'TestTuskRegistration'; // имя базы данных
$DB_user = 'root'; // имя пользователя
$DB_password = ''; // пароль

$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);

$login2= ('666');
$password2= ('555');
$password2 = md5($password2);
//$email2 =('ber2');


if (($sqli = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'") and mysqli_num_rows($sqli) > 0) or
    ($sqli2 = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='" .$email2 . "'") and mysqli_num_rows($sqli2) > 0))
{
    if(($sqli3 = mysqli_query($link, "SELECT * FROM `users` WHERE `password`='" . $password2 . "'") and mysqli_num_rows($sqli3) > 0))
    {
        echo "YES!";
        $name2query = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'");
        $name2real = mysqli_fetch_array($name2query);

        echo $name2real['real_name'];

    }
    else{
        echo "Query is broken";}
}
else{
    echo "Query is broken ";
}
mysqli_close($link);
