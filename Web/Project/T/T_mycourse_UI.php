<?php 
session_start();

if(isset($_SESSION['teacher_data']))
{
  $user = $_SESSION['teacher_data'];
  $name = "$user[Teacher_Name]";
  $ID = "$user[Teacher_ID]";
}
else
{
  $name = "ERROR";
  header("Location: T_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head onload = "classSelection()">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" type = "text/css" href = "teachercourse.css">

</head>
<div class="topnav">
  <a class = "active">My course</a>
  <div class="search-container">
    <form >
        <div class="box">
             <select name="semester" id="semester" onchange="classSelection();studentInfo()">
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
            <option value = "" selected disabled hidden>Class ID</option>
            </select>
        </div>
    </form>
  </div>
</div>
<body>

  </div>
    <div class="wrapper">
  
        <div class="table" id = "student">


        </div>
      </div>
  

</body>
</html>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  
function classSelection()
  {

      var id = <?php echo $ID; ?>;
      var semester = document.getElementById("semester").value;

      $.ajax(
      {
        type:"post",
        url:"T_mycourse_getclass.php",
        data:
        {
          user_id:id,
          user_semester:semester
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var select = "";

        select += "<option value = \"\" selected disabled hidden>Class ID</option>";


        for(var i= 0; i <  data.length ; i++)
        {
                    select += "<option value = \"" + data[i].Class_ID + "\" >" 
                    + data[i].Class_ID + "</option>";
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
        url:"T_mycourse_getstudent.php",
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
          var maxGPA = 0;
          var minGPA = 4;
          


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
        html +=    data[i].GPAX;
        html +=    "</div>";
        html +=    "</div>";

        sumGPA = sumGPA + (data[i].GPAX );

        if(data[i].GPAX > maxGPA)
          maxGPA = data[i].GPAX;

        if(data[i].GPAX < minGPA)
          minGPA = data[i].GPAX;

        }

        var GPAX = sumGPA / data.length;

        html += "<div class = \"row bottom\">";
        html += "<div class=\"cell\" data-title=\"AVG_GPAX\">";
        html += "AVG GPAX :" + GPAX.toFixed(2) ;
        html += "</div>";
        html += "<div class=\"cell\" data-title=\"MAX_GPAX\">";
        html += "MAX GPAX :" + maxGPA;
        html += "</div>";
        html += "<div class=\"cell\" data-title=\"MIN_GPAX\">";
        html += "MIN GPAX :" + minGPA;
        html += "</div>";
        html += "</div>";
      }

  document.getElementById("student").innerHTML = html;
        }
      });
      return false;
  }


</script>

