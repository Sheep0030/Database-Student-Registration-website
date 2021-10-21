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


    $sql="select r.Register_ID, r.Students_ID, r.Class_ID, r.Register_Date, r.Register_Status, r.Semester_R, 
    s.Address_Number, s.Department_ID, s.Students_FirstName, s.Students_MiddleName, s.Students_LastName, s.GPAX 
        FROM class_register r JOIN  Students_data s ON r.Students_ID =  s.Students_ID
        WHERE r.Class_ID = '".$ID."'
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