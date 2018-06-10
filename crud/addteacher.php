<?php

if(ISSET($_POST['addteacher'])){
    $name = $_POST['name'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $birthdate = $_POST['birthdate'];
    $tin = $_POST['tin'];
    $original = $_POST['original'];
    $permanency = $_POST['permanency'];
    $latest = $_POST['latest'];
    $position = $_POST['position'];
    $plantilla = $_POST['plantilla'];
    $bp = $_POST['bp'];
    $attainment = $_POST['attainment'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn->query("INSERT INTO `tblteacher` VALUES('', '$name', '$middle', '$last', '$birthdate', '$tin', '$original', '$permanency', '$latest', '$position', '$plantilla', '$bp', '$attainment')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new teacher!');</script>";
    echo "<script>document.location='../teachers.php'</script>";  

}

?>