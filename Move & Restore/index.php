<?php
    require "header.php";
?>

<main>
    <?php  

        if (isset($_GET['error'])) {
            if ($_GET["error"] == "emptyfields") {
                echo '<p class="signuperror"> Fill in all fields. </p>';
            }
            if ($_GET["error"] == "error=sqlerrors") {
                echo '<p class="signuperror"> There has been an error logging in. Please try again. </p>';
            }
            if ($_GET["error"] == "wrongpwd") {
                echo '<p class="signuperror"> This password is incorrect. </p>';
            }
            if ($_GET["error"] == "nouser") {
                echo '<p class="signuperror"> This username does not exist. </p>';
            }
        }
    if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';  
}

if (isset($_SESSION['userId'])){
    echo "<p> You are logged in </p>";
}
else {
    echo '<p>You are not logged in.</p>';
}
    ?>        

</main>

<?php
    Require "footer.php";
    ?>