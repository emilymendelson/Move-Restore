<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title></title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
    
        <header>
        <nav>
        <ul>
            <li class="logo"><a href="index.php"><h2>Move & Restore</h2></a></li>
            <li class="dropdown">
                <button class="dropbtn"><a href="exercises.php">Exercises</a>
                    </button>
                    <div class="dropdown-content">
                    <a href="exercises/ankle.php">Ankle and Foot</a>
                    <a href="exercises/back.php">Back</a>
                    <a href="exercises/elbow.php">Elbow and Forearm</a>
                    <a href="exercises/hip.php">Hip and Thigh</a>
                    <a href="exercises/knee.php">Knee and Lower Leg</a>
                    <a href="exercises/neck.php">Head and Neck</a>
                    <a href="exercises/shoulder.php">Shoulder and Upper Arm</a>
                    <a href="exercises/wrist.php">Wrist and Hand</a>
                    <a href="exercises/wholebody.php">Whole Body</a>
            </li>
            <li><a href="chat/">Live Chat</a></li>
            <li><a href="quiz/">Quiz</a></li>
            <li><a href="journal/">Journal</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <div>

    <?php

        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
        }
        else {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
            </form>                
            <a href="signup.php">Signup</a>';
        }
    ?>
</div>
</header>