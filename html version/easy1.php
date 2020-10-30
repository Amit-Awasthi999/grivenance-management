<!DOCTYPE html>
<?php
session_start();  

include "config.php";


if(!isset($_SESSION['username']))
{
  header('location:index.php');
 
}
$x=$_REQUEST['qid'];
   $mysql2="SELECT * FROM complaint_db WHERE id='$x'"; 
   $result2 = mysqli_query($con,$mysql2);
   $row2 =mysqli_fetch_array($result2);
  
   $mysql1="SELECT * FROM complaint_db WHERE com_reply_num='$x'"; 
   $result1 = mysqli_query($con,$mysql1);
   //$row1 =mysqli_fetch_array($result1);
  
 // print $row1['complaintInfo'];
      
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
                <h1>Complaint Reply</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Complaint reply</a>
                    </li>
                    
                </ol>
               
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>Complaint Reply
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>

                           
                                
                                        
                    </div>
                </div>
                <!--main content ends-->
                
                    <div style="margin-top:50px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h4>
                            <?php
                                echo "your complaint :  ".$row2['complaintInfo'];
                            ?>         </h4>       
                               <?php
                                echo "your complaint :  ".$row2['complaint_reply'];
                            ?>              
                               
                            </div>
                            <div class="panel-body">
                            <h4 class="panel-title">
                          <?php if(mysqli_num_rows($result1)>0){
                                while($row1=mysqli_fetch_array($result1)){echo "<br>";
                                     print "query :   ".$row1['complaintInfo'];
                                        echo '<br>';
                                        }
                                    }
                                    $xy=$_REQUEST['qid'];
                          ?>                           
                                <form method="POST" action="add_reply.php?comid=<?php echo $row['id']?>">
                                <textarea cols=40; name="complaint_reply" style="color:black;"></textarea>
                                <input type="hidden" name="esay" value="<?php print $xy; ?>">
                                <button type="submit"  style="margin-left:100px; color:black;"
                                 name="submit">  submit </button>
                                </form>
                            </div>
                            </div>
                    </div>
                <?php
              
                ?>
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
