<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once('../btwed/MODEL/conect.php');   

    if (isset($_POST['submit']) && ($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $res = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($res);
        if ($rows > 0) {
            $_SESSION['username'] = $username;
            header('Location:index.php?susses=1');
        }else {
            $_SESSION['error'] ="Ten dang nhap mat khau ko dung";
            header('Location:Login.php?error=0');
            die("");
            exit();
        }

    
    } 
?>
