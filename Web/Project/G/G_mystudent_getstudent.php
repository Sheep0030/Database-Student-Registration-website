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


    $sql="select r.Students_ID, r.Students_FirstName, r.Students_MiddleName, r.Students_LastName, 
    r.Cell_Number, r.Email, r.Gender, r.BirthDate, r.Register_Date, r.GPAX, r.HighSchool_Name, 
    r.Year, s.Guardian_ID, s.Relation_Type 
    FROM Students_data r JOIN  Student_guardian_data s ON r.Students_ID =  s.Students_ID
        WHERE s.Guardian_ID = '".$ID."'";

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