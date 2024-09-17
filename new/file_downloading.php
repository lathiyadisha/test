<!DOCTYPE html>
<html>
    <head>
        <title>File Download using php</title>
    </head>
    <body>
        <h2>Download File from HERE:</h2>
        <a href="file_downloading.php?file=1.gif">Click Here</a>
    </body>
</html>

<?php

if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'images/'.$filename;
    if(!empty($filename) && file_exists($filepath))
    {
        //define header
        header("Cache-Control:Public");
        header("Content-Description:File Transfer");
        header("Content-Disposition:attachment;filename=$filename");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");

        readfile($filepath);
        exit;

    }
    else
    {
        echo "file does not exixts";
    }

}

?>