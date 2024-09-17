<?php
 //create directory
 $d = "BCA3";
 if(file_exists($d))
 {
    echo "folder already exists";
 }
 else
 {
    if(mkdir($d))
    {
        echo "created";
    }
    else
    {
        echo "there is a problem in creation";
    }
 }
?>