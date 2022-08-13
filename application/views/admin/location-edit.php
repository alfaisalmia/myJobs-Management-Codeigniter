<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Edit location |  <a href="<?php base_url() ?>industry/industry" class="btn btn-primary btn-sm">View Location</a></h2>

            <?php
            foreach($selLocation as $job) {   
                
                ?>
            

            <form action="<?php echo base_url()?>admin/location-update" method="post" >
                <input type="hidden" name="id" value="<?php echo $job->id?>"
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="Name"> Location Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="firstName" value="<?php echo $job->name ?>" class="form-control input-sm"/>
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
                <?php
            }
            ?>
        </div>
    </div>
</div>

