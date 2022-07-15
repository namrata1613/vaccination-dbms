<?php 
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
    

?>
