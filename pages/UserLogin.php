<?php
session_start();
include "classes.php";
    $user = new user();
    $user->setUserMail($_POST['UserMailLogin']);
    $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
    if($user->UserLogin()==true){
        $_SESSION['UserID']=$user->getUserID();
        $_SESSION['UserName']=$user->getUserName();
        $_SESSION['UserPassword']=$user->getUserPassword();
    }

?>
