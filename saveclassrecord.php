<?php
if(ISSET($_POST['submit'])){
    $w1 = $_POST["w1"];
    $name = $_POST['name'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $new = "";
  
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    foreach(array_combine($name,$w1) as $new => $value){
    
        $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name')") or die(mysqli_error());
     }
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
    echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name'</script>";  
}
?>
