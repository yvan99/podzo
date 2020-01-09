<?php  require_once '../connection/konnect.php';?>

<?php

session_start();

if(!isset($_SESSION['user_log'])){

header("location:logout_admin.php");

}

$gh=$_SESSION['user_log'];

$q=mysqli_query($conn,"select * from admin where admin_id='$gh'");

$v=mysqli_fetch_assoc($q);

$iribanza=$v['admin_names'];

$irimail=$v['admin_email'];

?>


<?php
        $query_resto = mysqli_query($conn,"select * from resto");
        $query_menu = mysqli_query($conn,"select * from menu");
        $query_user = mysqli_query($conn,"select * from admin");


        $count_resto = mysqli_num_rows($query_resto);
        $count_menu = mysqli_num_rows($query_menu);
        $count_user = mysqli_num_rows($query_user);
?>

