<?php 
session_start();
$a = "Test";
if(isset($_SESSION['guardian_data']))
{
  $user = $_SESSION['guardian_data'];
  $name = "$user[Guardian_FirstName]";
}
else
{
  $name = "ERROR";
  header("Location: G_login.php");
}

?>


<!DOCTYPE html>
<html lang="en"> 
</body>
</html>
<link rel="stylesheet" type = "text/css" href = "menu.css">
</a>

  <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  <label for="menu-icon"></label>
  <nav class="nav"> 		
      <ul class="pt-5">
          <li><a href="G_profile.php">Guardian's Profile</a></li>
          <li><a href="G_mystudent_UI.php">Student Report</a></li>
          <li><a href="G_support.php">Contact Support</a></li>
          <li><a href="G_login.php">Logout </a></li>
      </ul>
  </nav>

  <div class="section-center">
      <h1 class="mb-0">Welcome <br><?php echo $name; ?><br> To <br>Pong Pong University!</h1>
  </div>
