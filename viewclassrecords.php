
<?php 
require('require/grades_query.php');
$subject = $_GET['subject_name'];
$teacherid = $_GET['id'];
$schoolyear = $_GET['school_year'];

$gender = 'Male';
$gender2 = 'Female';

$W1 = getW($schoolyear, $teacherid, $subject,$gender,'w1');
$W2 = getW($schoolyear, $teacherid, $subject,$gender,'w2');
$W3 = getW($schoolyear, $teacherid, $subject,$gender,'w3');
$W4 = getW($schoolyear, $teacherid, $subject,$gender,'w4');
$W5 = getW($schoolyear, $teacherid, $subject,$gender,'w5');
$W6 = getW($schoolyear, $teacherid, $subject,$gender,'w6');
$W7 = getW($schoolyear, $teacherid, $subject,$gender,'w7');
$W8 = getW($schoolyear, $teacherid, $subject,$gender,'w8');
$W9 = getW($schoolyear, $teacherid, $subject,$gender,'w9');
$W10 = getW($schoolyear, $teacherid, $subject,$gender,'w10');

$GW1 = getW($schoolyear, $teacherid, $subject,$gender2,'gw1');
$GW2 = getW($schoolyear, $teacherid, $subject,$gender2,'gw2');
$GW3 = getW($schoolyear, $teacherid, $subject,$gender2,'gw3');
$GW4 = getW($schoolyear, $teacherid, $subject,$gender2,'gw4');
$GW5 = getW($schoolyear, $teacherid, $subject,$gender2,'gw5');
$GW6 = getW($schoolyear, $teacherid, $subject,$gender2,'gw6');
$GW7 = getW($schoolyear, $teacherid, $subject,$gender2,'gw7');
$GW8 = getW($schoolyear, $teacherid, $subject,$gender2,'gw8');
$GW9 = getW($schoolyear, $teacherid, $subject,$gender2,'gw9');
$GW10 = getW($schoolyear, $teacherid, $subject,$gender2,'gw10');


?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form name="submit" action="crud/saveclassrecord.php?id=<?php echo $teacherid?>&subject_name=<?php echo $subject?>&school_year=<?php echo $schoolyear?>" method="POST">
            <input type="submit" name="submit" value="Submit">
            <hr />
        <table border="1">
            <tr>

                <td width="5%" colspan="2" style="text-align:center;"><b>FIRST QUARTER</b></td>
                <td style="border-right:none;padding-left:2px;" width="25%" colspan="5" style="text-align:right;"><b>GRADE &SEC:</b></td>
                <td style="border-left:none;color:#000000;padding-left:10px;" colspan="6"><?php echo $_GET['subject_name']?></td>
                <td style="border-right:none;padding-left:2px;" width="10%" colspan="2" style="text-align:right;"><b>TEACHER:</b></td>
                <td width="10%"  style="border-left:none;color:#000000;padding-left:10px;" width="20%" colspan="10"><?php echo $_GET['id']?></td>
                <td style="border-right:none;padding-left:100px;" width="5%" colspan="6" style="text-align:right;"><b>SUBJECT </b></td>
                <td style="border-left:none;color:#000000;" colspan="2"><?php echo $_GET['subject_name']?></td>
            </tr>
            <tr>
                <td width="2%"></td>
                <td width="30%" style="text-align:center;"><h5><b>LEARNER'S NAMES</b></h5></td>
                <td width="10%" style="text-align:center;" colspan="13"><h5><b>WRITTEN WORKS (20%)</b></h5></td>
                <td width="10%" style="text-align:center;" colspan="13"><h5><b>PERFORMANCE TASK (60%)</b></h5></td>
                <td style="text-align:center;padding:0px 1px 0px 1px;" colspan="3"><h5><b>QUARTERLY ASSESSMENT (20%)</b></h5></td>
                <td width="1%" style="text-align:center;" rowspan="3"><h6><b>INITIAL GRADE</b></h6></td>
                <td width="1%" style="text-align:center;" rowspan="3"><h6><b>QUARTERLY GRADE</b></h6></td>
            </tr>
            <tr>
                <td></td>
                <td></td>

                <td width="3%" style="text-align:center;">1</td>
                <td width="3%" style="text-align:center;">2</td>
                <td width="3%" style="text-align:center;">3</td>
                <td width="3%" style="text-align:center;">4</td>
                <td width="3%" style="text-align:center;">5</td>
                <td width="3%" style="text-align:center;">6</td>
                <td width="3%" style="text-align:center;">7</td>
                <td width="3%" style="text-align:center;">8</td>
                <td width="3%" style="text-align:center;">9</td>
                <td width="3%"style="text-align:center;">10</td>
                <td width="1%" style="text-align:center;">Total</td>
                <td width="5%" style="text-align:center;">PS</td>
                <td width="4%" style="text-align:center;">WS</td>

                <td width="3%" style="text-align:center;">1</td>
                <td width="3%" style="text-align:center;">2</td>
                <td width="3%" style="text-align:center;">3</td>
                <td width="3%" style="text-align:center;">4</td>
                <td width="3%" style="text-align:center;">5</td>
                <td width="3%" style="text-align:center;">6</td>
                <td width="3%" style="text-align:center;">7</td>
                <td width="3%" style="text-align:center;">8</td>
                <td width="3%" style="text-align:center;">9</td>
                <td width="3%"style="text-align:center;">10</td>
                <td width="1%" style="text-align:center;">Total</td>
                <td width="4%" style="text-align:center;">PS</td>
                <td width="4%" style="text-align:center;">WS</td>

                <td width="1%" style="text-align:center;">1</td>
                <td width="4%" style="text-align:center;">PS</td>
                <td width="4%" style="text-align:center;">WS</td>



            </tr>
           
            <tr>
                <td style="background-color:#e6e6e6;"></td>
                <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Male</td>
            </tr>
            <input type="hidden" value="<?php echo $_GET['school_year']?>" name="school_year">
            <?php
            require 'connection.php';
                     
            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male'") or die(mysqli_error());
            $i = 1;
            $a = 0;        
                
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>          
                

                 
                
                <input type="hidden" value="<?php echo $fetch['teacher_id']?>" name="teacher_id">
                <input type="hidden" value="<?php echo $fetch['name']?>" name="name[]">
                <input type="hidden" value="<?php echo $fetch['subject_name']?>" name="subject_name">
                <td><?php echo $i; $i++;?></td>
                <td><?php echo $fetch['name']?></td>

                <td><?php echo "<input type='text' size='1' name='w1[]' value='$W1[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w2[]' value='$W2[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w3[]' value='$W3[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w4[]' value='$W4[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w5[]' value='$W5[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w6[]' value='$W6[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w7[]' value='$W7[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w8[]' value='$W8[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w9[]' value='$W9[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w10[]'value='$W10[$a]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='wt[]'value=''/>"?></td>
                <td><?php echo "<input type='text' size='4' name='ps[]'value=''/>"?></td>
                <td><?php echo "<input type='text' size='3' name='ws[]'value=''/>"?></td>
            </tr>
                    
            <?php
                $a++;
            
            }
            $conn->close();
            ?>
           

            

            <tr>
                <td style="background-color:#e6e6e6;"></td>
                <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Female</td>


            </tr>
             <?php
            require 'connection.php';
            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Female'") or die(mysqli_error());
            $i = 1;
            $b = 0;  
            while($fetch = $query->fetch_array()){
          
            ?>                                      
            <tr>
                <td><?php echo $i; $i++;?></td>
                  <input type="hidden" value="<?php echo $fetch['name']?>" name="gname[]">
                <td><?php echo $fetch['name']?></td>
                <td><?php echo "<input type='text' size='1' name='gw1[]' value='$GW1[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw2[]' value='$GW2[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw3[]' value='$GW3[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw4[]' value='$GW4[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw5[]' value='$GW5[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw6[]' value='$GW6[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw7[]' value='$GW7[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw8[]' value='$GW8[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw9[]' value='$GW9[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw10[]' value='$GW10[$b]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gwt[]'value=''/>"?></td>
                <td><?php echo "<input type='text' size='4' name='gps[]'value=''/>"?></td>
                <td><?php echo "<input type='text' size='3' name='gws[]'value=''/>"?></td>
            </tr>
            
            <?php
                $b++;
            }
            $conn->close();
            ?>

        </table>
        </form>
        <input type="hidden" name="numberM" value="<?php echo $count_male?>">
        <input type="hidden" name="numberF" value="<?php echo $count_female?>">
        <input type="hidden" name="sy" value="<?php echo $sy?>">
        <input type="hidden" name="grade" value="<?php echo $grade?>">
        <input type="hidden" name="sec" value="<?php echo $sec?>">
        <input type="hidden" name="sub" value="<?php echo $sub?>">
        <input type="hidden" name="teacher" value="<?php echo $id?>">

    </body>

</html>