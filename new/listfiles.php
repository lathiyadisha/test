<?php
 $d = "BCA3";
 if(is_dir($d))
 {
    $files = scandir($d);
    $files = array_diff($files,array('.','..'));
    foreach($files as $file)
    {
        echo $file."<br>";
    }
 }
 else
 {
    echo "given input is not directory";
 }
?>