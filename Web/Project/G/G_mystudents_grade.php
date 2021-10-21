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

$ID = $_POST['user_id'];
$Semester = $_POST['user_semester'];


    $sql="select * from class_gpa_data c JOIN students_data s on s.students_ID = c.students_ID where c.Students_ID = '".$ID."'AND c.Semester = '".$Semester."' ";
    
    $result=mysqli_query($con,$sql);
    $data = array();


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