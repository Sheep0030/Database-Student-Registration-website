<?php 
session_start();

if(isset($_SESSION['students_data']))
{
	$user = $_SESSION['students_data'];
	$ID = "$user[Students_ID]";
}



$host="localhost";
$user="root";
$pword="";
$db="students_registration";


$con = mysqli_connect($host,$user,$pword);
mysqli_select_db($con,$db);


$ID = $_POST['user_id'];
$Semester = $_POST['user_semester'];
$status = $_POST['user_status'];

     
    $sql="select * from class_register where Students_ID ='".$ID."'AND Register_Status LIKE '%".$status."%' AND Semester_R = '".$Semester."'";
    $data = array();
    $result = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)!=0){
    while($row = mysqli_fetch_assoc($result) )
    {
    	$data[] =$row;
    }
    echo json_encode($data);
    }
    else{
        echo "No Result";
    }

    
    mysqli_close($con);
    ?>

