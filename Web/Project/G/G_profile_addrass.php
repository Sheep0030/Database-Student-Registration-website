<?php 
session_start();

if(isset($_SESSION['students_data']))
{
	$userdata = $_SESSION['guardian_data'];
}

$host="localhost";
$user="root";
$pword="";
$db="students_registration";


$con = mysqli_connect($host,$user,$pword);
mysqli_select_db($con,$db);

$ID = $_POST['user_id'];


    $sql="select s.Guardian_ID, s.Guardian_FirstName, s.Guardian_MiddleName, 
    s.Guardian_LastName, s.Cell_Number, s.Email, s.Gender, s.BirthDate, 
    s.Register_Date, r.Address_Number, r.Owner_Name, r.Owner_Contact, r.Sub_dist, 
    r.Province, r.City, r.Postal_Code, r.Street, r.Building, r.Other
         FROM (guardian_data s JOIN address_data r ON s.address_number = r.address_number)
         where s.Guardian_ID = '".$ID."'";

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