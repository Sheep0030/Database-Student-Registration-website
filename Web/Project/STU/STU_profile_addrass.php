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


    $sql="select s.Students_ID, s.Address_Number, s.Department_ID, s.Students_FirstName, s.Students_MiddleName, 
    s.Students_LastName, s.Cell_Number, s.Email, s.Gender, s.BirthDate, s.Register_Date, s.GPAX, 
    s.HighSchool_Name, s.Year, r.Owner_Name, r.Owner_Contact, r.Sub_dist, r.Province, r.City, 
    r.Postal_Code, r.Street, r.Building, r.Other  
    FROM (students_data s JOIN address_data r ON s.address_number = r.address_number)
         where s.Students_ID = '".$ID."'";

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