<?php
if(ISSET($_POST['editprincipa'])){
    $principal_id = $_POST['principal_id'];
	$fullname = $_POST['fullname'];
    $designation = $_POST['designation'];
    $years = $_POST['years'];
    $enrollment = $_POST['enrollment'];
    $teacher = $_POST['teacher'];
    $original = $_POST['original'];
    $permanency = $_POST['permanency'];
    $latest = $_POST['latest'];
    $position = $_POST['position'];
    $plantilla = $_POST['plantilla'];
    $bp = $_POST['bp'];
    $attainment = $_POST['attainment'];   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$conn->query("UPDATE `tblprincipal` SET `principal_name` = '$fullname', `principal_designation` = '$designation', `principal_years` = '$years',
    `principal_enrollment` = '$enrollment', `principal_teacher` = '$teacher' WHERE `principal_id` = '$principal_id'") or die(mysqli_error());

	echo "<script type='text/javascript'>alert('Successfully updated principal!');</script>";
	echo "<script>document.location='../principal.php'</script>";  
}

?>