<?php
require 'require/logincheck.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
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
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Data Maintenance</a></li>
                    <li class="active">Users</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Users List</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#newuser">Add New User</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead> 
                                            <tr class="warning">
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>User Role</th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `tbluser` ORDER BY `user_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['user_id']?></td>
                                                <td><?php echo $fetch['user_username']?></td>
                                                <td><?php echo $fetch['user_password']?></td>
                                                <td><?php echo $fetch['user_role']?></td>
                                                <td><center>
                                                    <a href="#updateuser<?php echo $fetch['user_id'];?>" data-target="#updateuser<?php echo $fetch['user_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#deleteuser<?php echo $fetch['user_id'];?>" data-target="#deleteuser<?php echo $fetch['user_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- Add User -->
        <div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Add New User</h4>
                    </div>

                    <form role="form" id="userform" class="form-horizontal" action="crud/adduser.php" method="post" onsubmit="return confirm('Are you sure you want to add this new user?');" >
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Username</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Password</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Password" type="password" class="form-control" name="password" id="password2" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Confirm Password</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Re type password" type="password" class="form-control" name="re-password"  required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">User Role</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="userrole" required>
                                            <option disabled selected>Choose</option>
                                            <option value="Principal">Principal</option>
                                            <option value="Teacher">Teacher</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="adduser"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- End Add User -->

        <!-- Delete User-->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tbluser`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div class="modal fade" id="deleteuser<?php echo $fetch['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Delete User</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/deleteuser.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $fetch['user_id'];?>" required>
                            Are you sure you want to delete this user?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="deleteuser"><span class="fa fa-ban"></span>Delete User</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        <?php
        }
        $conn->close();
        ?> 
        <!-- End Delete User -->

        <!-- Edit User -->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tbluser`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updateuser<?php echo $fetch['user_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Edit User</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/edituser.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h5 class="push-up-1">Username</h5>
                                        <div class="form-group ">
                                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $fetch['user_id'];?>" required>
                                            <div class="col-md-12 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" value="<?php echo $fetch['user_username']?>" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Password</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="password" value="<?php echo $fetch['user_password']?>" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">User Role</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <select class="form-control select" name="userrole">
                                                    <option value="<?php echo $fetch['user_role']?>"><?php echo $fetch['user_role']?></option>
                                                    <option value="Principal">Principal</option>
                                                    <option value="Teacher">Teacher</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="edituser"><span class="fa fa-check"></span>Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        $conn->close();
        ?> 
        <!-- End Edit User -->

        <?php require 'require/logoutnotify.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
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
        <script type="text/javascript">
            $("#userform").validate({
                ignore: [],
                rules: {
                    username: {
                        required: true,
                        minlength: 6,
                        maxlength: 20
                    },
                    password: {
                        required: true,
                        minlength: 10,
                        maxlength: 20
                    },
                    're-password': {
                        required: true,
                        minlength: 10,
                        maxlength: 20,
                        equalTo: "#password2"
                    },
                    userrole: {
                    required: true
                }

            }
                                    });
        </script>
    </body>
</html>






