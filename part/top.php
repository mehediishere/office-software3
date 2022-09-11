<?php
  session_start();
  include('config/db.php');

  if(isset($_GET['logout']) || !isset($_SESSION['user'])){
    unset($_SESSION['user']);
    unset($_SESSION['branch']);
    header('location: login.php');
  }

?>