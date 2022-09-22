<?php
    // session_start();
    // $log = isset($_SESSION['auth']);
    // if(!$log){
    //     header('Location: index.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>WELCOME </h2>
    <form method="POST">
        <button name="logout">Logout</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['logout'])){
        // session_destroy();
        header('Location: index.php');
    }

?>