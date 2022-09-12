<?php
  session_start();
  include('config/db.php');

  if(isset($_GET['logout']) || !isset($_SESSION['user'])){
    unset($_SESSION['user']);
    unset($_SESSION['branch']);
    header('location: login.php');
    exit;
  }

  $balance = mysqli_fetch_assoc($conn->query("SELECT b.*, n.branch as nm FROM `balance` as b INNER JOIN `branch` as n on (b.branch = '$_SESSION[branch]' AND n.id = '$_SESSION[branch]')"));

?>