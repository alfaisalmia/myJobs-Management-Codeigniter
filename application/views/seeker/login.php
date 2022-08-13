<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Seeker Login Form</h2>
            <?php
            $msg =  $this->session->userdata("msg");
            if ($msg != NULL){
                echo "<div class='error'>$msg</div>";
                $this->session->unset_userdata("msg");
            }
            ?>
            <form action="<?php echo base_url() ?>seeker/login" method="post">
                
                
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
                    <div class="form-actions floatRight">
                        <input type="submit" name="log" value="Login" class="btn btn-primary btn-sm">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="form-actions floatleft">
                       
                        You have don't register click here <a href="<?php echo base_url() ?>seeker/register" value='register' class="btn btn-primary btn-sm">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

