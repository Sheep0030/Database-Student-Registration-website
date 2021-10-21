<?php 
session_start();
unset($_SESSION['guardian_data']);
$host="localhost";
$user="root";
$pword="";
$db="students_registration";


$con = mysqli_connect($host,$user,$pword);
mysqli_select_db($con,$db);

$uname = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");


if(!empty($uname))
    if(!empty($password))
    {
     
    $sql="select * from guardian_data where guardian_id ='".$uname."'AND Password_G ='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    $sendResult = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==1){
        $_SESSION['guardian_data'] = $sendResult;
        header("Location: G_mainmenu.php");
    }
    else{

        header("Location: G_login_Error.php");
    }
    mysqli_close($con);
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type = "text/css" href = "Guardian_login.css">
</head>
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form  method = "POST" action="G_login.php">
            <h2>Welcome to<br/>Pong University</h2>
            <br/>
            <span>Guardian Login</span>
            <input type="text" id="studentUsername" name = "username" minlength = 1 maxlength = 12  placeholder="Guardian ID" pattern="[A-Za-z0-9]+"/>
            <input type="password" id="studentPassword" name = "password" minlength = 8 maxlength = 16 placeholder="Password" pattern="[A-Za-z0-9]+" />
            <br/>
            <button>Sign In</button>
            <p id = "invisible">invisible</p>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">    
            </div>
            <div class="overlay-panel overlay-right">
            </div>
        </div>
    </div>
</div>
