<?php
 if((($_FILES['fn']['type']=="images/gif")||($_FILES['fn']['type']=="images/jpeg"))&& ($_FILES['fn']['size']<=20000))
 {
    if($_FILES['fn']['error']>0)
    {
        echo "Error:".$_FILES['fn']['error']."<br>";
    }
    else
    {
        echo "Upload:".$_FILES['fn']['name']."<br>";
        echo "Type:".$_FILES['fn']['type']."<br>";
        echo "Size:".($_FILES['fn']['size']/1024)."<br>";
        echo "Stored in:".$_FILES['fn']['tmp_name']."<br>";
    }
 }
 else
 {
    echo "Invalid File";
 }
?>