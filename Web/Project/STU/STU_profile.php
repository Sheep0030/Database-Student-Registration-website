<?php 
session_start();
$a = "Test";
if(isset($_SESSION['students_data']))
{
  $userdata = $_SESSION['students_data'];
  $FirstName = "$userdata[Students_FirstName]";
  $MiddleName = "$userdata[Students_MiddleName]";
  $LastName = "$userdata[Students_LastName]";
  $Email = "$userdata[Email]";
  $ID = "$userdata[Students_ID]";
  $Department = "$userdata[Department_ID]";
  $BirthDate = "$userdata[BirthDate]";
  $Phone = "$userdata[Cell_Number]";
  $Gender = "$userdata[Gender]";

}
else
{
  $name = "ERROR";
  header("Location: STU_login.php");
}

?>

<!DOCTYPE html>
<html>
<head><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function grade()
  {
      var id = <?php echo $ID; ?>;
      var semester = document.getElementById('semester').value;
      
      $.ajax(
      {
        type:"post",
        url:"STU_profile_grade.php",
        data:
        {
          user_id:id,
          user_semester:semester
        },
        cache:false,
        success: function(result)
        {
            var html = "";
            if(result == "No Result")
        {
                html += "<tr>";
                html += "<td> No Result </td>"
                html += "</tr>";
        }
        else
        {
          var data = JSON.parse(result);
          var sumGPA = 0;
          var sumCredit = 0;
          

        for(var i= 0; i <  data.length ; i++)
        {

        html += "<tr>";
        html += "<td>" + data[i].Subject_Name + "</td>";
        html += "<td>" + data[i].GPA + "</td>";
        html += "<td>" + data[i].Credit + "</td>";
        html += "</tr>";
        sumGPA = sumGPA + (data[i].GPA * data[i].Credit);
        sumCredit = sumCredit + data[i].Credit;

        }

        var GPAX = sumGPA / sumCredit;
        html += "<p> GPAX  :" + GPAX.toFixed(2) ;
    }
  document.getElementById("gradeData").innerHTML = html;
        }
      });
      return false;
  }







function guardianselection()
  {

      var id = <?php echo $ID; ?>;

      $.ajax(
      {
        type:"post",
        url:"STU_profile_guardian.php",
        data:
        {
          user_id:id,
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var select = "";

        select += "<option value = \"\" selected disabled hidden>Guardian Role</option>";


        for(var i= 0; i <  data.length ; i++)
        {
                    select += "<option value = \" " + data[i].Guardian_ID +" \">"+ data[i].Relation_Type + "( " + data[i].Guardian_FirstName  + " ) </option>";
        }

       document.getElementById("guardianSelect").innerHTML = select;
        }
      });
      return false;
  }



function guardian()
  {

      var id = <?php echo $ID; ?>;

      $.ajax(
      {
        type:"post",
        url:"STU_profile_guardian.php",
        data:
        {
          user_id:id,
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var table = "";

        document.getElementById("GFName").innerHTML = data[0].Guardian_FirstName;
        document.getElementById("GMName").innerHTML = "&nbsp;" + data[0].Guardian_MiddleName;
        document.getElementById("GLName").innerHTML = data[0].Guardian_LastName;
        document.getElementById("GPhone").innerHTML = "&emsp;&ensp;&nbsp;" + data[0].Cell_Number;
        document.getElementById("GEmail").innerHTML = "&emsp;&emsp;&nbsp;" + data[0].Email;
        document.getElementById("GGender").innerHTML ="&emsp;&ensp;" + data[0].Gender;
        document.getElementById("GBDate").innerHTML = "&ensp;" + data[0].BirthDate;

        }
      });
      return false;
  }






function addrass()
  {

      var id = <?php echo $ID; ?>;

      $.ajax(
      {
        type:"post",
        url:"STU_profile_addrass.php",
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
    <link rel="stylesheet" type = "text/css" href = "newpersonalinfo.css">
    <title>Personal info</title>
</head>

<body onload= "guardianselection();addrass();grade()">
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


        <div class="column"  id = "c2">
          <div class="course">
                <h2 class = "header" >Courses</h2>
                
                <div class="custom-select">
                <label for="semester">Select a semester:</label>
                <select name="semester" id="semester" onchange="grade()">
                     <option value="2/2021">2/2021</option>
                     <option value="1/2021">1/2021</option>
                     <option value="2/2020">2/2020</option>
                     <option value="1/2020">1/2020</option>
                     <option value="2/2019">2/2019</option>
                     <option value="1/2019">1/2019</option>
                     <option value="2/2018">2/2018</option>
                     <option value="1/2018">1/2018</option>
                     <option value="2/2017">2/2017</option>
                     <option value="1/2017">1/2017</option>
                     <option value="2/2016">2/2016</option>
                     <option value="1/2016">1/2016</option>
                </select>
                </div>
                <table class = "table" id = "tablecourse">
                    <tr>
                      <th>Course name</th>
                      <th>Credits</th>
                      <th>Grade</th>
                    </tr>
                    <tbody id = gradeData>
                    </tbody>
                  </table>
                </div>
           
        </div>


        <div class = "column" id = "c3">
            <div class = "guardianinfo">
                <h2 class = "header" >Guardian Info</h2>
                <label for="guardian">Select a Guardian:</label>
                <select name="guardian" id="guardianSelect" onchange="guardian()">
                </select>

              <div class = "wrapper">
                <span class = "profilesubject">
                    First name
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GFName>
                  </span>
                </br>
                <span class = "profilesubject">
                    Middle name
                  </span>
                <span class = "profilevalue" ID = GMName>

                  </span>
                </br>
                <span class = "profilesubject">
                    Last Name
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GLName>

                  </span>
                </br>
                <span class = "profilesubject">
                    Gender
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GGender>

                  </span>
                </br>
                <span class = "profilesubject">
                    Birthdate
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GBDate>

                  </span>
                </br>
                <span class = "profilesubject ">
                    Phone
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GPhone>

                  </span>
                </br>
                <span class = "profilesubject">
                    Email
                  </span>
                <span class = "profilevalue nameextrapadding" ID = GEmail>

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