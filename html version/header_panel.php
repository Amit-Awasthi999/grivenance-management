<html>
<body>
<a href="" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <h1><?php print $_SESSION['type'];?></h1>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            
           
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body"> <strong>Amit Awasthi</strong>
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
                  
                    <li class="dropdown user user-menu" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            <div class="riot">
                                <div style = "margin-top :-30px; margin-right:10px;">
                                <h2>
                                <?php
                                 print  $_SESSION['username'];
                                ?></h2>
                                  
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                                <p class="topprofiletext">
                                <?php
                                     print $_SESSION['username'];
                                ?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                           
                               
                                <div class="pull-right">
                                    <a href="logout.php"> <i class="livicon" data-name="sign-out" data-s="18"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
</body></html>