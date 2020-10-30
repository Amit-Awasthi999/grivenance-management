

<!DOCTYPE html>




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
    <style>
     .main-panel{
        margin-top:30px;
        margin-left:500px;
      padding: 30px;
     }
     .form-group-row{

        margin-left:-200px;
     }

    </style>
</head>

<body class="skin-josh">
<header class="header">
    <a href="index.html" class="logo">
        <img src="img/logo.png" alt="logo">
    </a>
    <?php
    include "heder_panel.php";?>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            
        <?php
include "side_panel1.php";?>     
                         
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
             <div class="col-12 stretch-card">
             
                  <div class="card">
                    <div class="card-body">
                                          <h4 class="card-title">Add member</h4>
                                          <div id="register" class="animate form">
                            <form action="checklogin_addstaff.php" id="register_here"  method="POST">
                                   
                                <h3 class="black_bg">
                                    <img src="img/logo.png" alt="josh logo">
                                    <br>Sign Up</h3>
                                <div class="form-group">
                                
                                    <input id="first_name" name="first_name" required type="text" placeholder="John" />
                                </div>
                                <div class="form-group">
                                   
                                    <input id="last_name" name="last_name" required type="text" placeholder="Doe" />
                                </div>
                                <div class="form-group">
                                    
                                    <input id="email" name="email" placeholder="mysupermail@mail.com" />
                                </div>
                                <div class="form-group">
                                   
                                    <input id="last_name1" name="teacher_type" required type="text" placeholder="teacher type" />
                                </div>
                                <div class="form-group">
                                   
                                    <input id="password1" name="password" required type="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    
                                    <input id="password_confirm" name="password_confirm" required type="password" placeholder="Confirm password" />
                                </div>
                               
                                <p class="signin button">
                                    <button type="submit" name="but_submit" class="btn btn-success">Add Staff</button>
                                </p>
                                
                            </form>
                        </div>
                      
                    
                     </div>
                  </div>
                </div>
          </div>
        </div>
    <!-- Right side column. Contains the navbar and content of the page -->
 
<!-- ./wrapper -->
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

