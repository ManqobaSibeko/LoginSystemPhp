<?php
require "header.php"
?>

    <main>
       <div>
        <section>
            <h1>Signup</h1>
              <form action= "includes/login.inc.php" method="post">

                    <input type ="text" name="uid" placeholder="Username">
                    <input type ="text" name="mail" placeholder="Email Address">
                    <input type ="password" name="pwd" placeholder="Password">
                    <input type ="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type ="submit" name="login-submit" value ="Submit">Login</button>
                    <button type ="submit" name="signup-submit" value ="Submit">Sign up</button>

              </form>
        </section>            
       </div>
    </main>

<?php
    require "footer.php"
?>