
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    
	<div class="row-fluid">
            
    	<div class="span3">
            
            
            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <dl class="dl-horizontal">
                    <dt><a href="#"><img src="http://graph.facebook.com/<?php echo $page_info['id']; ?>/picture/" alt="" /></a></dt>
                    <dd>
                        <p> &nbsp;</p>
                        <p><a href="#"><?php echo $page_info['name']; ?></a></p> 
                    </dd>
                </dl>
            </div><!--/posts-->
            <hr/>
            
           <div class="margin-bottom-20">
        <ul class="nav nav-list">
            <li <?php if( isset($side_nav_num) && $side_nav_num == 1) echo "class='active'"; ?>>
                <a href="<?php echo base_url(); ?>index.php/fb_app/page_home/<?php echo $page_info['id']; ?>/">
                <i class="icon-chevron-right"></i> Our Services</a>
            </li>
          <li <?php if( isset($side_nav_num) && $side_nav_num == 2) echo "class='active'"; ?>>
              <a href="<?php echo base_url(); ?>index.php/fb_app/page_pictures/<?php echo $page_info['id']; ?>/">
                  <i class="icon-chevron-right"></i> Page Pictures</a>
          </li>
          <li <?php if( isset($side_nav_num) && $side_nav_num == 3) echo "class='active'"; ?>>
              <a href="<?php echo base_url(); ?>index.php/fb_app/page_status/<?php echo $page_info['id']; ?>/">
                  <i class="icon-chevron-right"></i> Page Status</a>
           </li>
          
        </ul>
           </div>
            
            
            <!-- Our Mission -->
            <div class="margin-bottom-20">
                <div class="headline"><h3>Our Mission</h3></div>
                <p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
			</div>            
        
            
        	<!-- Contact Us -->
            <div class="who margin-bottom-30">
                <div class="headline"><h3>Contact Us</h3></div>
                <p>Vero facilis est etenim a feugiat cupiditate non quos etrerum facilis.</p>
                <ul class="unstyled">
                    <li><a href="#"><i class="icon-home"></i>5B amus ED554, New York, US</a></li>
                    <li><a href="#"><i class="icon-envelope-alt"></i>infp@example.com</a></li>
                    <li><a href="#"><i class="icon-phone-sign"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="icon-globe"></i>http://www.example.com</a></li>
                </ul>
            </div>
                
        </div><!--/span3-->
        