<?php 
    
    include('../config/db.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $value = $_POST['value'];
        $conn->query("UPDATE `fund_request` SET `status`='$value', `approval_date`='$date' WHERE `id` = '$id'");
        echo 1;
    }
?>