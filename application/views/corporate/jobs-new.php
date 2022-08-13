<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Jobs Posting Form |   <a href="<?php echo base_url()?>corporate/jobs" class="btn btn-primary btn-sm">View jobs</a></h2>
           
            <form action="<?php echo base_url() ?>corporate/jobs-new" method="post" enctype="multipart/form-data">


                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" id="firstName" value="<?php echo set_value("title") ?>" class="form-control input-sm"/>
                            <?php echo form_error('title', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="description">Description</label>
                        <div class="col-md-9">
                            <textarea name="description" id="description" class="form-control input-sm"><?php echo set_value("title") ?></textarea>
                            <?php echo form_error('description', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="location">Location</label>
                        <div class="col-md-9">
                            <select name="locationid" id="locationid" class="form-control input-sm">
                                <option value="0">Choose Location</option>
                                <?php
                                $temp = set_value("locationid");
                                foreach ($allLocation as $location) {
                                    if ($temp == $location->id) {
                                        echo "  <option value='{$location->id}'selected>{$location->name}</option>";
                                    } else {
                                        echo "  <option value='{$location->id}'>{$location->name}</option>";
                                    }
                                }
                                ?>

                            </select>
                            <?php echo form_error('locationid', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="catid">Category</label>
                        <div class="col-md-9">
                            <?php
                             $temp = set_value("catid");
                             print_r($temp);
                            ?>
                            <select name="catid[]" multiple="" id="catid" class="form-control input-sm">
                                <option value="0">Choose Category</option>
                                <?php
                                $temp = set_value("catid");
                                foreach ($allCat as $cat) {
                                    $c = 0;
                                    if($temp){
                                        foreach ($temp as $t){
                                           if($t == $cat->id){
                                             $c++;
                                             break;
                                           } 
                                        }
                                    }
                                    if ( $c > 0) {
                                        echo "<option value='{$cat->id}'selected>{$cat->name}</option>";
                                    } else {
                                        echo "<option value='{$cat->id}'>{$cat->name}</option>";
                                    }
                                }
                                ?>

                            </select>
                            <?php echo form_error('catid', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="salary">Salary</label>
                        <div class="col-md-9">
                            <input type="text" name="salary" id="email" value="<?php echo set_value("salary"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('salary', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="vacancies">Vacancies</label>
                        <div class="col-md-9">
                            <input type="text" name="vacancies" id="password" value="<?php echo set_value("vacancies"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('vacancies', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="job_type">Job Type</label>
                        <div class="col-md-9">
                            <input type="text" name="job_type" id="password" value="<?php echo set_value("job_type"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('job_type', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="job_level">Job Level</label>
                        <div class="col-md-9">
                            <input type="text" name="job_level" id="contact" value="<?php echo set_value("job_level"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('job_level', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="deadline">Deadline</label>
                        <div class="col-md-9">
                            
                   
                    <input id="datepicker" placeholder="Date" name="deadline" type="text" value="<?php echo set_value("deadline") ?>"class="form-control input-sm" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'yyyy/mm/dd';
                            }"
                           >
                           <?php echo form_error("deadline", '<span class="error"><small>', '</small></span>') ?>
                
                           
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="company_name">Company Name</label>
                        <div class="col-md-9">
                            <input type="text" name="company_name" id="company" value="<?php echo set_value("company_name"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('company_name', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Email</label>
                        <div class="col-md-9">
                            <input type="text" name="email" id="company" value="<?php echo set_value("email"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="picture">Picture Jobs Logu</label>
                        <div class="col-md-9">
                            <input type="file" name="picture" id="company" value="<?php echo set_value("picture"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('picture', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

<!--                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="status">Status</label>
                        <div class="col-md-9">
                            <input type="radio" name="status" id="company" value="<?php //echo set_value("status"); ?>" class="form-control input-sm"/>
                            <?php //echo form_error('status', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>-->
<!--
-->                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="status">Status</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" checked="" name="status"> Yes
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="status"> No
                                </label>
                                <?php //echo form_error('status', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="hot_jobs">Hot Jobs</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" checked="" name="hot_jobs"> Yes
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="hot_jobs"> No
                                </label>
                                <?php echo form_error('hot_jobs', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="hot_jobs">Hot Jobs</label>
                        <div class="col-md-9">
                            <input type="text" name="hot_jobs" id="company" value="<?php// echo set_value("hot_jobs"); ?>" class="form-control input-sm"/>
                            <?php //echo form_error('hot_jobs', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="date">Date</label>
                        <div class="col-md-9">
                            <input type="date" name="date" id="company" value="<?php echo set_value("date"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('date', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

<!--                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="employerid">Employerid</label>
                        <div class="col-md-9">
                            <input type="text" name="employerid" id="employerid" value="<?php //echo set_value("employerid"); ?>" class="form-control input-sm"/>
                            <?php //echo form_error('employerid', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>-->

                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" name="jobsubmit" value="Submit Job" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

