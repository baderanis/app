<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BaderSoft</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://youtube.com">YouTube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:anis.chahine@outlook.com">Contact</a>
        </li>
        </ul>      
    </div>
  </div>
</nav>
<div class="container" style="margin-top:20px;">
<form method="POST">
    Username  <input type="text" name="username" required class="form-control" />
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <br>
    Password  <input type="password" name ="password" required class="form-control" />
    <br>
    <button name="login" type="submit" class="btn btn-primary">Login</button>
    <button name="reset" class="btn btn-primary">Reset</button>
</form>
<?php
$username = "badersoft";
$password = "12345";
if(isset($_POST['login'])){
    $getUserName = $_POST['username'];
    $getPassword = $_POST['password'];            
    if($username === $getUserName && $password === $getPassword){
        session_start();
        $_SESSION['USER'] = $getUserName;
        $_SESSION['PASSWORD'] = $getPassword;
        $_SESSION['LOGIN'] = true;
        echo "<script> location.replace('index.php') </script>";
        //echo "Login Proceed";
    }else{
        echo '<div class="alert alert-danger" role="alert" style="margin-top:20px;">
        Wrong password!!
      </div>';
    }
}
?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>