<?php

if(ISSET($_POST['adduser'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userrole = $_POST['userrole'];
    
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
       
    $q1 = $conn->query ("SELECT * FROM `tbluser` WHERE BINARY `user_username` = '$username'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Username name already exist!')</script>";
        echo "<script>document.location='users.php.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `tbluser` VALUES('', '$username', '$password', '$userrole')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new user!');</script>";
        echo "<script>document.location='users.php'</script>";  
    }
}

?>