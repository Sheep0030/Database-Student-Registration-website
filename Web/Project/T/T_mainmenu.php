<?php 
session_start();
$a = "Test";
if(isset($_SESSION['teacher_data']))
{
  $user = $_SESSION['teacher_data'];
  $name = "$user[Teacher_Name]";
}
else
{
  $name = "ERROR";
  header("Location: T_login.php");
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
          <li><a href="T_profile.php">Teacher's Profile</a></li>
          <li><a href="T_mycourse_UI.php">My Course</a></li>
          <li><a href="T_support.php">Contact Support</a></li>
          <li><a href="T_login.php">Logout </a></li>
      </ul>
  </nav>

  <div class="section-center">
      <h1 class="mb-0">Welcome <br><?php echo $name; ?><br> To <br>Pong Pong University!</h1>
  </div>
