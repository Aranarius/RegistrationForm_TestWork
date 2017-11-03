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




//include("../Views/SignIn_2.php");


$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);



// вариант 2




    $name2query = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'");

        $name2real = mysqli_fetch_array($name2query);

        $nameOld = $name2real['real_name'];
        $loginOld = $name2real['login'];
        $emailOld = $name2real['email'];

//                setcookie("name_old", "$cookieName");
//                setcookie("login_old", "$cookieLogin");
//
//                setcookie("email_old", "$cookieEmail");


//                echo $name2real['real_name'];
//                echo $name2real['login'];
//                echo $name2real['email'];
//                $cookieName = $name2real['real_name'];
//                echo $cookieName;


//                exit( "<script>
//  window.location.href = \"../Views/SignIn_2.php\"
//
//</script>");



//mysqli_close($link);