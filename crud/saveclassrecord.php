<?php

if(ISSET($_POST['submit'])){
    $score = $_POST["score"];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $number = $_POST['number'];
    $new = "";
    foreach($score as $value)  
    {  
        $new = $value;
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $conn->query("INSERT INTO `test` VALUES('', '$new', '$teacher_id', '$subject_name', '$number')") or die(mysqli_error());
        $conn->close();
    }


    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
    echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name'</script>";  
}

?>