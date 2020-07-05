
<?php

if (isset($_POST['submit'])) {
    require "../header.exercise.php";
    require '../includes/dbh.inc.php';

    $exercises = $_POST['exercises'];
    $comments = $_POST['comments'];
    $date = date('l, F j, Y');
    $uid = $_SESSION['userId'];

        $sql = "INSERT INTO journal (uid, exercises, comments, date) VALUES ('$uid', '$exercises', '$comments', '$date')";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../journal.php?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "sss", $uid, $exercises, $comments);
            mysqli_stmt_execute($stmt);
            header("Location: journal.php?update=success");
            echo "Your journal has been successfully";
            echo $uid;
            exit();
        }
    
mysqli_stmt_close($stmt);
mysqli_close($conn);
    
}