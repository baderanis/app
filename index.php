<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
</head>
<body>
<?php
$username = "badersoft";
$password = "12345";

session_start();
if(isset($_SESSION['USER']) && isset($_SESSION['PASSWORD']) && isset($_SESSION['LOGIN'])){
    if($username === $_SESSION['USER'] && $password === $_SESSION['PASSWORD']){
        echo "Welcome " . $username;
        echo "<form method='POST'> <button type='submit' name='logout'>Logout</button></form>";
    }
}else{
    echo "<script> location.replace('login.php') </script>";
}
if(isset($_POST['logout'])){
    echo "<script> location.replace('login.php') </script>";
    session_unset();
}
?>
</body>
</html>