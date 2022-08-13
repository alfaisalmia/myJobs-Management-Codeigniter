<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url() ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url() ?>css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="<?php echo base_url() ?>css/font-awesome.css" rel="stylesheet"> 
        <!----font-Awesome----->
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" alt=""/></a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="location.html">Contract Jobs</a></li>
                                <li><a href="location.html">Walkin Jobs</a></li>
                                <li><a href="location.html">Jobs by Location</a></li>
                                <li><a href="location.html">Jobs by Function</a></li>
                                <li><a href="location.html">Jobs by Industry</a></li>
                                <li><a href="location.html">Jobs by Company</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <!--     my option start-->

                        <?php
                        $type = $this->session->userdata("type");
                        if ($type == "a") {
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="<?php echo base_url() ?>admin/location">Location</a></li>
                                                <li><a href="<?php echo base_url() ?>admin/industry">Industry</a></li>
                                                <li><a href="<?php echo base_url() ?>admin/category">Category</a></li>
                                                <li><a href="<?php echo base_url() ?>seeker/view_resume">View Resume</a></li>
                                                <li><a href="<?php echo base_url() ?>seeker/qualification">Academic-Qualification</a></li>
                                                <li><a href="<?php echo base_url() ?>seeker/education">Level of Education</a></li>
                                                <li><a href="<?php echo base_url() ?>seeker/result">Result</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </ul>
                            </li>
                            <?php
                        }
                        if ($type == NULL) {
                            echo "<li><a href = '" . base_url() . "admin/login'>Admin</a></li>";
                        }
                        ?>


                        <!--  my option END-->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.html">Recruiter Updates</a></li>
                                <li><a href="recruiters.html">Recruiters you are following</a></li>
                                <li><a href="codes.html">Shortcodes</a></li>
                            </ul>
                        </li>

                        <?php
                        $type = $this->session->userdata("type");
                        if ($type == "a" || $type == "e") {
                            ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>corporate/profile">Profile</a></li>
                                    <li><a href="<?php echo base_url() ?>corporate/jobs">jobs</a></li>
                                    <li><a href="<?php echo base_url() ?>logout">Logout</a></li>
                                </ul>
                            </li>
                            <?php
                        } else if ($type == "u" || $type == "a") {
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>seeker/profile">Profile</a></li>
    <!--                                    <li><a href="<?php echo base_url() ?>seeker/view_resume">View Resume</a></li>
                                    <li><a href="<?php echo base_url() ?>seeker/qualification">Academic-Qualification</a></li>
                                    <li><a href="<?php echo base_url() ?>seeker/education">Level of Education</a></li>
                                    <li><a href="<?php echo base_url() ?>seeker/result">Result</a></li>-->
                                    <li><a href="<?php echo base_url() ?>logout">Logout</a></li>
                                    <!--######### controller name=seeker, and page name=view_resum #########-->
                                </ul>
                            </li>


                            <?php
                        }
                        if ($type == NULL) {
                            echo "<li><a href = '" . base_url() . "corporate/login'>Employers</a></li>";
                            echo " <li><a href='" . base_url() . "seeker/login' >Myjobs Login</a></li>";
                        }
                        ?>

                        <!---seeker login start---->





                        <!---seeker login END---->

                        <li><a href="resume.html">Upload Resume</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>



        <?php
        if (isset($baner1)) {
            require_once 'banner1.php';
        } else {
            require_once 'banner2.php';
        }
        if (isset($content)) {
            echo $content;
        }
        ?>
        <div class="footer">
            <div class="container">
                <div class="col-md-3 grid_3">
                    <h4>Navigate</h4>
                    <ul class="f_list f_list1">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login.html">Sign In</a></li>
                        <li><a href="login.html">Join Now</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                    <ul class="f_list">
                        <li><a href="features.html">Features</a></li>
                        <li><a href="terms.html">Terms of use</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="jobs.html">Post a Job</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Twitter Widget</h4>
                    <div class="footer-list">
                        <ul>
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Seeking</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Sign up for our newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
                    <form>
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="button" class="btn red">Subscribe now!</button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer_bottom">	
            <div class="container">
                <div class="col-sm-2">
                    <ul class="f_list2">
                        <li><a href="jobs.html">Russia Jobs</a></li>
                        <li><a href="jobs.html">Australia Jobs</a></li>
                        <li><a href="jobs.html">Srilanka Jobs</a></li>
                        <li><a href="jobs.html">Poland Jobs</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul class="f_list2">
                        <li><a href="jobs.html">New Zealand Jobs</a></li>
                        <li><a href="jobs.html">Pakistan Jobs</a></li>
                        <li><a href="jobs.html">Srilanka Jobs</a></li>
                        <li><a href="jobs.html">Irland Jobs</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul class="f_list2">
                        <li><a href="jobs.html">Canada Jobs</a></li>
                        <li><a href="jobs.html">Germany Jobs</a></li>
                        <li><a href="jobs.html">China Jobs</a></li>
                        <li><a href="jobs.html">Nepal Jobs</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 footer_text">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
                </div>
                <div class="clearfix"> </div>
                <div class="copy">
                    <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url() ?>js/easing.js"></script>
        <!-- here stars scrolling icon -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery-ui.css" />
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
            });
        </script>
    </body>
</html>	