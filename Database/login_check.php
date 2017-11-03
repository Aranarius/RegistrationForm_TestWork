<?php

//include("./Data_Post.php");

$DB_host = 'localhost'; // адрес сервера
$databaseName = 'TestTuskRegistration'; // имя базы данных
$DB_user = 'root'; // имя пользователя
$DB_password = ''; // пароль


$login2 = $_POST['login2'];
$password2 = $_POST['password2'];
//$email2 = $_POST['login'];

$login2 = stripslashes($login2);
$password2 = stripslashes($password2);
$login2 = trim($login2);
$password2 = trim($password2);


$password2 = md5($password2);

$email2 = stripslashes($email2);


setcookie("login", "$login2");
setcookie("password", "$password2");


//
//include("../Views/SignIn_2.php");


$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);


// вариант 2
// проверяем есть ли в БД что-то похожее на наш логин или Имеил и пароль. Куки создаём и  потом используем  в SignIn_2 .
if ($link) {


    if (($sqli = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'") and mysqli_num_rows($sqli) > 0) or
        ($sqli2 = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='" . $login2 . "'") and mysqli_num_rows($sqli2) > 0)
    ) {

        if (($sqli = mysqli_query($link, "SELECT * FROM `users` WHERE `password`='" . $password2 . "'") and mysqli_num_rows($sqli) > 0)) {
// если такой есть и пароль совпал  создаём отправляем в вьюшку.

            $name2query = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login2 . "'");
            if ($name2query) {
                $name2real = mysqli_fetch_array($name2query);




//                <!--        Тут выводит вьюшку.....-->
                include("../Views/Login_check_view.php");




                //_______________ДОЛЖНО БЫЛО ПЕРЕНАПРАВЛЯТЬ. НО Я ПЕРЕДЕЛАЛ_______________________
//                exit( "<script>
//  window.location.href = \"../Views/SignIn_2.php\"
//
//</script>");
                //_______________ДОЛЖНО БЫЛО ПЕРЕНАПРАВЛЯТЬ. НО Я ПЕРЕДЕЛАЛ_______________________
            }


        } else {

            exit("<script>
  window.location.href = \"../Views/failed.php\"

</script>");

        }

    }
} else {

    exit("<script>
  window.location.href = \"../Views/failed.php\"

</script>");
}

mysqli_close($link);