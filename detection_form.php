
<?php 
  if(isset($_POST['submitd'])){
    $RTPCRId = $_POST['RTPCRId'];
    $EpId = $_POST['EpId'];
    $LeavingDate = $_POST['LeavingDate'];
    $Hospital = $_POST['Hospital'];
  
    // database connection
    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else {
        $stmt = $conn->prepare("insert into Diagnosed(RTPCRId,EpId,LeavingDate,Hospital) values (?,?,?,?)");
        $stmt->bind_param("ssss",$RTPCRId,$EpId,$LeavingDate,$Hospital);
        $stmt->execute();
        echo "insertion successful diagnosed !";
        $stmt->close();
        $conn->close();
    }
  } 
    else if (isset($_POST['submitp'])){
      $AntigenTestId = $_POST['AntigenTestId'];
      $EpId_ = $_POST['EpId_'];
      $LeavingDate = $_POST['LeavingDate'];

       // database connection
    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else {
      $stmt = $conn->prepare("insert into Probable(AntigenTestId,EpId,LeavingDate) values (?,?,?)");
      $stmt->bind_param("ssss",$AntigenTestId,$EpId,$LeavingDate);
      $stmt->execute();
      echo "insertion successful in probable !";
      $stmt->close();
      $conn->close(); }      
    } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detection Details Form</title>
    <link rel = "stylesheet" type="text/css" href="det_forms.css"> 
</head>

<style>
    #heading{
    display: block;
    color: whitesmoke;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color: black;
    margin-left: 33%;
    margin-right: 20%;
    }
    #forms_hid1{
    display: block;
    float : center;
    margin : 60px 100px 50px 500px;
    background-color : white;
    width : 400px;
    font-size: 15px;
    color : darkgray;
    padding : 20px;  
    line-height: 40px;
    font-family:Autour One; 
    }
    #forms_hid2{
    display: block;
    float : center;
    margin : 60px 100px 50px 500px;
    background-color : white;
    width : 400px;
    font-size: 15px;
    color : darkgray;
    padding : 20px;  
    line-height: 40px;
    font-family:Autour One; 
    }
    


</style>
<body>
    <div id="heading">
        <h1>Detection Details</h1>
    </div>
    <ul class="navbar">
        <li><a ><button  class="button" onclick="myFunction_2()">Probable</button></a></li>
        <li><a ><button  class="button" onclick="myFunction_1()">Diagnosed</button></a></li>
    </ul>

    
    <div id="forms_hid1" style="display: none;">
        <form action="form_detect._action.php" method="post">
            <label for="RTPCRId">RTPCRId :</label><br>
            <input type="text" id="RTPCRId" name="RTPCRId" ><br>

            <label for="EpId">Id :</label><br>
            <input type="text" id="EpId" name="EpId"><br>

            <label for="LeavingDate">Date of Leave :</label><br>
            <input type="date" id="LeavingDate" name="LeavingDate"><br>

            <label for="Hospital">Hospital name :</label><br>
            <input type="text" id="Hospital" name="Hospital" value="Home-Quarantine"><br><br>

            <input type="submit" value="Submit" name="submitd">
        </form>
    </div>
    <div id="forms_hid2" style="display: none;">
        <form action="form_detect._action.php" method="post">
            <label for="AntigenTestId">Antigen Test Id :</label><br>
            <input type="text" id="AntigenTestId" name="AntigenTestId" ><br>

            <label for="EpId_">Id :</label><br>
            <input type="text" id="EpId_" name="EpId_"><br>

            <label for="LeavingDate">Date of Leave :</label><br>
            <input type="date" id="LeavingDate" name="LeavingDate"><br>

            <input type="submit" value="Submit" name="submitp">
        </form>
    </div>

    <script>
        function myFunction_1() {
          var x = document.getElementById("forms_hid1");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        function myFunction_2() {
          var x = document.getElementById("forms_hid2");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>


</body>
</html>