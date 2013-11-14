<!--=== Footer ===-->
<div class="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span4">
                <!-- About -->
                <div class="headline"><h3>About</h3></div>
                <p class="margin-bottom-25">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>


            </div><!--/span4-->

            <div class="span4">
                <div class="posts">
                    <div class="headline"><h3>Recent Blog Entries</h3></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="<?php echo base_url(); ?>assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="<?php echo base_url(); ?>assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="<?php echo base_url(); ?>assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                </div>
            </div><!--/span4-->

            <div class="span4">
                <!-- Monthly Newsletter -->
                <div class="headline"><h3>Contact Us</h3></div>
                <address>
                    25, Lorem Lis Street, Orange <br />
                    California, US <br />
                    Phone: 800 123 3456 <br />
                    Fax: 800 123 3456 <br />
                    Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                </address>

                <!-- Stay Connected -->
                <div class="headline"><h3>Stay Connected</h3></div>
                <ul class="social-icons">
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                </ul>
            </div><!--/span4-->
        </div><!--/row-fluid-->
    </div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <p>2013 &copy; DriptoSoft. ALL Rights Reserved. <a href="http://www.driptosoft.com" target="_blank">www.driptosoft.com</a></p>
            </div>
            <div class="span4">
                <a href="index.html"><img id="logo-footer" src="<?php echo base_url(); ?>assets/img/logo2-default.png" class="pull-right" alt="" /></a>
            </div>
        </div><!--/row-fluid-->
    </div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
    App.init();
    App.initSliders();
    App.initFancybox(); 
    Index.initParallaxSlider();

    });
</script>


<!-- Date time picker -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/picker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
    var _startDate = new Date();
    _startDate.setHours(_startDate.getHours()+6);
    $('#datetimepicker5').datetimepicker({
    startDate: _startDate,
    pickTime: false
    });
    });

    $(function() {
    var _startDate = new Date();
    _startDate.setHours(_startDate.getHours()+6);
    $('#datetimepicker4').datetimepicker({
    startDate: _startDate,
    pickTime: true,
    pickDate: false,
    pickSeconds: false
    });
    });

</script>
<!-- progress bar -->
<script type="text/javascript">
    $(document).ready(function(){
    $("#loading_image").click(function(){

    });
    });
</script>

<!-- /progress bar -->
<?php
if (isset($num_count) && isset($link) && $link == 3):
    for ($i = 1; $i <= $num_count; $i++):
        ?>
        <script type="text/javascript">
            $(function() {
            var _startDate = new Date();
            _startDate.setHours(_startDate.getHours()+6);

            $('#editdatepicker<?php echo $i; ?>').datetimepicker({
            startDate: _startDate,
            pickTime: false
            });
            });

            $(function() {
            var _startDate = new Date();
            _startDate.setHours(_startDate.getHours()+6);
            $('#edittimepicker<?php echo $i; ?>').datetimepicker({
            startDate: _startDate,
            pickTime: true,
            pickDate: false,
            pickSeconds: false
            });
            });

        </script>
        <?php
    endfor;
endif;
?>
<!-- Date time picker -->
<!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/respond.js"></script>
<![endif]-->

<!-- form validation -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/validate/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/validate/dist/additional-methods.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

      var Validator =  $('.image-form').validate(
        {
            rules: {
                image_date: {
                    minlength: 10,
                    required: true
                },
                image_time: {
                    minlength: 8,
                    required: true
                },
                image_file: {
                    required: true,
                    extension: "png"
                    
                }
            },
            highlight: function(element) {
                $(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function(element) {
                element
                .text('').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
            }
            
            

        }); //end validate
        
        var Validator2 =  $('.status-form').validate(
        {
            rules: {
                status_date: {
                    minlength: 10,
                    required: true
                },
                status_time: {
                    minlength: 8,
                    required: true
                },
                status: {
                    required:true
                    
                }
            },
            highlight: function(element) {
                $(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function(element) {
                element
                .text('').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
            }
            
            

        }); //end validate
        
        $('#add-image-button').click(function(){
            if(Validator.form() == true){
                $('#uploading-image').append("<div class='progress progress-striped active' style='width: 50%;'><div class='bar' style='width: 100%;'></div></div>");
            }
        });
    
    }); // end document.ready
    
</script>

<!-- /form validation-->

<!-- facebook cover-->
<script>
(function($)
{
    $.fn.fbGetcover = function(FBuid, containerWidth, containerHeight, callback)
    {
        var $this = this;
        if(typeof(containerWidth) == 'undefined') containerWidth = 850;
        if(typeof(containerHeight) == 'undefined') containerHeight = 314;
        if(typeof(callback) == 'undefined') callback = function(status){};
        $this.find('img').remove();
        $.ajax(
        {
            url: 'http://graph.facebook.com/'+FBuid+'?fields=cover',
            dataType: 'jsonp',
            complete: function(jqXHR, textStatus)
            {
                if(textStatus != 'success') callback('failed');
            },
            success: function(data)
            {
                if(typeof(data.cover) != 'undefined')
                {
                    $this.append
                    (
                        $('<img  />').css({'width':'inherit'})
                        .hide()
                        .load(function(e)
                        {
                            $this.css({'width':containerWidth, 'height':containerHeight, 'display':'inline-block', 'position':'relative', 'overflow':'hidden'});
                            $(e.currentTarget).css(
                            {
                                'margin-top':(($(e.currentTarget).height()-containerHeight)*(data.cover.offset_y*0.01))*-1
                            }).show();
                            callback('success');
                        })
                        .attr('src', data.cover.source)
                    );
                }
                else callback('failed');
            }
        });
        return this;
    };
})(jQuery);;


$(document).ready(function(e)
{
    $('#cover_photo').fbGetcover(<?php echo $fb_id; ?>);    
});

</script>
<!-- /facebook cover -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>	