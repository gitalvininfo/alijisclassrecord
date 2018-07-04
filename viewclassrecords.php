<html>
    <head>
        <title></title>
    </head>
    <body>
        <form name="submit" action="crud/saveclassrecord.php" method="POST">
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
            <?php
            require 'connection.php';
            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male'") or die(mysqli_error());
            $i = 1;
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>            
                <input type="hidden" value="<?php echo $fetch['teacher_id']?>" name="teacher_id">
                <input type="hidden" value="<?php echo $fetch['name']?>" name="name[]">
                <input type="hidden" value="<?php echo $fetch['subject_name']?>" name="subject_name">
              
                <td><?php echo $i; $i++;?></td>
                <td><?php echo $fetch['name']?></td>
                <td><?php echo "<input type='text' size='1' name='w1[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w2[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w3[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w4[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w5[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w6[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w7[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w8[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w9[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='w10[]'/>"?></td>
            </tr>

                    
            <?php
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
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $i; $i++;?></td>
                <td><?php echo $fetch['name']?></td>
                <td><?php echo "<input type='text' size='1' name='gw1[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw2[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw3[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw4[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw5[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw6[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw7[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw8[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw9[]'/>"?></td>
                <td><?php echo "<input type='text' size='1' name='gw10[]'/>"?></td>
            </tr>
            
            <?php
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