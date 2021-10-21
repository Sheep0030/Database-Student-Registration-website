<?php 
session_start();

$host="localhost";
$user="root";
$pword="";
$db="students_registration";


$con = mysqli_connect($host,$user,$pword);
mysqli_select_db($con,$db);

$Name         = $_POST['user_name'];
$Type         = $_POST['user_type'];
$ID           = $_POST['user_id'];
$Email        = $_POST['user_email'];
$DepartmentID = $_POST['user_depaerment'];
$Details      = $_POST['user_message'];

$sql = "INSERT INTO Customer_Support ( ID, Name, Type, Email , Department_ID , Details)
            VALUES (
                    '".$ID."',               
                    '".$Name."',                  
                    '".$Type."',              
                    '".$Email."',
                    '".$DepartmentID."',
                    '".$Details."'
                   )";

if (mysqli_query($con, $sql)) {
  echo "Report Sent Successfully";
} else {
  echo "Error : Please Check Your Information!!";
}

mysqli_close($con);


?>