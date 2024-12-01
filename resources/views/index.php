<?php
    session_start();
    ob_start();
    include "header.php";
    if (isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'register_ntd':
            include "register_ntd.php";
            break;
        case 'login':
            include "login_ntd.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
    include "footer.php";

?>
