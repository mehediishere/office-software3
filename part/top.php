<?php
  session_start();
  include('config/db.php');

  if(isset($_GET['logout']) || !isset($_SESSION['user'])){
    unset($_SESSION['user']);
    header('location: login.php');
  }

?>