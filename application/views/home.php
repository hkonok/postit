<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page">    
        <!-- Left Sidebar -->
    	<div class="span9">
        	<div class="row-fluid">
                <div class="blog margin-bottom-30">
                    <!--
                    <h3>Pellentesque habitant morbi tristique</h3>
                    -->
                    <div class="headline"><h3>Our Services</h3></div>
                   <div  class="blog-img bxslider recent-work">
                            <a style="width:100%;">
                       <div id="cover_photo" style="width: 100%;" ></div>
                            </a>
                       
                   </div>

                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                    <!--<p><a class="btn-u btn-u-small" href="blog_item.html">Read More</a></p>-->
                </div><!--/blog-->
                <div class="row-fluid servive-block servive-block-in">
                        <div class="span4">
                            <h4><a href="#">Lorem sequat ipsum de</a></h4>
                            <p><i class="icon-bell"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>
                        </div>
                        <div class="span4">
                            <h4><a href="#">Vivamus imperdiet gravi</a></h4>
                            <p><i class="icon-bullhorn"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>
                        </div>
                        <div class="span4">
                            <h4><a href="#">Donec idslacs elit nomi</a></h4>
                            <p><i class=" icon-lightbulb"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>
                        </div>
                </div>
            </div>
          
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span3">
            
                <!-- Posts -->
             
            <div class="posts margin-bottom-20">
                <div class="headline"><h5>Welcome to FbAutoPoster</h5></div>
                <dl class="dl-horizontal">
                    <dt><a href="#"><img src="http://graph.facebook.com/<?php echo $fb_id; ?>/picture/" alt="" /></a></dt>
                    <dd>
                        <p> &nbsp;</p>
                        <p><a href="#"><?php echo $fb_name; ?></a></p> 
                    </dd>
                </dl>
            </div><!--/posts-->
            <hr/>
            
        	<!-- facebook like box -->
                <div class="posts margin-bottom-20">
                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/12monkeys/263767153751286" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <!-- Photo Stream -->
            <div class="headline"><h3>Manage Pages</h3></div>
            <ul class="unstyled blog-ads">
                <?php
                if (isset($accounts['accounts']['data'])):
                    foreach ($accounts['accounts']['data'] as $row):
                ?>
                        <li><a href="<?php echo base_url(); ?>index.php/fb_app/page_home/<?php echo $row['id']; ?>/"><img src="https://graph.facebook.com/<?php echo $row['id']; ?>/picture" alt="" class="hover-effect" /></a></li>
                <?php
                    endforeach;
                ?>
                <?php else: ?>
                    <li><a href="#">No Page Found</a></li>
                <?php
                endif;
                ?>
            </ul>
            <hr/>
                
            </div><!--/posts-->

        	

        	<!-- Photo Stream -->
           <div class="posts margin-bottom-20">
        	<div class="headline"><h3>Your Photos</h3></div>
            <ul class="unstyled blog-ads">
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="<?php echo base_url();?>assets/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
            </ul>
                
             </div>

        	

        	<!-- Blog Latest Tweets -->
            <div class="blog-twitter">
                <div class="headline"><h3>Your Status</h3></div>
                <p><a href="">@htmlstream</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                <p><a href="">@unify</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                <p><a href="">@veroeos</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/adVs9f</a> <span>17 hours ago</span></p>
                <p><a href="">@accusamus </a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/wf5Fs6</a> <span>23 hours ago</span></p>
                <p><a href="">@veroeoset</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/7EsffP</a> <span>1 day ago</span></p>
            </div>
        </div><!--/span3-->
    </div><!--/row-fluid-->        
</div><!--/container-->		
<!--=== End Content Part ===-->

