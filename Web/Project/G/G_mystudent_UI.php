<?php 
session_start();

if(isset($_SESSION['guardian_data']))
{
  $user = $_SESSION['guardian_data'];
  $ID = "$user[Guardian_ID]";
}
else
{
  $name = "ERROR";
  header("Location: G_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head onload = "studentSelection()">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" type = "text/css" href = "teachercourse.css">

</head>
<div class="topnav">
  <a class = "active">Student course</a>
  <div class="search-container">
    <form>
        <div class="box">
             <select name="semester" id="semester" onchange="studentInfo() ">
             <option value = "" selected disabled hidden>Semester</option>
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
        <div class="boxsecond">
            <select id = "classID" onchange="studentInfo()">
            <option value = "" selected disabled hidden>Student ID</option>
            </select>
        </div>
    </form>
  </div>
</div>
<body onload="studentSelection()">

  </div>
    <div class="wrapper">
  
        <div class="table" id = "student">


        </div>
      </div>
  

</body>
</html>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  
function studentSelection()
  {

      var id = <?php echo $ID; ?>;

      $.ajax(
      {
        type:"post",
        url:"G_mystudent_getstudent.php",
        data:
        {
          user_id:id,
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var select = "";

        select += "<option value = \"\" selected disabled hidden>Student ID</option>";


        for(var i= 0; i <  data.length ; i++)
        {
                    select += "<option value = \"" + data[i].Students_ID + "\" >" 
                    + data[i].Students_ID + "</option>";
                            }
         document.getElementById("classID").innerHTML = select;
       
        }
       
      });
      return false;
  }


 function studentInfo()
  {
      var id = document.getElementById('classID').value;
      var semester = document.getElementById('semester').value;
      
      $.ajax(
      {
        type:"post",
        url:"G_mystudents_grade.php",
        data:
        {
          user_id:id,
          user_semester:semester
        },
        cache:false,
        success: function(result)
        {
          var html = "";
          html += "<div class=\"row header\">";
          html += "<div class=\"cell\">";
          html += "Student's ID";
          html += "</div>";
          html += "<div class=\"cell\">";
          html += "Student's Name";
          html += "</div>";
          html += "<div class=\"cell\">";
          html += "ClassName";
          html += "</div>";
          html += "<div class=\"cell\">";
          html += "Student's GPA";
          html += "</div>";
          html += "</div>";


          if(result.length == 9)
          {
              html +=    "<div class=\"row\">";
              html +=    "<div class=\"cell\" data-title=\"Class_ID\">";
              html +=    "No Result";
              html +=    "</div>";
          }
          else
          {
          var data = JSON.parse(result);
          var sumGPA = 0;

        for(var i= 0; i <  data.length ; i++)
        {

        html +=    "<div class=\"row\">";
        html +=    "<div class=\"cell\" data-title=\"Class_ID\">";
        html +=    data[i].Students_ID;
        html +=    "</div>";

        html +=    "<div class=\"cell\" data-title=\"Course_ID\">";
        html +=    data[i].Students_FirstName + "&ensp;" + data[i].Students_MiddleName + "&ensp;" + data[i].Students_LastName;
        html +=    "</div>";

        html +=    "<div class=\"cell\" data-title=\"Class_ID\">";
        html +=    data[i].Subject_Name;
        html +=    "</div>";

        html +=    "<div class=\"cell\" data-title=\"Class_ID\">";
        html +=    data[i].GPA;
        html +=    "</div>";
        html +=    "</div>";

        sumGPA = sumGPA + (data[i].GPA );


        }

        var GPAX = sumGPA / data.length;

        html += "<div class = \"row bottom\">";
        html += "<div class=\"cell\" data-title=\"AVG_GPAX\">";
        html += "AVG GPAX :" + GPAX.toFixed(2) ;

      }

  document.getElementById("student").innerHTML = html;
        }
      });
      return false;
  }


</script>

