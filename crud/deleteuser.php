<?php
if(ISSET($_POST['deleteuser'])){
    $user_id = $_POST['user_id'];
   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `tbluser`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	

	$conn->query("DELETE FROM `tbluser` WHERE `user_id` = '$user_id'") or die(mysqli_error());


	echo "<script type='text/javascript'>alert('Successfully deleted user!');</script>";
	echo "<script>document.location='../users.php'</script>";  
}

?>