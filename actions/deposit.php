<?php
    if(isset($_POST['submit'])){
        session_start();
        include('../config/db.php');

        $chk = 0;

        $officeBranch = $conn->real_escape_string($_POST['officeBranch']);
        $depositDetails = $conn->real_escape_string($_POST['depositDetails']);
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
        $deposit_date = $conn->real_escape_string($_POST['deposit_date']);
        // Date formet change
        if(!empty($deposit_date)){
            $deposit_date = date("Y-m-d", strtotime($deposit_date));
        }

        // image 
        $uploadFileRename = "not-available.png";
        $filename = $_FILES["uploadfile"]["name"];
        if(!empty($filename)){
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            $uploadFileRename = time().rand(00,999).$_SESSION['store_id'].$filename; 
            $folder = "../dist/deposit_proof/".$uploadFileRename;

            $allowTypes = array('jpg','png','jpeg', 'webp');
            $fileType = pathinfo($filename, PATHINFO_EXTENSION);

            // checking file type for image
            if(!in_array($fileType, $allowTypes)){
                $chk = 1;
                $_SESSION['e-msg']="Only 'jpg','png','jpeg', 'webp' support.";
                echo "<script>window.history.back();</script>";
                exit;
            }
        }

        if($chk != 1){
            $conn->query("INSERT INTO `deposit`(`branch`, `details`, `amount`, `deposit_date`, `receipt`, `cash_receiver`, `bank_account_holder`, `bank_branch`, `bank_name`, `bank_route`, `bank_acc_number`, `mobile_bank`, `mobile_number`, `mobile_txid`, `payment_option`, `date`) VALUES ('$officeBranch','$depositDetails','$amount','$deposit_date','$uploadFileRename','$receiver','$accountHolder','$bank_branch','$bank_name','$route','$accountNumber','$mobileBanking','$phoneNumber','$txid', '$paymentOption', '$date')");

            $_SESSION['msg'] = "Submit successfully!!";
    
            if(!empty($filename)){
                move_uploaded_file($tempname, $folder);
            }
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