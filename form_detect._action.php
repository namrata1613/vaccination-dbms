<?php 
    $RTPCRId = $_POST['RTPCRId'];
    $EpId = $_POST['EpId'];
    $LeavingDate = $_POST['LeavingDate'];
    $Hospital = $_POST['Hospital'];

    $AntigenTestId = $_POST['AntigenTestId'];
    $EpId_ = $_POST['EpId_'];
    $LeavingDate = $_POST['LeavingDate'];

    // database connection

    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else if {
        $stmt = $conn->prepare("insert into Diagnosed(RTPCRId,EpId,LeavingDate,Hospital) values (?,?,?,?)");
        $stmt->bind_param("ssss",$RTPCRId,$EpId,$LeavingDate,$Hospital);
        $stmt->execute();
        echo "insertion successful diagnosed !";
        $stmt->close();
        $conn->close();
    }
    else if {
        $stmt = $conn->prepare("insert into Probable(AntigenTestId,EpId,LeavingDate) values (?,?,?)");
        $stmt->bind_param("ssss",$AntigenTestId,$EpId,$LeavingDate);
        $stmt->execute();
        echo "insertion successful in probable !";
        $stmt->close();
        $conn->close();
    }
?>