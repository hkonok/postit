

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
            <p class="headline pull-left">You are using AutoPoster as <?php echo $page_info['name']; ?> | back to <a href="<?php echo base_url(); ?>index.php/fb_app/home/"><?php echo $fb_name; ?></a></p>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page">    
        <!-- Left Sidebar -->
    	<div class="span9">
        	<div class="blog margin-bottom-30">
            	<h3>Pellentesque habitant morbi tristique</h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> February 02, 2013</li>
                	<li><i class="icon-pencil"></i> Diana Anderson</li>
                	<li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>
                </ul>
            	<ul class="unstyled inline blog-tags">
                    <li>
                        <i class="icon-tags"></i> 
                        <a href="#">Technology</a> 
                        <a href="#">Education</a>
                        <a href="#">Internet</a>
                        <a href="#">Media</a>
                    </li>
                </ul>
                <div class="blog-img"><img src="<?php echo base_url();?>assets/img/posts/1.jpg" alt="" /></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <p><a class="btn-u btn-u-small" href="blog_item.html">Read More</a></p>
            </div><!--/blog-->

        	<div class="blog margin-bottom-30">
            	<h3>Consectetur adipiscing elit similique</h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> January 30, 2013</li>
                	<li><i class="icon-pencil"></i> Ann Bour</li>
                	<li><i class="icon-comments"></i> <a href="#">12 Comments</a></li>
                </ul>
            	<ul class="unstyled inline blog-tags">
                    <li>
                        <i class="icon-tags"></i> 
                        <a href="#">Technology</a> 
                        <a href="#">Education</a>
                        <a href="#">Internet</a>
                        <a href="#">Media</a>
                    </li>
                </ul>
                <div class="blog-img"><img src="<?php echo base_url();?>assets/img/posts/2.jpg" alt="" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
                <p><a class="btn-u btn-u-small" href="blog_item.html">Read More</a></p>
            </div><!--/blog-->

        	<div class="blog margin-bottom-30">
            	<h3>Blanditiis praesentium voluptatum deleniti</h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> January 15, 2013</li>
                	<li><i class="icon-pencil"></i> Kate Dommy</li>
                	<li><i class="icon-comments"></i> <a href="#">64 Comments</a></li>
                </ul>
            	<ul class="unstyled inline blog-tags">
                    <li>
                        <i class="icon-tags"></i> 
                        <a href="#">Technology</a> 
                        <a href="#">Education</a>
                        <a href="#">Internet</a>
                        <a href="#">Music</a>
                        <a href="#">Films</a>
                        <a href="#">Business</a>
                    </li>
                </ul>
                <div class="blog-img"><img src="<?php echo base_url();?>assets/img/posts/3.jpg" alt="" /></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias  expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <p><a class="btn-u btn-u-small" href="blog_item.html">Read More</a></p>
            </div><!--/blog-->
            
          
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span3">
        	<!-- Search Bar -->
                <div class="posts margin-bottom-20">
                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/12monkeys/263767153751286" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>Your Pages</h3></div>
                <?php 
                        if(isset($accounts['accounts']['data'])):
                            foreach ($accounts['accounts']['data'] as $row):
                ?>
                
                <dl class="dl-horizontal">
                    <dt><a href="#"><img src="https://graph.facebook.com/<?php echo $row['id']; ?>/picture" alt="" /></a></dt>
                    <dd>
                        <p><a href="#"><?php echo $row['name']; ?></a></p> 
                    </dd>
                </dl>
                
                <?php 
                        endforeach;
                    endif;
                ?>
                
            </div><!--/posts-->

        	

        	<!-- Photo Stream -->
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
