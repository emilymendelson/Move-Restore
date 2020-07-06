<?php
    require "header.php";
    include_once 'includes/dbh.inc.php';
?>
<title> <?php echo $username ?>s Profile </title>
<main>
<?php
//Check if the form has been submitted



if (isset($_GET['username'])){
    $username = $_GET['username'];
    $userquery = mysqli_query($conn, "SELECT * FROM users WHERE uidUsers='$username'") 
    or die ("The query could not be completed. Please try again later.");
    if (mysqli_num_rows($userquery)!= 1){
        die ("That username could not be found.");
    }
    while ($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)) {
        $email = $row['emailUsers'];
        $dBusername = $row['idUsers'];
    }



?>

<h2><?php echo $username; ?>'s Profile</h2><br>
<table>
    <tr><td>Username: </td><td><?php echo $username; ?></td></tr>
    <tr><td>E-mail: </td><td><?php echo $email; ?></td></tr>
</table>

<?php
} else die ("You need to specify a username.");
?>

</main>