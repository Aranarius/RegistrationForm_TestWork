
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/Registration.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">

</head>
<body>

<?php


//include("../Database/Data_Fetch.php");

// подключить инклюдом
//
//$DB_host = 'localhost'; // адрес сервера
//$databaseName = 'TestTuskRegistration'; // имя базы данных
//$DB_user = 'root'; // имя пользователя
//$DB_password = ''; // пароль
//$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName);
//
//// Делаем маленький запрос для вывода информации. Вообще это надо делать в моделях, но я тут и так 500 файлов наворотил.Чёрт ногу сломит.
//
//$name2query = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='" . $email2 . "'");
//$name2real = mysqli_fetch_array($name2query);

?>

<div class="p-x-3 p-y-3">

    <form class="card card-block m-x-auto bg-faded form-width">

        <h3 class="m-b-1 text-xs-center">Your profile </h3>
        <hr>
        <br/>

        <div class="text-xs-left"><h5>Name:</h5>
            <h6>
                <?php

                echo $_COOKIE["name_old"];
//                echo $name2real['real_name'];
                ?>
            </h6>
        </div>
        <br/>
        <div class="text-xs-left "><h5>E-mail:</h5>
            <h6>
                <?php
                echo $_COOKIE["email_old"];
//                echo $name2real['email'];
                ?>
            </h6>
        </div>
        <br/>
        <div class="text-xs-left"><h5>Login:</h5>
            <h6>
                <?php
                echo $_COOKIE["login2"];
//                echo $name2real['login'];

                ?>
            </h6>
        </div>
        <br/>


        <div class="text-xs-center">
            <button type="button" class="btn btn-outline-danger"><a href="Reg_Index.html">Log out</a></button>
        </div>

    </form>
</div>
<!--<a href="../index.html">Log out</a>-->
</body>
</html>