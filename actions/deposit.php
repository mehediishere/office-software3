<?php
    if(isset($_POST['submit'])){
        session_start();
        include('../config/db.php');

        $va = $conn->real_escape_string($_POST['va']);

        $conn->query("");
        $_SESSION['msg'] = "Submit successfully!!";
        echo "<script>window.history.back();</script>";
        exit;
    }

    // Default exit
    echo "<script>window.history.back();</script>";
    exit;
?>