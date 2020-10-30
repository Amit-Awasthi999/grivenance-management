<!DOCTYPE html>
<?php
session_start();  

include "config.php";


if(!isset($_SESSION['username']))
{
  header('location:index.php');
 
}
 $mysql = "SELECT * FROM complaint_db ";
$result= mysqli_query($con,$mysql);
$row=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{   $count=0;
    while($row=mysqli_fetch_array($result))
    {
        

        if($row['username']=='amit')
        {
            $id1[]=$row['id'];
                $count++;
        }       
    }
     for($i=0;$i<=$count;$i++){
     print $id1[$i];
     }
    
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
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logo.png" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body"> <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br> <small>8 minutes ago</small> </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body"> <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br> <small>45 minutes ago</small> </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                    <img src="img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body"> <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br> <small>An hour ago</small> </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                    <img src="img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body"> <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br> <small>3 Hours ago</small> </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="view_user.html"> <i class="livicon" data-name="user" data-s="18"></i> My Profile </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="adduser.html"> <i class="livicon" data-name="gears" data-s="18"></i> Account Settings </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html"> <i class="livicon" data-name="lock" data-s="18"></i> Lock </a>
                                </div>
                                <div class="pull-right">
                                    <a href="logout.php"> <i class="livicon" data-name="sign-out" data-s="18"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="advanced_tables.html"> <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i> </a>
                            </li>
                            <li>
                                <a href="tasks.html"> <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i> </a>
                            </li>
                            <li>
                                <a href="gallery.html"> <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i> </a>
                            </li>
                            <li>
                                <a href="users_list.html"> <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" id="menu">
                        <li>
                            <a href="dashboard.php">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title"> Complaint Form</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               
                                <li class="active" id="active">
                                    <a href="complaint_form.php">
                                        <i class="fa fa-angle-double-right"></i> Add complaint 
                                    </a>
                                </li>
                                <li>
                                    <a href="editable_table.php">
                                        <i class="fa fa-angle-double-right"></i>View complaint
                                    </a>
                                </li>
                              
                            </ul>   
                        </li>
                            <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title"><a href="panels.php"> Complaint Reply </a></span>
                                <span class="fa arrow"></span>
                            </a>
                            </li>             
                        
            </section>
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
                    <div class="alert alert-success alert-dismissable visible-xs visible-md">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        May not work properly in touch enabled devices as it as requires drag and drop.
                    </div>
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
                <?php 
                        if(mysqli_num_rows($result)>0){$i=0;
                while($row=mysqli_fetch_array($result)){
                         print $row['id'];
                         while($i!=$count){
                ?>
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <?php     print $row['id'];
                                while($i<=$count){
                                   
                                   print $row['id'];
                                     if($row['id']==$id1[$i])
                                        {
                                            echo "hello";
                                            echo $row['complaintInfo'];
                                        
                                        }
                                    break;
                                }
                                
                               
                                ?>
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                </p>
                            </div>
                            </div>
                    </div>
                <?php
                $i++; } }}
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
