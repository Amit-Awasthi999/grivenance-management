<!DOCTYPE html>
<?php
session_start();  

include "config.php";


if(!isset($_SESSION['username']))
{
  header('location:index.php');
 
}



$easy=$_REQUEST['add'];
$mysql="select * from complaint_db";
 $result=mysqli_query($con,$mysql );

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Josh Admin Template</title>
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
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/pages/only_dashboard.css" />
    <!--end of page level css-->
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
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> You have successfully logged in.
            </div>
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
                <section class="content">
            <!-- Second Data Table -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="panel panel-danger table-edit">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <span>
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff"
                                       data-hc="white"></i>
                                       Editable complaint Form</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            if($easy==1){
                                ?>
                                <div class="alert alert-success links">
                                    <strong>Welldone!</strong> You successfully read
                                    <a href="#" class="alert-link">this important alert message.</a>
                                </div>
                            <?php
                            }
                            ?>
                            <div id="sample_editable_1_wrapper" class="">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                       id="sample_editable_1" role="grid">
                                    <thead class="table_head">
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1"
                                            rowspan="1" colspan="1">Username
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Full Name
                                            : activate to sort column ascending">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Points
                                            : activate to sort column ascending">complaintAbout
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Notes
                                            : activate to sort column ascending">complaintInfo
                                        </th>
                                   
                                    </tr>
                                    </thead>
                                    <?php
                                       if(mysqli_num_rows($result)>0){
                                        $i=0;
                                        while($row=mysqli_fetch_array($result)){
                                            if($row['username']==$_SESSION['username']){
                                    ?>
                                    <tbody>
                                       
                                    <tr role="row" class="odd" data-id="1">
                                        <td class="sorting_1">
                                         <?php
                                         echo $row['username'];
                                         ?>
                                         </td>
                                        <td>
                                        <?php
                                         echo $row['email'];
                                         ?>

                                        </td>
                                        <td>
                                        <?php
                                         echo $row['complaintAbout'];
                                         ?> 
                                        </td>
                                        <td class="center">
                                        <?php
                                         echo $row['complaintInfo'];
                                         ?>
                                        </td>
                                       
                                    </tr>
                                   
                                    </tbody>
                                            <?php  } }
                                            $i++; } ?>
                                </table>
                                    
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
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
    <!-- EASY PIE CHART JS -->
    <script src="vendors/jquery.easy-pie-chart/js/easypiechart.min.js"></script>
    <script src="vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.easingpie.js"></script>
    <!--end easy pie chart -->
    <!--for calendar-->
    <script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="vendors/fullcalendar/js/fullcalendar.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
    <script src="vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="vendors/sparklinecharts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="vendors/countUp.js/js/countUp.js"></script>
    <!--   maps -->
    <script src="vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="vendors/chartjs/Chart.js"></script>
    <script type="text/javascript" src="vendors/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!--  todolist-->
    <script src="js/pages/todolist.js"></script>
    <script src="js/pages/dashboard.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>

</html>
