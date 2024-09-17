<?php

 echo "Cookie Value:" .$_COOKIE["user"]; 

 //delete cookie
 setcookie("user","", time() - (86400 * 30), "/");

?>