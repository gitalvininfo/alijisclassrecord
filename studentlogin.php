<?php
session_start();
require ('connection.php');
if(ISSET($_POST['login'])){
	$lrn = $_POST['lrn'];

	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `enrollstudent` WHERE `lrn` = '$lrn'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	$lrn = $fetch['lrn'];


	if($valid > 0){
			echo '<meta http-equiv="refresh" content="1;url=homestudent.php">';        
    }
    else{
        echo "<script>alert('Invalid account. Please check your username and password.')</script>";
        echo "<script>window.location = 'student.php'</script>";
    }
	

	$conn->close();
}	
?>
