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


    $sql="select * FROM (students_data s JOIN student_guardian_data r ON s.Students_ID = r.Students_ID)
                        JOIN guardian_data g ON r.guardian_id = g.guardian_id where s.Students_ID = '".$ID."'";

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

        echo "error";
    }
    mysqli_close($con);
        
?>