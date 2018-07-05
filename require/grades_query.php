<<<<<<< HEAD
<?php

   


   

    function getW($schoolyear, $teacherid, $subject, $gender, $writtennum){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear' && `written_num` = '$writtennum'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['score'];
        }
       
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $nameArray;
        }
          
    }
    function gettotal($schoolyear, $teacherid, $subject, $gender){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['name'];
        }
       
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $nameArray;
        }
          
    }
      
=======
<?php

   


   

    function getW1($schoolyear, $teacherid, $subject, $gender){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w1'") or die(mysqli_error());

        while($fetch1 = $scores->fetch_array()){
            
    $nameArray[] = $fetch1['score'];
        
        }
        
//       
//        while($rows = mysqli_fetch_array($scores)) {
//            // Append to the array
//            $nameArray[] = $rows['name'];   
//          
//}
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $nameArray;
        }
          
    }
      
>>>>>>> 88d8fd749ef52f95c35c368b6e1b0f501f7f77bf
?>