<?php 
session_start();
$a = "Test";
if(isset($_SESSION['students_data']))
{
  $user = $_SESSION['students_data'];
  $name = "$user[Students_FirstName]";
}
else
{
  $name = "ERROR";
  header("Location: STU_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type = "text/css" href = "menu.css">
  <body>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/></input>
    <label for="menu-icon"></label>
    <nav class="nav"> 		
        <ul class="pt-5">
            <li><a href="STU_profile.php">Student's Profile</a></li>
            <li><a href="STU_class_register_UI.php">Class Register</a></li>
            <li><a href="STU_register_information_UI.php">Register Information</a></li>
            <li><a href="STU_support.php">Contact Support</a></li>
            <li><a href="STU_login.php">Logout</a></li>
        </ul>
    </nav>

    <div class="section-center">
        <h1 class="mb-0">Welcome <?php echo $name; ?> To <br>Pong Pong University!</h1>
    </div>
  </body>
</html>