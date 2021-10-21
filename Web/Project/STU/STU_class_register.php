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

$courseid = $_POST['user_CourseID'];
$classid = $_POST['user_ClassID'];
$status = $_POST['user_Status'];

    $sql="select course.Course_ID, course.Course_Name, class.Class_ID, teacher.Teacher_ID, teacher.Teacher_Name, class.Class_Section, class.Class_Status
    FROM (Class JOIN Course ON class.Course_ID = course.Course_ID ) JOIN Teacher ON Teacher.teacher_id = Class.teacher_id where class.Class_ID LIKE '%".$classid."%'AND class.Course_ID LIKE '%".$courseid."%' AND class.Class_Status LIKE '%".$status."%' ";


    
    $result=mysqli_query($con,$sql);
    $data = array();


    if(mysqli_num_rows($result)!=0){
     	  while($row = mysqli_fetch_assoc($result) )
    	{
    		$data[] =$row;
   		}
   		echo json_encode($data);
   		exit();


    }
    else{
        echo "No Result";

    }
    mysqli_close($con);
        
?>


