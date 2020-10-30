<html>
<body>
<a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <h1><?php //print $_SESSION['type'];?></h1>
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
                <li class="user-header bg-light-blue">
                            <img src="img/authors/avatar3.jpg" width="40" class="img-circle img-responsive" height="90" margin-left = " 10"
                                 alt="User Image"/>
                            <p class="topprofiletext"></p>
                        </li>
                    <li class="dropdown messages-menu">
                    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title"></li>
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
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning"></span>
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