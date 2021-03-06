
    	<div class="span9">
            
            <!-- Leave a Comment -->
            <div class="post-comment">
                <h3 class="color-green">Status</h3>
                <?php
                $attributes = array('class' => 'status-form');
                echo form_open('fb_app/status_list/', $attributes);
                ?>
                <div class="control-group">
                <textarea rows="8" class="span10" name="status"></textarea>
                </div>
                <div id="datetimepicker5" class="control-group">
                    <input data-format="yyyy-MM-dd"  type="text" class="span3 add-on" placeholder="Date" name="status_date"></input>
                </div>
                <div id="datetimepicker4" class="control-group">
                    <input data-format="hh:mm:00"  type="text" class="span3 add-on" placeholder="Time" name="status_time"></input>
                </div>
                <p>All date and time are in UTC+6</p>

                <?php echo validation_errors(); ?>
                <?php if (isset($success) && $success == TRUE): ?>
                    <div class="alert alert-success">Your status has been successfully added</div>
                <?php endif; ?>
                <p><button type="submit" class="btn-u">Add Status +</button></p>
                </form>
            </div><!--/post-comment-->

            <div class="blog margin-bottom-30">
                <h3>Scheduled Status</h3>


                <?php
                $i = 0;
                if (isset($status_list)):
                    foreach ($status_list as $row):
                        $i++;
                        ?>
                        <ul class="unstyled inline blog-info">
                            <li><i class="icon-calendar"></i>
                                <?php
                                $m_date_time = $row['date_time'];
                                echo date("M d, Y", strtotime($m_date_time));
                                ?>
                            </li>
                            <li><i class="icon-time"></i> <?php echo date("H:i:s", strtotime($m_date_time)); ?></li>
                        </ul>
                        <br/>
                        <p><?php echo $row['status']; ?></p>
                        <p>
                            <a class="btn" href="#editModal<?php echo $i; ?>"  data-toggle="modal"  role="button">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn" href="#removeModal<?php echo $i; ?>"  data-toggle="modal"  role="button">Remove</a></p>
                        <br/>

                        <div id="removeModal<?php echo $i; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                            <div class="modal-body">
                                <div class="alert alert-error">Do you want to remove this status?</div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/fb_app/remove_status/<?php echo $row['id']; ?>/">Remove</a>
                            </div>
                        </div>

                        <div id="editModal<?php echo $i; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                            <div class="modal-body">
                                <div class="post-comment">
                                    <h3 class="color-green">Edit Status</h3>
                                    <?php
                                    echo form_open('fb_app/update_status/' . $row['id'] . "/");
                                    ?>
                                    <textarea rows="8" class="span10" name="status"><?php echo $row['status']; ?></textarea>
                                    <div id="editdatepicker<?php echo $i; ?>">
                                        <input data-format="yyyy-MM-dd"  type="text" class="span3 add-on" placeholder="Date" name="status_date" value="<?php echo date("Y-m-d", strtotime($m_date_time)); ?>"></input>
                                    </div>
                                    <div id="edittimepicker<?php echo $i; ?>">
                                        <input data-format="hh:mm:00"  type="text" class="span3 add-on" placeholder="Time" name="status_time" value="<?php echo date("H:i:s", strtotime($m_date_time)); ?>"></input>
                                    </div>
                                    <p>All date and time are in UTC+6</p>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <button type="submit" class="btn btn-success" >save</button>
                                </form>
                            </div>

                        </div>



                        <?php
                    endforeach;
                endif;
                ?>


            </div><!--/blog-->

        </div><!--/span9-->
    </div><!--/row-fluid-->        

   
</div><!--/container-->		
<!--=== End Content Part ===-->