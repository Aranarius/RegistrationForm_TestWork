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
<div class="p-x-3 p-y-3">

    <form class="card card-block m-x-auto bg-faded form-width">

        <h3 class="m-b-1 text-xs-center">Your profile </h3>
        <hr>
        <br/>

        <div class="text-xs-left"><h5>Name:</h5>
            <h6>
                <?php
//                echo $GLOBALS["name"];
                echo $_COOKIE["name"]; ?>
            </h6>
        </div>
        <br/>
        <div class="text-xs-left "><h5>E-mail:</h5>
            <h6>
                <?php
//                echo $GLOBALS["email"];
                echo $_COOKIE["email"];
                ?>
            </h6>
        </div>
        <br/>
        <div class="text-xs-left"><h5>Login:</h5>
            <h6>
                <?php
//                echo $GLOBALS["login"];
                echo $_COOKIE["login"];
                ?>
            </h6>
        </div>
        <br/>


        <div class="text-xs-center">
            <button type="button" class="btn btn-outline-danger"><a href="../index.php">Log out</a></button>
        </div>
    </form>
</div>
<!--<a href="../index.html">Log out</a>-->
</body>
</html>

