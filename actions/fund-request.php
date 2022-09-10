<?php
    if(isset($_POST['submit'])){
        session_start();
        include('../config/db.php');

        $chk = 0;

        $currentBranch = $conn->real_escape_string($_POST['currentBranch']);
        $requestBranch = $conn->real_escape_string($_POST['requestBranch']);
        $details = $conn->real_escape_string($_POST['details']);
        $amount = $conn->real_escape_string($_POST['amount']);

        $memberName = $conn->real_escape_string($_POST['member']);

        $accountHolder = $conn->real_escape_string($_POST['accountHolder']);
        $bank_name = $conn->real_escape_string($_POST['bank_name']);
        $bank_branch = $conn->real_escape_string($_POST['bank_branch']);
        $route = $conn->real_escape_string($_POST['route']);
        $accountNumber = $conn->real_escape_string($_POST['accountNumber']);

        $mobileBanking = $conn->real_escape_string($_POST['mobileBanking']);
        $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
        $txid = $conn->real_escape_string($_POST['txid']);

        $paymentOption = $conn->real_escape_string($_POST['paymentOption']);
        $request_date = $conn->real_escape_string($_POST['request_date']);
        // Date formet change
        if(!empty($request_date)){
            $request_date = date("Y-m-d", strtotime($request_date));
        }

        if($chk != 1){
            $conn->query("INSERT INTO `fund_request`(`branch`,`request_branch`, `details`, `amount`, `request_date`, `request_from`, `bank_account_holder`, `bank_branch`, `bank_name`, `bank_route`, `bank_acc_number`, `mobile_bank`, `mobile_number`, `mobile_txid`, `payment_option`, `date`) VALUES ('$currentBranch', '$requestBranch', '$details','$amount','$request_date','$memberName','$accountHolder','$bank_branch','$bank_name','$route','$accountNumber','$mobileBanking','$phoneNumber','$txid', '$paymentOption', '$date')");

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