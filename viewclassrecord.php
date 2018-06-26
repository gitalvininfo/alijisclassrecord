<?php
require 'require/logincheck.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Alijis Elementary School</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="img/alijis/logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `tbluser` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-content-wrap">                
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">List of Students</h3>
                        </div>
                        <div class="panel-body-table">
                            <table class="table table-hover">
                                <thead> 
                                    <?php
                                    require 'connection.php';
                                    $query1 = $conn->query("SELECT * FROM `writtenworks` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `number` = '1'") or die(mysqli_error());
                                    $fetch1 = $query1->fetch_array();
                                    $highest_score = $fetch1['highest_score'];
                                    ?>
                                    <tr class="default">
                                        <th>Number</th>
                                        <th>Learners Name</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>Total</th>
                                        <th>PS</th>
                                        <th>WS</th>
                                    </tr>
                                    <tr class="danger">
                                        <th colspan="2">Highest Possible Score</th>
                                        <td><?php echo $highest_score?></td>
                                    </tr>
                                    <tr class="success">
                                        <th colspan="15">Male</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require 'connection.php';
                                    $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_SESSION[user_id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male'") or die(mysqli_error());
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

                                </tbody>
                                <tr>
                                    <th class="warning" colspan="15">Female</th>
                                </tr>
                                <tbody>
                                    <?php
                                    require 'connection.php';
                                    $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_SESSION[user_id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Female'") or die(mysqli_error());
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
                                </tbody>
                            </table>               
                        </div>
                    </div>

                </div>
            </div>

        </div>

    
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>    
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    </body>
</html>






