<?php require("header.php"); 

    $uid = $_SESSION['uid']; 
    // delete query 
    $sql = "DELETE FROM  users WHERE id='$uid' ";
    $resp = mysqli_query($con, $sql);

    if($resp==true) {
        session_destroy();
        header("location: index.php");
    }
?>
