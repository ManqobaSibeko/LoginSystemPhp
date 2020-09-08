<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
        <a href = "">Logo</a>
            <ul>
                <li><a href = "index.php">home</a></li>
                <li><a href = "">Potfolio</a></li>
                <li><a href = "">About Me</a></li>
                <li><a href = "">Contact</a></li>
            </ul>
            <div>
            //include the login form and logout form 
                <form action= "includes/login.inc.php" method="post">
                <input type ="text" name="mailuid" placeholder="Username/Email-Address">
                <input type ="password" name="pwd" placeholder="Password">
                <button type ="submit" name="login-submit" value ="Submit">Login</button>
                </form>
             <a href = "signup.php">Sign up</a>
                <form action= "includes/logout.inc.php" method="post">
                <button type ="submit" name="logout-submit" value ="Submit">Logout</button>
                </form>
            </div>
        </nav>

    </header>
