<!DOCTYPE html>
<?php
session_start();  

include "config.php";


if(!isset($_SESSION['username']))
{
  header('location:index.php');
 
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editable Datatables | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2-bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/rowReorder.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css"/>
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>
<body class="skin-josh">  
<header class="header">
      <?php
            include "heder_panel.php";
     ?>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
                <?php
                    include "side_panel1.php";    
                 ?>
        <!-- /.sidebar -->
    </aside>

             <!-- right-side-end -->
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="right-side">
            <section class="content-header">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Add Parent
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <form action="add_praent.php" class="form-horizontal" method="POST">
                                                    <div class="form-body">
                                                        <div class="form-group pad-top40">
                                                            <label for="inputUsername" class="col-md-3 control-label">
                                                                Username
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="user" class="form-control" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-3 control-label">
                                                                Email
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="email" placeholder="Email Address" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Password
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" name="pass" placeholder="Password" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputnumber" class="col-md-3 control-label">
                                                                Phone Number
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-md-3 control-label">
                                                                Address
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="addre" class="form-control" placeholder=" Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Add Fucalty
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <form action="add_faculity.php" method="POST" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group pad-top40">
                                                            <label for="inputUsername" class="col-md-3 control-label">
                                                                Username
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="user" class="form-control" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-3 control-label">
                                                                Email
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="email" placeholder="Email Address" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Password
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" name="pass" placeholder="Password" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputnumber" class="col-md-3 control-label">
                                                                Phone Number
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-md-3 control-label">
                                                                Address
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="addre" class="form-control" placeholder=" Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </aside></div>
                                <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.colVis.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/pdfmake.js"></script>
<script type="text/javascript" src="vendors/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="js/pages/table-editable.js"></script>
<!-- end of page level js -->

</body>
</html>