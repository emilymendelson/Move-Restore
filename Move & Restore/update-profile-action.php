<?php 
    require "header.php";
    include_once 'includes/dbh.inc.php';


    $user = $_GET['user'];
    $visitor = $_SESSION['userUid'];

    if ($user == $visitor){ 
    if (isset($_POST['update_profile'])) {
        $emailUsers = $_POST['email'];
        $sql = "UPDATE users SET emailUsers='$emailUsers' WHERE uidUsers='$visitor'";
    }
        if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";
          header("Location: index.php?update=success");
                    exit();  
        }} else {
          echo "Error updating record. Please Try Again." . mysqli_error($conn);
        }

