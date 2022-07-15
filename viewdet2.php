

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Details</title>
    <style>
        <!--body 
            
            h2 {margin: 0;
                text-align: center;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.5cm;
            color:white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            background: black;}

            body{
                background-image: url(https://video.cgtn.com/news/2021-05-09/China-provides-vaccines-to-over-100-countries-intl-organizations--107hwRi941W/video/a0b9b772bd05477e8d67e13829fd7e40/a0b9b772bd05477e8d67e13829fd7e40.jpg);
                background-size:cover;
                background-repeat: no-repeat;
                background-color:cadetblue;
                
            }
            .button{background-color:darkblue;
            color: whitesmoke;
            padding: 15px 32px;
            font-family:serif;
            margin-left: 1cm;
            font-size: 0.5cm;
            cursor: pointer;}   

            .tableformat{
            display: block;
            float : center;
            margin : 60px 100px 50px 500px;
            background-color : white;
            width : 500px;
            font-size: 15px;
            color : darkgray;
            padding : 20px;  
            line-height: 40px;
            font-family:Autour One; 
            }

            table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 15px;
            text-align: center;
            float : center;
            }
            th{
            background-color: #588c7e;
            color: white;
            }
            

        
    </style>

    
</head>
<body>
    <h2>View Details</h2><br/>
        <div>
        <center>
        <br><br>
        <button class="button" onclick="clsrm()">Classroom</button>
        <button class="button" onclick="teach()">Teacher</button>
        <button class="button" onclick="vacn()">Vaccination</button>
        <br><br>
        </center>    
    </div>
    <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></center>

    
    <div id ="classroom" class="tableformat" style="display: none;">
      
    <table>
<tr>
<th>Class Name</th>
<th>Fully Vaccinated Students</th>
<th>Non Vaccinated Students</th>
<th>Partially Vaccinated Students</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "", "postcovidproj");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "call getClassData()";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["ClassID"] ."</td><td>". $row["Vaccinated"] ."</td><td>". $row["Not_Vaccinated"] ."</td><td>". $row["FirstDose"] ."</td></tr>";
	
	}
  }
 
?>
</table> <br>

<table>
<tr>
<th>Student ID</th>
<th>Name</th>
<th>Date of 1st Dose</th>
<th>Date of 2nd Dose</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "", "postcovidproj");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "select *from student ";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["SId"] ."</td><td>". $row["Sname"] ."</td><td>". $row["CertNo"] ."</td><td>". $row["ClassId"] ."</td><td>" . $row["BloodGrp"] ."</td></tr>";
	
	}
  }
 
?>
</table>


    </div>


    <div id="teacher" class="tableformat" style="display: none;">
      <table>
        <tr>
        <th>Certificate No.</th>
        <th>Vaccine Name</th>
        <th>Id</th>
        <th>First Dose Date</th>
        <th>Second Dose date</th>
        </tr>
        
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "postcovidproj");
         if ($conn-> connect_error)
         {
            die("Connection failed:". $conn-> connect_error);
         }
         $sql = "SELECT *from vaccination where Id regexp ('^F.*')";
         $result = $conn-> query($sql);
         
         if($result-> num_rows > 0)
         {
            while ($row = $result-> fetch_assoc())
          {
             echo "<tr><td>". $row["CertNo"] ."</td><td>". $row["vaccineName"] ."</td><td>". $row["Id"] ."</td><td>". $row["FirstVaccineDate"] ."</td><td>". $row["SecondVaccineDate"] ."</td></tr>";
          
          }
          }
         
        ?>
        </table>
        
    </div>
    <div id="vaccination" class="tableformat" style="display: none;">
    <table>
<tr>
<th>Certificate No.</th>
<th>Vaccine Name</th>
<th>Id</th>
<th>First Dose Date</th>
<th>Second Dose date</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "", "postcovidproj");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "SELECT *from vaccination";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["CertNo"] ."</td><td>". $row["vaccineName"] ."</td><td>". $row["Id"] ."</td><td>". $row["FirstVaccineDate"] ."</td><td>". $row["SecondVaccineDate"] ."</td></tr>";
	
	}
  }
 
?>
</table>

  </div>

    <script>
      function clsrm() {
        var x = document.getElementById("classroom");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      function teach() {
        var x = document.getElementById("teacher");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      function vacn() {
        var x = document.getElementById("vaccination");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      function myFunction() {
  var input, filter, table1, table3, tr, td, i, txtValue, table2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table1 = document.getElementById("vaccination");
  tr = table1.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }

  table2 = document.getElementById("teacher");
  tr = table2.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }  


table3 = document.getElementById("classroom");
  tr = table3.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }  
}
  </script>

</body>
</html>

