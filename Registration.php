<?php

$unix_time = strtotime('now');
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$email = $_POST['email'];
$password =  $_POST['password'];
$country = $_POST['country'];
$date = $_POST['date'];
$login = $_POST['login'];
$PostArray = array($name, $surname, $email, $password, $country,$login,$date);


//проверка.Вдруг данные пустые? Тогда выводим view ошибки
foreach ($PostArray as $value) {
    if (empty($value)) {
        exit("<script> 
  window.location.href = \"Views/failed_empty.php\"
      </script>)");
    }
}

//если все данные введены - обрабатываем их (Защита от тегов и прочего)
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);
$password = md5($password);

$name = stripslashes($name);
$name = htmlspecialchars($name);

$email = stripslashes($email);
$email = htmlspecialchars($email);

$surname = stripslashes($surname);
$surname = htmlspecialchars($surname);

$country = stripslashes($country);
$country = htmlspecialchars($country);
//удаляем лишние пробелы где надо
$name = trim($name);
$login = trim($login);
$password = trim($password);
$surname = trim($surname);
$email = trim($email);

//setcookie("name", "$name");
//setcookie("login", "$login" );
//setcookie("password", "$password" );
//setcookie("email", "$email" );



// подключаемся к базе через модель
include("Database/DBconnect.php");

//include("Views/SignIn.php");
?>