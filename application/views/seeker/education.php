<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Level of Education Insert | <a class="btn btn-info" href="<?php echo base_url()?>educationc/education_view">Education view</a></h2>
        
            <form action="<?php echo base_url() ?>seeker/education" method="post">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="name">Education</label>
                        <div class="col-md-9">
                            <input type="text" name="name" id="email" value="<?php echo set_value("name"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
              
              

                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" name="reg" value="Save" class="btn btn-primary btn-sm">
                        
                    </div>
                </div>
              
            </form>
        </div>
    </div>
</div>

