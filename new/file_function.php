<?php
$fp = fopen("f2.php","r+");
echo fread($fp,10);
echo fread($fp,filesize("f2.php"));
echo fgets($fp);
while(!feof($fp))
{
    echo fgetc($fp);
}
echo fwrite($fp,"student");
fclose($fp);
$fp = fopen("oldfile.txt","w+");
echo fread($fp,5);
echo fwrite($fp,"hello world",8);
echo fputs($fp,"php lang",8);
fclose($fp);
$fp = fopen("f2.php","a+");
echo fread($fp,4);
fwrite($fp,"end of the file");
echo fwrite($fp,"is a good");
fclose($fp);

?>