</!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Unify | Welcome...</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/headers/header1.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fancybox/source/jquery.fancybox.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/effects.css" />
    <!-- CSS Theme -->
  
    <!-- Date time picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/picker/bootstrap-datetimepicker.min.css" />
    <!-- /Date time picker -->
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes/headers/default.css" id="style_color-header-1" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1375239452722452";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <ul class="loginbar pull-right">
            <li><a href="<?php echo base_url(); ?>index.php/fb_app/logout/"><i class=" icon-user"></i> Logout</a>
            	
            </li>
            
        </ul>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img id="logo-header" src="<?php echo base_url();?>assets/img/logo1-default.png" alt="Logo" /></a>
        </div><!-- /logo -->

        <!-- Menu -->
        <div class="navbar">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->
                <div class="nav-collapse collapse">
                    <ul class="nav top-2">
                        <li <?php if(isset($link) && $link == 1) echo 'class="active"'; ?>>
                            <a href="<?php echo base_url(); ?>index.php/fb_app/home/" class="dropdown-toggle">Home</a>
                        </li>
                        <li <?php if(isset($link) && $link == 2) echo 'class="active"'; ?>>
                            <a href="<?php echo base_url(); ?>index.php/fb_app/profile_pics/" class="dropdown-toggle" >Schedule PP</a>
                        </li>
                        <li <?php if(isset($link) && $link == 3) echo 'class="active"'; ?>>
                            <a href="<?php echo base_url(); ?>index.php/fb_app/status_list/" class="dropdown-toggle" >Schedule Status</a>

                        </li>
                        <li <?php if(isset($link) && $link == 4) echo 'class="active"'; ?>>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Pages
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                               <?php if(isset($accounts['accounts']['data'])):
                                        foreach($accounts['accounts']['data'] as $row):
                               ?>
                                <li><a href="<?php echo base_url(); ?>index.php/fb_app/page_home/<?php echo $row['id']; ?>/"><?php echo $row['name']; ?></a></li>
                                <?php
                                    endforeach;
                                    ?>
                                <?php else: ?>
                                    <li><a href="#">No Page Found</a></li>
                                <?php
                                endif;
                                ?>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                    </ul>

                </div><!-- /nav-collapse -->
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
    </div><!-- /container -->
</div><!--/header -->
<!--=== End Header ===-->