<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>My Register Form</h2>
            <form action="<?php echo base_url() ?>seeker/register" method="post" enctype="multipart/form-data">

            
                <input type="hidden" name="<?php //echo $csrf['name'];  ?>" value="<?php //echo $csrf['hash'];  ?>" />
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="first_name">First Name</label>
                        <div class="col-md-9">
                            <input type="text" name="first_name" id="firstName" value="<?php echo set_value("first_name") ?>" class="form-control input-sm"/>
                            <?php echo form_error('first_name', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="last_name">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" name="last_name" id="email" value="<?php echo set_value("last_name"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('last_name', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Email</label>
                        <div class="col-md-9">
                            <input type="text" name="email" id="password" value="<?php echo set_value("email"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="password">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" id="password" value="<?php echo set_value("password"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
<!--                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="type">Type</label>
                        <div class="col-md-9">
                            <input type="text" name="type" id="contact" class="form-control input-sm"/>
                            <?php //echo form_error('type', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="father">Father Name</label>
                        <div class="col-md-9">
                            <input type="text" name="father" id="company" class="form-control input-sm"/>
                            <?php echo form_error('father', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="mother">Mother Name</label>
                        <div class="col-md-9">
                            <input type="text" name="mother" id="company" class="form-control input-sm"/>
                            <?php echo form_error('mother', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="dob">Date of Birth</label>
                        <div class="col-md-9">
                            <input type="date" name="dob" id="company" class="form-control input-sm"/>
                            <?php echo form_error('dob', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="gender">Gender</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" checked="" name="gender" value="Male"> Male
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="gender" value="Female"> Female
                                </label>
                                <?php //echo form_error('status', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
              
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="marital">Marital</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" checked="" name="marital" value="Yes"> Yes
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="marital" value="No"> No
                                </label>
                                <?php //echo form_error('status', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="national_id">National Id</label>
                        <div class="col-md-9">
                            <input type="text" name="national_id" id="company" class="form-control input-sm"/>
                            <?php echo form_error('national_id', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="religion">Religion</label>
                        <div class="col-md-9">
                            <input type="text" name="religion" id="company" class="form-control input-sm"/>
                            <?php echo form_error('religion', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="pre_address">Pre_address</label>
                        <div class="col-md-9">
                            <input type="text" name="pre_address" id="company" class="form-control input-sm"/>
                            <?php echo form_error('pre_address', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="per_address">Per_address</label>
                        <div class="col-md-9">
                            <input type="text" name="per_address" id="company" class="form-control input-sm"/>
                            <?php echo form_error('per_address', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="mobile">Mobile No</label>
                        <div class="col-md-9">
                            <input type="text" name="mobile" id="company" class="form-control input-sm"/>
                            <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="picture">Picture</label>
                        <div class="col-md-9">
                            <input type="file" name="picture" id="picture" class="form-control input-sm"/>
                            <?php echo form_error('picture', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="objective">Objective</label>
                        <div class="col-md-9">
                            <input type="text" name="objective" id="company" class="form-control input-sm"/>
                            <?php echo form_error('objective', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="summary">Summary</label>
                        <div class="col-md-9">
                            <input type="text" name="summary" id="company" class="form-control input-sm"/>
                            <?php echo form_error('summary', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="special">Special</label>
                        <div class="col-md-9">
                            <input type="text" name="special" id="company" class="form-control input-sm"/>
                            <?php echo form_error('special', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                          
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="keyword">Keyword</label>
                        <div class="col-md-9">
                            <input type="text" name="keyword" id="company" class="form-control input-sm"/>
                            <?php echo form_error('keyword', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" name="reg" value="Register" class="btn btn-primary btn-sm">
                       
                    </div>
                </div>
                  <div class="row">
                    <div class="form-actions floatleft">
                       
                        You have don't login click here <a href="<?php echo base_url() ?>seeker/login" value='register' class="btn btn-primary btn-sm">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

