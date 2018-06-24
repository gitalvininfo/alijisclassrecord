<?php
if(ISSET($_POST['addyear'])){
    $school_year = $_POST['school_year'];
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    $conn->query("INSERT INTO `schoolyear` VALUES('', '$school_year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new school year!');</script>";
    echo "<script>document.location='../schoolyear.php'</script>";  
}
?>