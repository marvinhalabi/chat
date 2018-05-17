<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Welcome to the chatroom</title>
    <link rel="stylesheet" href="style/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>

    <div id="Login">
        <h2 style="margin-left: 80px;">LOG IN</h2>
        <form method="post" action="pages/UserLogin.php">
            <table class="form-group row">
                <tr>
                    <td>E-mail: </td>
                    <td><input class="form-control" type="email" name="UserMailLogin"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="form-control" type="password" name="UserPasswordLogin"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-primary btn-lg btn-block" type="submit" value="LOG IN"></td>
                </tr>



                <?php
                    if(isset($_GET['error'])){

                ?>
                    <tr>
                        <td></td>
                        <td><span style="color:red">ERROR LOGIN</span></td>
                    </tr>

                    <?php
                    }
                    ?>

            </table>
        </form>
    </div>

    <h2 style="margin-left: 60px; font-family: 'Allura', cursive;">OR</h2>


    <div id="SignUp">
        <h2 style="margin-left: 100px;">SIGN UP</h2>
        <form method="post" action="pages/InsertUser.php">
            <table class="form-group row">
                <tr>
                    <td>Your Name:</td>
                    <td><input class="form-control" type="text" name="UserName"></td>
                </tr>
                <tr>
                    <td>Your E-mail:</td>
                    <td><input class="form-control" type="email" name="UserMail"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="form-control" type="password" name="UserPassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign Up"></td>
                </tr>
                <?php if(isset($_GET['success'])){
                ?>
                <tr>
                    <td></td>
                    <td><span style="color: green">User Inserted</span></td>
                </tr>
                <?php

                }
                ?>
            </table>
        </form>
    </div>

</body>

</html>
