<?php
    require "header.php";
?>

    <main>
    <h1>Sign Up</h1>
    <?php
            if (isset($_GET['error'])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p class="signuperror"> Fill in all fields. </p>';
                }
                else if ($_GET["error"] == "invalidmailuid") {
                    echo '<p class="signuperror"> Invalid username and e-mail. </p>';
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror"> Invalid username. </p>';
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">  Invalid e-mail. </p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">  Your passwords do not match. </p>';
                }
                else if ($_GET["error"] == "sqlerror=usertaken") {
                    echo '<p class="signuperror">  Username is already taken. </p>';
                }}
            if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                    echo "<p> Sign Up Successful! </p>";
                } 
                else if ($_GET['signup'] != "success") {
                    echo "<p> Sign Up Unsuccessful </p>";
                }
            }
        if (isset($_POST['signup-submit'])) {

        require 'dbh.inc.php';  
    }
        ?>

        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="text" name="mail" placeholder="E-mail"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
            <button type="submit" name="signup-submit">Signup</button><br>
        </form>     
    </main>

<?php
    Require "footer.php";