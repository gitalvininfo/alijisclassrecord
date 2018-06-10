<?php

if(ISSET($_POST['addprincipal'])){
    $fullname = $_POST['fullname'];
    $designation = $_POST['designation'];
    $years = $_POST['years'];
    $enrollment = $_POST['enrollment'];
    $teacher = $_POST['teacher'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn->query("INSERT INTO `tblprincipal` VALUES('', '$fullname', '$designation', '$years', '$enrollment', '$teacher')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new principal!');</script>";
    echo "<script>document.location='../principal.php'</script>";  

}

?>