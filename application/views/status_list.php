

<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page blog-item">
	
        <!-- Left Sidebar -->
    	<div class="span9">
			<!-- Leave a Comment -->
            <div class="post-comment">
            	<h3 class="color-green">Status</h3>
              <?php
                echo form_open('fb_app/status_list/');
              ?>
                    <textarea rows="8" class="span10" name="status"></textarea>
                    <div id="datetimepicker5">
                        <input data-format="yyyy-MM-dd"  type="text" class="span3 add-on" placeholder="Date" name="status_date"></input>
                    </div>
                    <div id="datetimepicker4">
                        <input data-format="HH-mm-00"  type="text" class="span3 add-on" placeholder="Time" name="status_time"></input>
                    </div>
                    <p>All date and time are in UTC+6</p>
                    <?php if(!isset($data['success'])): ?>
                    <?php echo validation_errors(); ?>
                    <?php else: ?>
                    <div class="alert alert-success">Your status has been successfully added</div>
                    <?php endif; ?>
                    <p><button type="submit" class="btn-u">Add Status +</button></p>
                </form>
            </div><!--/post-comment-->
		
        	<div class="blog margin-bottom-30">
            	<h3>Scheduled Status</h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> February 02, 2013</li>
                	<li><i class="icon-time"></i> 10:04:00</li>
                </ul>
                <br/>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
				<p><a class="btn" href="#">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn" href="#">Remove</a></p>
				<br/>
				
				
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> February 02, 2013</li>
                	<li><i class="icon-time"></i> 10:04:00</li>
                </ul>
                <br/>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
				<p><a class="btn" href="#">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn" href="#">Remove</a></p>
				<br/>
				
                </div><!--/blog-->

			<hr />
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span3">
        	<!-- Photo Stream -->
        	<div class="headline"><h3>Manage Pages</h3></div>
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
                <div class="headline"><h3>Suggest Status</h3></div>
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

