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

 //print $numrow=mysqli_num_rows($result); die();
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
            <h1>Editable complaint form</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="dashboard.php">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Data Tables</a>
                </li>
                <li class="active">Editable complaint Form</li>
            </ol>
        </section>
        <!-- Main content -->
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
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Edit
                                            : activate to sort column ascending">
                                            
                                            Edit
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending">Delete
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                            colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending">reply
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
                                        <td>
                                            <a  href="edit_studentcomplaint.php?qid=<?php echo $row['id']; ?>">Edit </a>
                                        </td>
                                        <td>
                                            <a  href="delete.php?qid=<?php echo $row['id']; ?>" name="deasy">Delete</a>
                                        </td>
                                        <td>
                                            <a  href="easy1.php?qid=<?php echo $row['id']; ?>" name="deasy">reply</a>
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
        <!-- content -->
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Item</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="delete_item" data-dismiss="modal">Delete
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Confirm</h4>
                    </div>
                    <div class="modal-body">
                        <p>You are already editing a row, you must save or cancel that row before editing/deleting a new
                            row</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="saveConfirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Save Row</h4>
                    </div>
                    <div class="modal-body">
                        <p>Updated successfully, Do not forget to do some ajax to sync with backend.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </aside>
    <!-- right-side -->
</div>
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

