<?php
    session_start();
    include('../config/db.php');

    if(isset($_POST['submit']) && !empty($_POST['email'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $data = mysqli_fetch_assoc($conn->query("SELECT `id`, `email`, `password` FROM `profile` WHERE `email` = '$email' AND `password` = '$pwd'"));
        if($data != null){
            $_SESSION['user'] = $data;
            $_SESSION['msg'] = "Welcome ".$data['email'];
            header('location: ../index.php');
            exit;
        }else{
            $_SESSION['e-msg'] = "Invalid user information!!";
            echo "<script>window.history.back();</script>";
            exit;
        }
    }
?>