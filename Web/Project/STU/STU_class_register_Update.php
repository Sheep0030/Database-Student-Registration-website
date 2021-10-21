<?php 
session_start();

if(isset($_SESSION['students_data']))
{
	$userdata = $_SESSION['students_data'];
	$ID = "$userdata[Students_ID]";
}

$host="localhost";
$user="root";
$pword="";
$db="students_registration";


$con = mysqli_connect($host,$user,$pword);
mysqli_select_db($con,$db);

$ClassID = $_POST['user_ClassID'];
$ID = $_POST['user_ID'];
$Date = date("Y-m-d");
$status = "Pending";
$semester = "1/2021";

$check = "SELECT * FROM Class_Register WHERE CLASS_ID = '".$ClassID."'  AND Students_ID = '".$ID."' AND semester_R = '".$semester."' ";

    $resultcheck=mysqli_query($con,$check);



    if(mysqli_num_rows($resultcheck)==0)
      {
        $sql = "INSERT INTO Class_Register ( Students_ID, Class_ID, Register_Date, Register_Status , Semester_R)
            VALUES (
                    '".$ID."',               
                    '".$ClassID."',                  
                    '".$Date."',              
                    '".$status."',
                    '".$semester."'
                   )";

        if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
        } 
        else 
        {
          echo "Error";
        }


      }
    else
      echo "You Already Registered This Class for This Semester!";



mysqli_close($con);


?>