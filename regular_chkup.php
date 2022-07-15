<?php 
    if(isset($_POST['submit'])){
    $EpId = $_POST['EpId'];
    $Result = $_POST['Result'];

    // database connection

    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else{
        $stmt = $conn->prepare("insert into RegCheckup(EpId,Result) values (?,?)");
        $stmt->bind_param("ss",$EpId,$Result);
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
    <title>Regular Checkup Form</title>
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
        <h1>Regular checkup Details</h1>
    </div>
    <div >
        <form action="form_reg_action.php" method="post">

            <label for="EpId">Ep Id :</label><br>
            <input type="text" id="EpId" name="EpId" ><br>

            <label for="Result">
                <label for="reg_yes" class="radio-inline"> 
                <input type="radio" id="reg_yes" name="Result" value="+"> Yes</label><br>
                <label for="reg_no" class="radio-inline"> 
                <input type="radio" id="reg_no" name="Result" value="-"> No</label><br>
            </label>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>