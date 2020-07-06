<?php 
    require "header.php";
    include_once 'includes/dbh.inc.php';

{
$user = $_GET['user'];
$get_user = $conn->query("SELECT * FROM users WHERE idUsers = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();  
}     
} 
?>
<head>
<style>
          <?php include 'stylesheet.css'; ?>
          header {
                background-image: url(../images/ankles.jpg);
            }
        </style>  

<a href="index.php"><h3>Home</a> | <?php echo $profile_data['uidUsers'] ?>'s Profile </h3><p>
    <figcaption class="profile"><a href="edit-profile.php?user=<?php echo $profile_data['uidUsers'] ?>">Edit Profile</a></figcaption>      
        <h2>Personal Information <?php            
        $visitor = $_SESSION['userId'];
           if ($user == $visitor){ 
            ?>
    <title><?php echo $profile_data['uidUsers'] ?>'s Profile</title>
    </head>
    <main>
       </h2>     

<figure style='float:left'>
            <img class="profile" src="images/profiledefault.jpg" alt="profile default picture">
        </figure>
<div style='float:left'>
       
        <table>
                    <tr>                
                     <td class="head">Username:<p></td><td class="info"><?php echo $profile_data['uidUsers'] ?><p></td>  
                    </tr>
                    <tr>                
                     <td class="head"> Email:</td><td class="info"><?php echo $profile_data['emailUsers'] ?></td> 
                    </tr> 

                    <?php
           } else {
               echo "<h5>An error occurred. Please login to this account before viewing personal information.</h5>";
           }
        ?> 
    </table> 
</div>
    </main>
</html> 
