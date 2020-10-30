<!DOCTYPE html>
<html>

<head>
    <title>Login | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <link href="vendors/iCheck/css/square/blue.css" rel="stylesheet" type="text/css" />
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="css/pages/login.css" />
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="checklogin.php"   method="POST">
                                <h3 class="black_bg">
                                    <img src="img/logo.png" alt="josh logo">
                                    <br>Log In</h3>
                                <div class="form-group ">
                                <?php
                                error_reporting(0);
                              $x=$_REQUEST['err'];  
                
                
                                 if($x==1)
                                {
                                   echo "<div class='alert alert-danger links'>
                                    <i>Invalid username and password</i>
                                    
                                    
                                </div>";

                                }

                                ?>


<!-- Form Name -->
                     

<!-- Select Basic -->
                                <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
                               <div class="col-md-4" style="width:200px;">
                              <select id="selectbasic" name="type" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Student">Student</option>
                             
                              </select>
                            </div>
                          </div><br><br>


                                    <input id="email1" name="user"  placeholder="  you username    " value="" />
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    
                                    <input type="password" id="password" name="pass" placeholder="Enter a password" />
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                               
                                <p class="login button">
                                    <input type="submit" name="but_submit"  value="login" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    
                                    <a href="#toregister" id="signup" class="btn btn-responsive botton-alignment btn-success btn-sm pull-right">Sign Up
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="store_checklogin.php"   method="POST">
                                   
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
                                   
                                    <input id="password1" name="password" required type="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    
                                    <input id="password_confirm" name="password_confirm" required type="password" placeholder="Confirm password" />
                                </div>
                                <p class="signin button">
                                    <button type="submit" name="submit" class="btn btn-success">sign up</button>
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="btn btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                    </a>
                                </p>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="js/pages/login.js" type="text/javascript"></script>
</body>

</html>
