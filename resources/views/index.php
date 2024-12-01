<?php
session_start();
ob_start();

// if(isset($_SESSION['UserType'])&&($_SESSION['UserType']=="Admin")){
    include "header.php";
    if (isset($_GET['act'])){
    switch ($_GET['act']) {

        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
    include "footer.php";
// }
?>
