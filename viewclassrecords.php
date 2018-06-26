<html>
    <head>
        <title></title>
    </head>
    <body>
        <form name="submit" action="record.php" method="POST">
            <button>Record</button>
            <hr />

            </br>
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

                <td></td>
                <td style="color:#000000;text-align:right;font-size:10px;padding-right:1px;">HGHEST POSSIBLE SCORE</td>

                <?php

                $phsw1=0;
                $phsw2=0;
                $phsw3=0;
                $phsw4=0;
                $phsw5=0;
                $phsw6=0;
                $phsw7=0;
                $phsw8=0;
                $phsw9=0;
                $phsw10=0;


                $phsp1=0;
                $phsp2=0;
                $phsp3=0;
                $phsp4=0;
                $phsp5=0;
                $phsp6=0;
                $phsp7=0;
                $phsp8=0;
                $phsp9=0;
                $phsp10=0;
                $qa=0;



                if($phsw1 == 0){
                    echo"<td><input  name='w1' autocomplete='off' onchange='javascript:sumW10()' id='w1' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w1' autocomplete='off' onchange='javascript:sumW10()' id='w1' value='$phsw1' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw2 == 0){
                    echo"<td><input  name='w2' autocomplete='off' onchange='javascript:sumW10()' id='w2' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w2' autocomplete='off' onchange='javascript:sumW10()' id='w2' value='$phsw2' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw3 == 0){
                    echo"<td><input  name='w3' autocomplete='off' onchange='javascript:sumW10()' id='w3' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w3' autocomplete='off' onchange='javascript:sumW10()' id='w3' value='$phsw3' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw4 == 0){
                    echo"<td><input  name='w4' autocomplete='off' onchange='javascript:sumW10()' id='w4' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w4' autocomplete='off' onchange='javascript:sumW10()' id='w4' value='$phsw4' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw5 == 0){
                    echo"<td><input  name='w5' autocomplete='off' onchange='javascript:sumW10()' id='w5' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w5' autocomplete='off' onchange='javascript:sumW10()' id='w5' value='$phsw5' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw6 == 0){
                    echo"<td><input  name='w6' autocomplete='off' onchange='javascript:sumW10()' id='w6' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w6' autocomplete='off' onchange='javascript:sumW10()' id='w6' value='$phsw6' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw7 == 0){
                    echo"<td><input  name='w7' autocomplete='off' onchange='javascript:sumW10()' id='w7' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w7' autocomplete='off' onchange='javascript:sumW10()' id='w7' value='$phsw7' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw8 == 0){
                    echo"<td><input  name='w8' autocomplete='off' onchange='javascript:sumW10()' id='w8' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w8' autocomplete='off' onchange='javascript:sumW10()' id='w8' value='$phsw8' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw9 == 0){
                    echo"<td><input  name='w9' autocomplete='off' onchange='javascript:sumW10()' id='w9' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w9' autocomplete='off' onchange='javascript:sumW10()' id='w9' value='$phsw9' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsw10 == 0){
                    echo"<td><input  name='w10' autocomplete='off' onchange='javascript:sumW10()' id='w10' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='w10' autocomplete='off' onchange='javascript:sumW10()' id='w10' value='$phsw10' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------


                ?>
                <td><input  readonly id="wtotal" value="" style="border:none;text-align:center;" size="1" type="text"></td>
                <td>100.00</td>
                <td>30%</td>
                <?php

                if($phsp1 == 0){
                    echo"<td><input  name='p1' autocomplete='off' onchange='javascript:sumP10()' id='p1' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p1' autocomplete='off' onchange='javascript:sumP10()' id='p1' value='$phsp1' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp2 == 0){
                    echo"<td><input  name='p2' autocomplete='off' onchange='javascript:sumP10()' id='p2' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p2' autocomplete='off' onchange='javascript:sumP10()' id='p2' value='$phsp2' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp3 == 0){
                    echo"<td><input  name='p3' autocomplete='off' onchange='javascript:sumP10()' id='p3' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p3' autocomplete='off' onchange='javascript:sumP10()' id='p3' value='$phsp3' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp4 == 0){
                    echo"<td><input  name='p4' autocomplete='off' onchange='javascript:sumP10()' id='p4' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p4' autocomplete='off' onchange='javascript:sumP10()' id='p4' value='$phsp4' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp5 == 0){
                    echo"<td><input  name='p5' autocomplete='off' onchange='javascript:sumP10()' id='p5' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p5' autocomplete='off' onchange='javascript:sumP10()' id='p5' value='$phsp5' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp6 == 0){
                    echo"<td><input  name='p6' autocomplete='off' onchange='javascript:sumP10()' id='p6' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p6' autocomplete='off' onchange='javascript:sumP10()' id='p6' value='$phsp6' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp7 == 0){
                    echo"<td><input  name='p7' autocomplete='off' onchange='javascript:sumP10()' id='p7' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p7' autocomplete='off' onchange='javascript:sumP10()' id='p7' value='$phsp7' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp8 == 0){
                    echo"<td><input  name='p8' autocomplete='off' onchange='javascript:sumP10()' id='p8' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p8' autocomplete='off' onchange='javascript:sumP10()' id='p8' value='$phsp8' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp9 == 0){
                    echo"<td><input  name='p9' autocomplete='off' onchange='javascript:sumP10()' id='p9' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p9' autocomplete='off' onchange='javascript:sumP10()' id='p9' value='$phsp9' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------
                if($phsp10 == 0){
                    echo"<td><input  name='p10' autocomplete='off' onchange='javascript:sumP10()' id='p10' value='' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input readonly name='p10' autocomplete='off' onchange='javascript:sumP10()' id='p10' value='$phsp10' style='border:none;text-align:center;' size='1' type='text'></td>";
                }//end------------

                ?><td><input  readonly id="ptotal" value="" style="border:none;text-align:center;" size="1" type="text"></td>
                <td>100.00</td>
                <td>50%</td>
                <?php
                if($qa == 0){
                    echo"<td><input autocomplete='off' name='qa' onchange='javascript:qqa()' value='' id='qa' style='border:none;text-align:center;' size='1' type='text'></td>";
                }else{
                    echo"<td><input autocomplete='off' name='qa' onchange='javascript:qqa()' value='$qa' id='qa' style='border:none;text-align:center;' size='1' type='text'></td>";
                }
                ?>

                <td width="3%">100.00</td>
                <td width="3%">20%</td>
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
                <td><?php echo $i; $i++;?></td>
                <td><?php echo $fetch['name']?></td>
            </tr>
            
            <?php
            }
            $conn->close();
            ?>


            <tr>
                <td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

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
            </tr>
            
            <?php
            }
            $conn->close();
            ?>

        </table>

        <input type="hidden" name="numberM" value="<?php echo $count_male?>">
        <input type="hidden" name="numberF" value="<?php echo $count_female?>">
        <input type="hidden" name="sy" value="<?php echo $sy?>">
        <input type="hidden" name="grade" value="<?php echo $grade?>">
        <input type="hidden" name="sec" value="<?php echo $sec?>">
        <input type="hidden" name="sub" value="<?php echo $sub?>">
        <input type="hidden" name="teacher" value="<?php echo $id?>">


        </form>
    </body>
</html>