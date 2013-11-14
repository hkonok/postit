


<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
    <div class="row-fluid">
        <!-- Unify Thumbnail -->
        <div class="post-comment">
                    <h3 class="color-green">Add Image</h3>
                    <?php
                    $attributes = array('class' => 'image-form');
                    echo form_open('fb_app/add_image/', $attributes);
                    ?>
                   <div class="control-group">
                    <input type="file" name="image_file" accept="image/*">
                    <p>Allowable file extensions are jpg, png and gif.</p>
                   </div>
                    <div id="datetimepicker5" class="control-group">
                        <input data-format="yyyy-MM-dd"  type="text" class="span3 add-on " placeholder="Date" name="image_date" ></input>
                    </div>
                    <div id="datetimepicker4" class="control-group">
                        <input data-format="hh:mm:00"  type="text" class="span3 add-on" placeholder="Time" name="image_time" ></input>
                    </div>
                    <p>All date and time are in UTC+6</p>
                    <p><button type="submit" class="btn-u" id="add-image-button">Add Image +</button></p>
        </form>

                </div>
        



        
       

        <div class="headline"><h3>Scheduled Images</h3></div>
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer"  title="" href="<?php echo base_url(); ?>assets/img/carousel/9.jpg">
                            <div class="overflow-hidden">
                                <img src="<?php echo base_url(); ?>assets/img/carousel/9.jpg" alt="" />
                            </div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Our Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/3.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/3.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">One More Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/4.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/4.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Another Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style  thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/5.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/5.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Huge Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>

        </ul><!--/thumbnails-->

        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer"  title="" href="<?php echo base_url(); ?>assets/img/carousel/9.jpg">
                            <div class="overflow-hidden">
                                <img src="<?php echo base_url(); ?>assets/img/carousel/9.jpg" alt="" />
                            </div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Our Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/3.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/3.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">One More Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/4.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/4.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Another Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail-style  thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <a class="thumbnail fancybox-button zoomer" title="" href="<?php echo base_url(); ?>assets/img/carousel/5.jpg">
                            <div class="overflow-hidden"><img src="<?php echo base_url(); ?>assets/img/carousel/5.jpg" alt="" /></div>
                        </a>
                        <a class="btn-more hover-effect" href="#">Edit</a>					
                    </div>
                    <h3><a href="#">Huge Work</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p><a class="btn" href="#">Remove</a></p>
                </div>
            </li>

        </ul><!--/thumbnails-->

    </div><!--/row-fluid-->        
</div><!--/container-->		
<!--=== End Content Part ===-->

