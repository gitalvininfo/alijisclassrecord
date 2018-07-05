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
      
?>