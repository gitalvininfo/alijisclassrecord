<?php
if(ISSET($_POST['submit'])){
    $w1 = $_POST["w1"];
    $name = $_POST['name'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $new = "";
    $try = "";
    
   // echo "<br> value :";    print_r($value => $content);
   
      
  //  echo "value :";  print_r($w1);     
  //  echo "<br> name :";  print_r($name);
   // $c=array_combine($name,$w1);
  // echo "<br> combine :";  print_r($c); 
   // $i = 0; 
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    foreach(array_combine($name,$w1) as $new => $value){
      //   echo "<br> name :";  print_r($new); 
      //     echo "<br> value :";  print_r($value); 
      //   echo "<br> new :";  print_r($new);
         //print_r($c);
        // $i = $i + 1;  
        $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name')") or die(mysqli_error());
     }
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
    echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name'</script>";  
}
?>
