<?php
    if(isset($_POST['submit'])){
        session_start();
        include('../config/db.php');

        $chk = 0;

        $officeBranch = $conn->real_escape_string($_POST['officeBranch']);
        $withdrawDetails = $conn->real_escape_string($_POST['withdrawDetails']);
        $amount = $conn->real_escape_string($_POST['amount']);

        $receiver = $conn->real_escape_string($_POST['receiver']);

        $accountHolder = $conn->real_escape_string($_POST['accountHolder']);
        $bank_name = $conn->real_escape_string($_POST['bank_name']);
        $bank_branch = $conn->real_escape_string($_POST['bank_branch']);
        $route = $conn->real_escape_string($_POST['route']);
        $accountNumber = $conn->real_escape_string($_POST['accountNumber']);

        $mobileBanking = $conn->real_escape_string($_POST['mobileBanking']);
        $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
        $txid = $conn->real_escape_string($_POST['txid']);

        $paymentOption = $conn->real_escape_string($_POST['paymentOption']);
        $withdraw_date = $conn->real_escape_string($_POST['withdraw_date']);
        // Date formet change
        if(!empty($withdraw_date)){
            $withdraw_date = date("Y-m-d", strtotime($withdraw_date));
        }

        if($chk != 1){
            $conn->query("INSERT INTO `withdraw`(`branch`, `details`, `amount`, `withdraw_date`, `withdraw_from`, `bank_account_holder`, `bank_branch`, `bank_name`, `bank_route`, `bank_acc_number`, `mobile_bank`, `mobile_number`, `mobile_txid`, `payment_option`, `date`) VALUES ('$officeBranch','$withdrawDetails','$amount','$withdraw_date','$receiver','$accountHolder','$bank_branch','$bank_name','$route','$accountNumber','$mobileBanking','$phoneNumber','$txid', '$paymentOption', '$date')");

            $_SESSION['msg'] = "Submit successfully!!";

        }else{
            $_SESSION['e-msg'] = "Something went wrong!!";
        }

        echo "<script>window.history.back();</script>";
        exit;
    }

    // Default exit
    echo "<script>window.history.back();</script>";
    exit;
?>