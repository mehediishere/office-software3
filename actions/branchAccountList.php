<?php
session_start();
include("../config/db.php");

if(isset($_POST['request'])){
    $request = $_POST['request'];
    $result = $conn->query("SELECT * FROM `profile` WHERE `branch` = '$request'");
    $count = mysqli_num_rows($result);
}
?>


<?php
    if($count > 0){?>
        <option value="" selected="selected">Select Account</option>
<?php   
        $n = 0;
        while($row = mysqli_fetch_assoc($result)){
?>
        <option value="<?php echo $row['name']." (".$row['phone'].")"; ?>"><?php echo $row['name']." ( ".$row['phone']." )"; ?></option>
<?php }
}else{?>
        <option value="" selected="selected">No Data Found!!</option>
<?php } ?>