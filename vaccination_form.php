<?php 
    if(isset($_POST['submit'])){
    $CertNo = $_POST['CertNo'];
    $Id = $_POST['Id'];
    $FirstVaccineDate = $_POST['FirstVaccineDate'];
    $SecondVaccineDate = $_POST['SecondVaccineDate'];
    $vaccineName = $_POST['vaccineName'];
    
    if(empty($SecondVaccineDate)){$SecondVaccineDate=NULL;}else{$SecondVaccineDate="'" . mysql_real_escape_string($SecondVaccineDate) . "'";}

    // database connection

    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else{
        $stmt = $conn->prepare("insert into vaccination(CertNo,vaccineName,Id,FirstVaccineDate,SecondVaccineDate) values (?,?,?,?,?)");
        $stmt->bind_param("sssss",$CertNo,$vaccineName,$Id,$FirstVaccineDate,$SecondVaccineDate);
        $stmt->execute();
        echo "insertion successful !";
        $stmt->close();
        $conn->close();
    }
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Details Form</title>
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

</style>
<body>
    <div id="heading">
        <h1>Vaccination Details</h1>
    </div>
    <div >
        <form action="vaccination_form.php" method="post">
            <label for="CertNo">Certificate No. :</label><br>
            <input type="text" id="CertNo" name="CertNo" ><br>

            <label for="Id">Id :</label><br>
            <input type="text" id="Id" name="Id"><br>

            <label for="FirstVaccineDate">First Vaccination Date :</label><br>
            <input type="date" id="FirstVaccineDate" name="FirstVaccineDate"><br>

            <label for="SecondVaccineDate">Second Vaccination Date :</label><br>
            <input type="date" id="SecondVaccineDate" name="SecondVaccineDate"><br><br>

            <label for="vaccineName">
                <label for="covaxin" class="radio-inline"> 
                <input type="radio" id="covaxin" name="vaccineName" value="Covaxin"> Covaxin</label><br>
                <label for="covishield" class="radio-inline"> 
                <input type="radio" id="covishield" name="vaccineName" value="Covishield"> Covishield</label><br>
            </label>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>


</body>
</html>