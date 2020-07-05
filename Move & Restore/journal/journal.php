<?php 
    require "../header.exercise.php";
    include_once '../includes/dbh.inc.php';
?>

<?php


// define variables and set to empty values
$exercises = $comments = "";
$exercises = $comments = "";

  if (empty($_POST["exercises"])) {
    $exercises = "";
  } else {
    $exercises = test_input($_POST["exercises"]);
  }

  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = test_input($_POST["comments"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_GET['update'])){
  if ($_GET['update'] == "success") {
      echo "<p>";
      echo "Your journal has been updated successfully.";
  }}

?>
    <!DOCTYPE html>
    <html>
    
    <head>
        <title>Journal</title>
        <style>
          <?php include '../stylesheet.css'; ?>
          header {
                background-image: url(../images/ankles.jpg);
            }
        </style>  
    </head>


    <h2>Add an Entry Into Your Journal</h2>
<form method="post" action="edit-journal.php?submit" > 
  <div class="form">
            <label><h3>List any exercises you have completed today:</h3></lable> <br>
            <textarea name="exercises" placeholder="- Tried exercise XXX and felt XXX"></textarea><p>
            <label><h3>Comments (Write anything you think is important for you physiotherapist to know)</h3></lable> <br>
            <textarea name="comments" placeholder=" - Write how you felt throughout the day
            - My neck started hurting
            - Had trouble sleeping last night because of lower back pain"></textarea><p>
            <input class= "submit" type="submit" name="submit" value="Submit"> 
            <div>
        </form>  

        <?php

$uid = $_SESSION['userId'];
$get_user = $conn->query("SELECT * FROM journal WHERE uid = '$uid'");
if (!$get_user->num_rows == 0)
{
    $profile_data = $get_user->fetch_assoc();      

?>
  
    <h2>Previous Journal Entries</h2><?php 

//run the query

?>

<table class="journal">
              
      <div class="date"><?php echo $profile_data['date'] ?></div>  

    <tr>                
      <td class="head">Exercises: <p></td><td class="info"><?php echo $profile_data['exercises'] ?><p></td> 
    </tr> 
    <tr> 
    <td class="head">Comments: <p></td><td class="info"><?php echo $profile_data['comments'] ?><p></td> 
    </tr> 
    </table>

    <?php

while ($row = mysqli_fetch_array($get_user))
{

?>

<table class="journal">
        <div class="date"><?php echo $row['date'] ?></div>  
    <tr>                
      <td class="head">Exercises: <p></td><td class="info"><?php echo $row['exercises'] ?><p></td> 
    </tr> 
    <tr> 
    <td class="head">Comments: <p></td><td class="info"><?php echo $row['comments'] ?><p></td> 
    </tr> 

    <?php
    } }
    else if ($get_user->num_rows == 0){
    echo "<h5> No journal entries yet.</h5>";
  } else {
        echo "<h5>An error occurred. Please login to this account before viewing personal information.</h5>";
    }
?> 
</table> 

</html> 
  
    </main>


