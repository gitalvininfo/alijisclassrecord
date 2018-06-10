<?php

if(ISSET($_POST['addsubject'])){
    $subject = $_POST['subject'];
    $room = $_POST['room'];
    $schedule = $_POST['schedule'];
    $grade = $_POST['grade'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn->query("INSERT INTO `tblsubjects` VALUES('', '$subject', '$room', '$schedule', '$grade')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new subjects!');</script>";
    echo "<script>document.location='../subjects.php'</script>";  

}

?>