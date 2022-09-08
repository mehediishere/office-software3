<?php
    if(isset($_POST['submit'])){
        session_start();
        include('../config/db.php');

        $invoice = $conn->real_escape_string($_POST['invoice']);
        $category = $conn->real_escape_string($_POST['category']);
        $expense_date = $conn->real_escape_string($_POST['expense_date']);
        $amount = $conn->real_escape_string($_POST['amount']);
        $details = $conn->real_escape_string($_POST['details']);
        $chk = 0;

        // Date formet change
        if(!empty($expense_date)){
            $expense_date = date("Y-m-d", strtotime($expense_date));
        }

        // image 
        $uploadFileRename = "not-available.png";
        $filename = $_FILES["uploadfile"]["name"]; //file name
        if(!empty($filename)){
            $tempname = $_FILES["uploadfile"]["tmp_name"]; //file
            $uploadFileRename = time().rand(00,999).$_SESSION['store_id'].$filename; //rename file
            $folder = "../dist/expense_proof/".$uploadFileRename; //root folder destination

            $allowTypes = array('jpg','png','jpeg', 'webp');
            $fileType = pathinfo($filename, PATHINFO_EXTENSION);

            // checking file type for image
            if(!in_array($fileType, $allowTypes)){
                $chk = 1;
                $_SESSION['e-msg']="Only 'jpg','png','jpeg', 'webp' support.";
                echo "<script>window.history.back();</script>";
                exit();
            }
        }


        if(empty($invoice) || empty($category) || empty($expense_date) || empty($amount)){
            $chk = 1;
            $_SESSION['e-msg'] = "Fill the required fields";
            echo "<script>window.history.back();</script>";
            exit;
        }

        $conn->query("INSERT INTO `expense` (`branch`, `invoice`, `category`, `amount`, `details`, `expense_date`, `proof`, `date`) VALUES ('$_SESSION[branch]', '$invoice', '$category', '$amount', '$details', '$expense_date', '$uploadFileRename', '$date')");

        if(!empty($filename)){
            move_uploaded_file($tempname, $folder);
        }

        $_SESSION['msg'] = "Submit successfully!!";
        echo "<script>window.history.back();</script>";
        exit;
    }

    // Default exit
    echo "<script>window.history.back();</script>";
    exit;
?>