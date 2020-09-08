<?php

if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST["uid"];
    $email = $_POST["mail"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-2"];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) ){

        //header function that will take/link you back to the header page
        header("Location:../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    }
}