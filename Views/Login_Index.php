
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/Registration.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">

</head>


    <div class="p-x-2 p-y-2  ">
    <form class="card card-block m-x-auto bg-faded form-width " action="../Database/login_check.php" method="post">
<!--        <form class="card card-block m-x-auto bg-faded form-width " action="../Database/Data_Post.php" method="post">-->
        <legend class="m-b-1 text-xs-center"><h2>Authorization</h2></legend>
        <br/>



            <div class="form-group has-float-label">
                <input class="form-control" id="login2" type="text" name="login2" placeholder="nickname"/>
                <label for="login2">Login or E-mail</label>
            </div>



        <div class="form-group has-float-label">
            <input class="form-control" id="password2" type="password" name="password2" placeholder="•••"/>
            <label for="password2">Password</label>
        </div>


        <br/>
        <div class="text-xs-center">
            <button class="btn btn-block btn-primary" type="submit"> Login </button>
        </div>
    </form>
</div>

</body>
</html>