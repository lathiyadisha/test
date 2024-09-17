

<?php
 $uname = "admin";
 $pass = "admin";

 session_start();
 if(isset($_SESSION['uname']))
 {
    echo "<h1>Welcome" .$_SESSION['uname']."</h1>";
    echo "<a href='product.php'>Product</a><br>";
    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";

 }
 else
 {
    if($_POST['uname'] == $uname && $_POST['pass']==$pass)
    {
        $_SESSION['uname'] = $uname;
       echo "<script>location.href ='login.php'</script>";
    }
    else
    {
        echo "<script>alert('username or password incorrect')</script>";
        echo "<script>location.href ='login.php'</script>";
    }
 }
?>