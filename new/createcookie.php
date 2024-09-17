<?php
 $cookie_name = "user";
 $cookie_value = "ABC";
 
 setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
 //60sec*60min = 3600  means after 1 hour cookie deleted
 //60sec*60min = 3600*24 means after 24 hour cookie deleted
 //86400 * 30 = after 30 days cookie deleted
 // "/" = means cookie access which page
?>

<html>
    
    <body>
        <?php
           if(!isset($_COOKIE[$cookie_name]))
           {
            echo "cookie not set";
           }
           else
           {
            echo $_COOKIE[$cookie_name];
           } 
        ?>
    </body>

</html>