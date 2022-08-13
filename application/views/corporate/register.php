<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Employer Register Form</h2>
            <form action="<?php echo base_url() ?>corporate/register" method="post">

                <?php
                /*
                  $attributes = array(
                  "method"=>"post",
                  "name"=>"poly"
                  );
                  echo form_open("", $attributes);


                  $csrf = array(
                  'name' => $this->security->get_csrf_token_name(),
                  'hash' => $this->security->get_csrf_hash()
                  );
                 */
                ?>
                <input type="hidden" name="<?php //echo $csrf['name'];  ?>" value="<?php //echo $csrf['hash'];  ?>" />
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" name="fullname" id="firstName" value="<?php echo set_value("fullname") ?>" class="form-control input-sm"/>
                            <?php echo form_error('fullname', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Email</label>
                        <div class="col-md-9">
                            <input type="text" name="email" id="email" value="<?php echo set_value("email"); ?>" class="form-control input-sm"/>
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
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="repassword">Retype password</label>
                        <div class="col-md-9">
                            <input type="password" name="repassword" id="password" value="<?php echo set_value("repassword"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('repassword', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="contact">Contact</label>
                        <div class="col-md-9">
                            <input type="text" name="contact" id="contact" class="form-control input-sm"/>
                            <?php echo form_error('contact', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="company">Company Name</label>
                        <div class="col-md-9">
                            <input type="text" name="company" id="company" class="form-control input-sm"/>
                            <?php echo form_error('company', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="industryid">Industry</label>
                        <div class="col-md-9">
                            <select name="industryid" id="industryid" class="form-control input-sm">
                                <option value="0">Choose Industry</option>
                                <?php
                                $temp = set_value("industryid");
                                foreach ($allIndustry as $industry) {
                                    if ($temp == $industry->id) {
                                        echo "  <option value='{$industry->id}'selected>{$industry->name}</option>";
                                    } else {
                                      echo "  <option value='{$industry->id}'>{$industry->name}</option>";  
                                    }
                                }
                                ?>

                            </select>
                            <?php echo form_error('industryid', '<div class="error">', '</div>'); ?>
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
                       
                        You have don't login click here <a href="<?php echo base_url() ?>corporate/login" value='register' class="btn btn-primary btn-sm">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

