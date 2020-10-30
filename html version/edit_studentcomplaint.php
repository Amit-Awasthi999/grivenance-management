<?php
session_start();  

include "config.php";


if(!isset($_SESSION['username']))
{
  header('location:index.php');
 
}


 //print $numrow=mysqli_num_rows($result); die();
 $x=$_REQUEST['qid'];
   $mysql2="SELECT * FROM complaint_db WHERE id='$x'"; 
   $result2 = mysqli_query($con,$mysql2);
   $row2 =mysqli_fetch_array($result2);



?>

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
        margin-left:250px;


     }
     .form-group-row{

        margin-left:-200px;
     }

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
    <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
             <div class="col-12 stretch-card">
             
                  <div class="card">
                    <div class="card-body">
                                          <h4 class="card-title">Edit Grievance Cell Member</h4>
                      		
                      
                      <form class="forms-sample" id="frmEditGmember" action="upadate_student_com.php?qid=<?php echo $x  ?>" method="POST">
                      <input type="hidden" id="eid" value="14">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" id="gmemName" readonly value="<?php echo $row2['username']; ?>">
                          </div>
                          <div class="col-sm-9">
                            <input type="hidden" name="user" class="form-control" id="gmemName"  value="
                            <?php                              
                             print  $qid=$_REQUEST['qid']; ?> ">
                          </div>
                        </div>
                        
                  
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email </label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="gmemEmail" required value="
                            <?php                              
                            echo $row2['email']; ?> 
                             
                            ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" name="complaint_about"  class="col-sm-3 col-form-label">complaint Types</label>
                          <div class="col-sm-9">
                                                     <select class="form-control" id="gmemGtype" name="comabout">
                                                     <?php $x=$_row['complaintAbout']?>
                                                  <option <?php 
                                                  if($x='lab'){
                                                      echo "SELECTED";
                                                  }
                                                  ?>value="lab">lab</option>
                     
                      
                                            <option <?PHP
                                            if($x='library'){
                                                      echo "SELECTED";
                                                  }
                                                  ?>value="library">library</option>
                        
                      
                                            <option <?php 
                                                  if($x='Admission'){
                                                      echo "SELECTED";
                                                  }
                                                  ?> value="Admission"> Admission </option>
                     
                      
                                            <option 
                                            <?php 
                                                  if($x='staff'){
                                                      echo "SELECTED";
                                                  }
                                                  ?>
                                            value="staff">staff </option>
                     
                      
                                       
                     
                      
                                          </select>
                                          <div class="form-group-row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="margin-left:-100px; margin-top:120px;">Your complaint:</label>
                         
                          <textarea  rows="8" cols="100" name="complaint" style="margin-left: 30px; margin-top:45px;"><?php
                                    echo $row2['complaintInfo'];
                          ?>
                          </textarea>
                           
                          
                        </div>
                          </div>
                        </div>
                        
                     
                        
                        
                        <button type="submit" class="btn btn-success mr-2" id="btnClass" name="up_submit" style ="margin-left :50%; margin-top:3%; pading : 100px;"> Update</button>
                        
                      </form>
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

