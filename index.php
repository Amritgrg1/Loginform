<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>LOGIN FORM</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form form-control">
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="pass" placeholder="password">
    <button type="submit">Login</button>
</form>
</div>
</body>
</html>

 <?php
// session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email =$_POST['email'];
    $pass =$_POST['pass'];

    if($email == 'amritgrg123@gmail.com' && $pass=='1234')
    {
    //   $_SESSION['auth'] = 'amrit';
        setcookie("email",$email,time() + 5,"/");
      header('Location: home.php');  
    } else{
            header('Location: ./index.php');
    }
    //login success

}


?>