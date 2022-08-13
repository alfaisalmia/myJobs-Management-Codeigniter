<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2> Edit Resume</h2>

            <?php
            foreach ($allUser as $all) {
                ?>
                <form action="<?php echo base_url() ?>seeker/register_update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $all->id ?>">
                      <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="first_name">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" id="firstName" value="<?php echo $all->first_name ?>" class="form-control input-sm"/>
                                <?php echo form_error('first_name', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="last_name">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="last_name" id="email" value="<?php echo $all->last_name ?>" class="form-control input-sm"/>
                                <?php echo form_error('last_name', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="email">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" id="password" value="<?php echo $all->email ?>" class="form-control input-sm"/>
                                <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="password">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" id="password" value="<?php echo $all->password ?>" class="form-control input-sm"/>
                                <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="father">Father Name</label>
                            <div class="col-md-9">
                                <input type="text" name="father" id="company" class="form-control input-sm" value="<?php echo $all->father ?>"/>
                                <?php echo form_error('father', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="mother">Mother Name</label>
                            <div class="col-md-9">
                                <input type="text" name="mother" id="company" class="form-control input-sm" value="<?php echo $all->mother ?>"/>
                                <?php echo form_error('mother', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="date" name="dob" id="company" class="form-control input-sm" value="<?php echo $all->dob ?>"/>
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
                                        <input type="radio" checked=""  name="gender" value="Male"> Male
                                    </label>
                                    <label for="radio-02" class="label_radio">
                                        <input type="radio" name="gender" value="Female"> Female
                                    </label>
                                    <?php //echo form_error('status', '<div class="error">', '</div>');  ?>
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
                                    <?php //echo form_error('status', '<div class="error">', '</div>');  ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="national_id">National Id</label>
                            <div class="col-md-9">
                                <input type="text" name="national_id" id="company" class="form-control input-sm" value="<?php echo $all->national_id ?>"/>
                                <?php echo form_error('national_id', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="religion">Religion</label>
                            <div class="col-md-9">
                                <input type="text" name="religion" id="company" class="form-control input-sm" value="<?php echo $all->religion ?>"/>
                                <?php echo form_error('religion', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="pre_address">Pre_address</label>
                            <div class="col-md-9">
                                <input type="text" name="pre_address" id="company" class="form-control input-sm" value="<?php echo $all->pre_address ?>"/>
                                <?php echo form_error('pre_address', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="per_address">Per_address</label>
                            <div class="col-md-9">
                                <input type="text" name="per_address" id="company" class="form-control input-sm" value="<?php echo $all->per_address ?>"/>
                                <?php echo form_error('per_address', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="mobile">Mobile No</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" id="company" class="form-control input-sm" value="<?php echo $all->mobile ?>"/>
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
                                <input type="text" name="objective" id="company" class="form-control input-sm" value="<?php echo $all->objective ?>"/>
                                <?php echo form_error('objective', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="summary">Summary</label>
                            <div class="col-md-9">
                                <input type="text" name="summary" id="company" class="form-control input-sm" value="<?php echo $all->summary ?>"/>
                                <?php echo form_error('summary', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="special">Special</label>
                            <div class="col-md-9">
                                <input type="text" name="special" id="company" class="form-control input-sm" value="<?php echo $all->special ?>"/>
                                <?php echo form_error('special', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="keyword">Keyword</label>
                            <div class="col-md-9">
                                <input type="text" name="keyword" id="company" class="form-control input-sm" value="<?php echo $all->keyword ?>"/>
                                <?php echo form_error('keyword', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-actions floatRight">
                            <input type="submit" name="reg" value="Update" class="btn btn-primary btn-sm">

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-actions floatleft">

                           
                        </div>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>

