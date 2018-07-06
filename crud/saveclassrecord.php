<?php
if(ISSET($_POST['submit'])){
    $w1 = $_POST["w1"];
    $w2 = $_POST["w2"];
    $w3 = $_POST["w3"];
    $w4 = $_POST["w4"];
    $w5 = $_POST["w5"];
    $w6 = $_POST["w6"];
    $w7 = $_POST["w7"];
    $w8 = $_POST["w8"];
    $w9 = $_POST["w9"];
    $w10 = $_POST["w10"];
    $gw1 = $_POST["gw1"];
    $gw2 = $_POST["gw2"];
    $gw3 = $_POST["gw3"];
    $gw4 = $_POST["gw4"];
    $gw5 = $_POST["gw5"];
    $gw6 = $_POST["gw6"];
    $gw7 = $_POST["gw7"];
    $gw8 = $_POST["gw8"];
    $gw9 = $_POST["gw9"];
    $gw10 = $_POST["gw10"];
    $name = $_POST['name'];
    $gname = $_POST['gname'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $school_year = $_POST['school_year'];
    $new = "";


 echo "name:"; print_r($gname);
    echo "gw1:"; print_r($gw1);
    
    
    
    
    
    
    
    
    
    
    
    
    
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    foreach(array_combine($name,$w1) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w1')") or die(mysqli_error());
    }
    foreach(array_combine($name,$w2) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w2')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w3')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w4')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w5')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w6')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w7')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w8')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w9')") or die(mysqli_error());
    }
     foreach(array_combine($name,$w10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w10')") or die(mysqli_error());
    }
    //========================female
   
    foreach(array_combine($gname,$gw1) as $new => $value){
       
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw1')") or die(mysqli_error());
    }
    foreach(array_combine($gname,$gw2) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw2')") or die(mysqli_error());
        
    }
     foreach(array_combine($gname,$gw3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw3')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw4')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw5')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw6')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw7')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw8')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw9')") or die(mysqli_error());
    }
     foreach(array_combine($gname,$gw10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw10')") or die(mysqli_error());
    }    
    
    
    
   }

    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
    //echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name'</script>";  

?>
