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
        exit();

    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "email wrong";
        header("Location:../signup.php?error=invalidmail&uid=".$username);
        exit();

    }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        echo "username wrong";
        header("Location:../signup.php?error=invalidUID&&mail=".$email);
        exit();

    }elseif ($password !== $passwordRepeat) {
        
         echo "password awafani";
        header("Location:../signup.php?error=passwordchecks&uid=".$username."&mail=".$email);
        exit();

    }else{

        $sql = "SELECT * FROM users WHERE $uidUsers = ?";

        $stmt = mysqli_stmt_init($conn);


        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){

            echo "Something is wrong" ;
        }else{
            mysqli_stmt_bind_param($stmt,"s"); 
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_row(stmt);
            if ($resultCheck > 0){

            header("Location:../signup.php?error=passwordchecks&uid=".$username."&mail=".$email);
            exit();

            }else{
                    $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) 
                    VALUES(?,?,?,?,?)";

                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt , $sql)){
                        echo "Something is wrong" ;
                    }else{
                        $hashedPwd = password_hash ($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss" , $user, $email, $hashedPwd);
                        
                        mysqli_stmt_execute($stmt);
                        header("Location:../signup.php?signup=success");
                        exit();
                    }
            }
        }
         echo "successfull";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
         header("Location:../signup.php");
                        exit();
}
