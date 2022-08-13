<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Location insert | <a class="btn btn-info" href="<?php echo base_url()?>admin/location_view">location view</a></h2>
            <?php
            $msg =  $this->session->userdata("msg");
            if ($msg != NULL){
                echo "<div class='error'>$msg</div>";
                $this->session->unset_userdata("msg");
            }
            ?>
            <form action="<?php echo base_url() ?>admin/location" method="post">
                
                
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="name">Location</label>
                        <div class="col-md-9">
                            <input type="text" name="name" id="email" value="<?php echo set_value("name"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
              
              

                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" name="save" value="Save" class="btn btn-primary btn-sm">
                        
                    </div>
                </div>
              
            </form>
        </div>
    </div>
</div>

