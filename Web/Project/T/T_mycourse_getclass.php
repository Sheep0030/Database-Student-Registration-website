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


    $sql="select * 
    FROM class_register r JOIN  Class c ON r.Class_ID = c.Class_ID 
        WHERE c.Teacher_ID = '".$ID."'
        AND r.Semester_R =  '".$Semester."' ";

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