<?php 
session_start();
$a = "Test";
if(isset($_SESSION['guardian_data']))
{
  $userdata = $_SESSION['guardian_data'];
  $FirstName = "$userdata[Guardian_FirstName]";
  $MiddleName = "$userdata[Guardian_MiddleName]";
  $LastName = "$userdata[Guardian_LastName]";
  $Email = "$userdata[Email]";
  $ID = "$userdata[Guardian_ID]";
  $BirthDate = "$userdata[BirthDate]";
  $Phone = "$userdata[Cell_Number]";
  $Gender = "$userdata[Gender]";

}
else
{
  $name = "ERROR";
  header("Location: G_login.php");
}

?>

<!DOCTYPE html>
<html>
<head><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  

function addrass()
  {

      var id = <?php echo $ID; ?>;

      $.ajax(
      {
        type:"post",
        url:"G_profile_addrass.php",
        data:
        {
          user_id:id,
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var table = "";

     
       document.getElementById("ANumber").innerHTML = "" + data[0].Address_Number;
       document.getElementById("OName").innerHTML = "" + data[0].Owner_Name;
       document.getElementById("OContact").innerHTML = "&emsp;" + data[0].Owner_Contact;
       document.getElementById("SDistrict").innerHTML = "&ensp;" + data[0].Sub_dist;
       document.getElementById("Province").innerHTML = "&emsp;&emsp;" + data[0].Province;
       document.getElementById("City").innerHTML = "&emsp;&emsp;&emsp;&emsp;&nbsp;" + data[0].City;
       document.getElementById("PCode").innerHTML = "&nbsp;" + data[0].Postal_Code;
       document.getElementById("Street").innerHTML = "&emsp;&emsp;&emsp;&nbsp;" + data[0].Street;
       document.getElementById("Building").innerHTML = "&emsp;&emsp;&nbsp;" + data[0].Building;
       document.getElementById("Other").innerHTML = "&emsp;&emsp;&emsp;&ensp;" + data[0].Other;
        }
      });
      return false;
  }






</script>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href = "guardianinfo.css">
    <title>Personal info</title>
</head>

<body onload= "addrass()">
  <div class= "row">
        <div class= "column" id = "c1">
            <div class= "personalinfo">
              <h2 class = "header">Personal info</h2>

               <div class = "wrapper">
                <span class = "profilesubject">
                    First name
                  </span>
                <span class = "profilevalue nameextrapadding">
                    <?php echo $FirstName; ?>
                  </span>
                </br>
                <span class = "profilesubject">
                    Middle name
                  </span>
                <span class = "profilevalue">
                    <?php echo $MiddleName; ?>
                  </span>
                </br>
                <span class = "profilesubject">
                    Last name
                  </span>
                <span class = "profilevalue nameextrapadding">
                    <?php echo $LastName; ?>
                  </span>
                </br>
                <span class = "profilesubject">
                    Gender
                  </span>
                <span class = "profilevalue nameextrapadding">
                    &emsp;&ensp;<?php echo $Gender; ?>
                  </span>
                </br>
                <span class = "profilesubject">
                    Birthdate
                  </span>
                <span class = "profilevalue nameextrapadding">
                    &ensp;<?php echo $BirthDate; ?>
                  </span>
                </br>
                <span class = "profilesubject ">
                    Phone
                  </span>
                <span class = "profilevalue nameextrapadding">
                    &emsp;&ensp;&nbsp;<?php echo $Phone; ?>
                  </span>
                </br>
                <span class = "profilesubject">
                    Email
                  </span>
                <span class = "profilevalue nameextrapadding">
                    &emsp;&emsp;&nbsp;<?php echo $Email; ?>
                  </span> 
                </div>
            </div> 
        </div>


        <div class = "column" id = "c4">
            <h2 class = "header" >Address</h2> 
            </br>
            <div class = "wrapper" id = "address">
                <span class = "profilesubject">
                    Owner name
                  </span>
                <span class = "profilevalue addressextrapadding" id = OName>

                  </span>
                </br>
                <span class = "profilesubject">
                    Owner contact
                  </span>
                <span class = "profilevalue" id = OContact>

                  </span>
                </br>
                <span class = "profilesubject">
                    Address number
                  </span>
                <span class = "profilevalue" ID = ANumber>

                  </span>
                </br>
                <span class = "profilesubject">
                    Building
                  </span>
                <span class = "profilevalue addressextrapadding" ID = Building>

                  </span>
                </br>
                <span class = "profilesubject">
                    Street
                  </span>
                <span class = "profilevalue addressextrapadding" ID = Street>

                  </span>
                </br>
                <span class = "profilesubject">
                    Sub district
                  </span>
                <span class = "profilevalue addressextrapadding" ID = SDistrict>
                  </span>
                </br>
                <span class = "profilesubject">
                    City
                  </span>
                <span class = "profilevalue addressextrapadding" ID = City>
                  </span> 
                </br>
                  <span class = "profilesubject">
                    Province
                  </span>
                <span class = "profilevalue addressextrapadding" ID = Province>
                  </span>
                </br>
                <span class = "profilesubject">
                    Postal Code
                  </span>
                <span class = "profilevalue addressextrapadding" ID = PCode>
                  </span>
                </br>
                <span class = "profilesubject">
                    Other
                  </span>
                <span class = "profilevalue addressextrapadding" ID = Other>
                  </span>
                </div>
        </div>
    </div>





</body>
</html>