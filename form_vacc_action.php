<?php 
    $CertNo = $_POST['CertNo'];
    $Id = $_POST['Id'];
    $FirstVaccineDate = $_POST['FirstVaccineDate'];
    $SecondVaccineDate = $_POST['SecondVaccineDate'];
    $vaccineName = $_POST['vaccineName'];

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
    

?>

<?php 
    if(isset($_POST['submit'])){
    
    $var;

    // database connection

    $conn = new mysqli('localhost','root','','postcovidproj');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn ->connect_error);
    }else{
        $stmt = $conn->prepare(" SQL query");
        $stmt->bind_param("s/i",$var);
        $stmt->execute();
        echo "successful ";
        $stmt->close();
        $conn->close();
    }
}

?>

