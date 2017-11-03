<?php
//всё в куче.
$unix_time = strtotime('now');
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$date = $_POST['date'];
$login = $_POST['login'];
$PostArray = array($name, $surname, $email, $password, $country, $login, $date);


//проверка.Вдруг данные пустые? Тогда выводим view ошибки
foreach ($PostArray as $value) {
    if (empty($value)) {
        exit("<script> 
  window.location.href = \"../Views/failed_empty.php\"
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


$DB_host = 'localhost'; // адрес сервера
$databaseName = 'TestTuskRegistration'; // имя базы данных
$DB_user = 'root'; // имя пользователя
$DB_password = ''; // пароль


$link = mysqli_connect($DB_host, $DB_user, $DB_password, $databaseName)

or die("Ошибка " . mysqli_error($link));
if ($link) {


// проверка на существование логина
    if ($sqli = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='" . $login . "'") and mysqli_num_rows($sqli) > 0) {


        exit("<script> 
  window.location.href = \"../Views/failed.php\"
 
</script>");


//        exit(" Registration failed.<br/> This login is already in use! <br/> <a href=\"#\" OnClick=\"history.back();\">Back</a>");
    }

    if ($sqli2 = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='" . $email . "'") and mysqli_num_rows($sqli2) > 0) {
        exit("<script> 
  window.location.href = \"Views/failed.php\"
 
</script>");
    }


    // если такого нет, то сохраняем данные
    $result2 = mysqli_query($link, "INSERT INTO Users (login,email,birthdate,country,real_name,real_surname,password,unix_time) 
VALUES('$login','$email','$date','$country','$name','$surname','$password',$unix_time)");

    // Проверяем, есть ли ошибки
    if ($result2 == 'TRUE') {
        //  кидаем на страницу профиля пользователя


//                <!--        Тут выводит вьюшку.....-->
         include("../Views/DBconnect_view.php");





        //_______________ДОЛЖНО БЫЛО ПЕРЕНАПРАВЛЯТЬ. НО ВЫШЛИ ОШИБКИ_______________________
//        exit( "<script>
//  window.location.href = \"Views/SignIn.php\"
//
//</script>");
        //_______________ДОЛЖНО БЫЛО ПЕРЕНАПРАВЛЯТЬ. НО ВЫШЛИ ОШИБКИ_______________________

//        echo "You have successfully registered!<n/> Now you can go to your profile. <a href='index.php'>$login Profile page</a>";
    }
}


// можно закрывать соеденение
mysqli_close($link);