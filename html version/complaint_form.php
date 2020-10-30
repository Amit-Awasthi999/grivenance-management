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
    <title>Form Builder 2 | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="css/pages/formbuilder1.css" rel="stylesheet" />
    <!--end of page level css-->
    <style>
    .mar-top20 .row .col-md-4-pd-col-4 form{
       margin:30px;
      position:center;

    }
    .submit_button{
        margin-top:30px;
        margin-left:350px;
        color:black;
        height:40px;
        border-radius:60px;
        background-color:gray;

        width:120px;

    }
    .submit_button:hover {background-color: black;
    color:white;}
 
    </style>
</head>

<body class="skin-josh">
    
    <header class="header">
    <?php
            include "header_panel.php";
     ?>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
           <?php
                    include "side_panel.php";     
                        
          ?>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Complaint Form</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="dashboard.php">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Complaint</a>
                    </li>
                    
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="alert alert-success alert-dismissable visible-xs visible-md">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        May not work properly in touch enabled devices as it as requires drag and drop.
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>Complaint Form
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                           
                                <div class="mar-top20">
                                    <div class="row">
                                        <div class="col-md-4-pd-col-4">
                                            <h4 style="background-color:#2c3e50;  height:40px; margin-top:30px;margin-left:20px;margin-right:20px;"><marquee style="color:white">Please enter your complaint</marquee> </h4>
                                            <form role="form" action="store_db.php" method="POST">
                                            <?php
                                                error_reporting(0);
                                             $x=$_REQUEST['err'];  
                
                
                                                if($x==1)
                                                {
                                                    echo "<h4 style='color:red'>-----Please Enter Full Detail----</h4>";

                                                }
                                            ?>
                                                <div class="">
                                                    <label for="input-text-1"></label>
                                                    <input type="text" name="user" class="form-control" id="input-text-1"  readonly value="<?php print  $_SESSION['username'];?>">
                                                    <p class="help-block">Please enter your your valid name</p>
                                                </div>
                                                <div class="">
                                                    <label for="input-password-1">Email</label>
                                                    <input type="email" name="email" class="form-control" id="input-password-1" placeholder="Email">
                                                    <p class="help-block">Please enter valid email address for quick respons</p>
                                                </div>
                                              
                                                <div class="">
                                                    <label for="select-1">complaint About</label>
                                                    <select class="form-control" id="select-1" name="complaint_about">
                                                        <option value="lab">lab</option>
                                                        <option value="library">library</option>
                                                        <option value="Admission">Admission</option>
                                                        <option value="staff">staff</option>
                                                        <option value="student">student</option>
                                                    </select>
                                                    <p class="help-block">enter facality name about which you you have query</p>
                                                </div>
                                                
                                                <div class="text-area">
                                                    <label style="color:black;"><h4>Enter your complaint here:</h4></label><br>
                                                      <textarea rows="8" cols="80" name="complaint"></textarea>
                                                </div>
                                                <div class=" pd-right">
                                                    <button type="submit" class="submit_button" name="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/form-builder/js/beautify-html.js"></script>
    <script src="vendors/form-builder/js/beautify-css.js"></script>
    <script src="vendors/form-builder/js/beautify.js"></script>
    <script src="js/pages/form_builder2.js"></script>
    <!-- end of page level js -->
</body>

</html>
