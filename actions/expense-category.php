<?php
    if(isset($_POST['submit']) && !empty($_POST['categoryname'])){
        session_start();
        include('../config/db.php');

        $categoryname = $conn->real_escape_string($_POST['categoryname']);
        $details = $conn->real_escape_string($_POST['details']);

        $conn->query("INSERT INTO `expense_category` (`branch`, `category`, `details`, `date`) VALUES ('$_SESSION[branch]', '$categoryname', '$details', '$date')");
        $_SESSION['msg'] = "Submit successfully!!";
        echo "<script>window.history.back();</script>";
        exit;
    }

    // Default exit
    echo "<script>window.history.back();</script>";
    exit;
?>