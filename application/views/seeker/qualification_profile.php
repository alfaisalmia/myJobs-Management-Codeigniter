<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>Academic Qualification insert | <a class="btn btn-info" href="<?php echo base_url() ?>seeker/profile">profile</a></h2>

            <form action="<?php echo base_url() ?>seeker/qualification" method="post">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="level_of_educationid">Level_of_Educationid</label>
                        <div class="col-md-9">
                               <select name="level_of_educationid" id="industryid" class="form-control input-sm">
                                <option value="0">Choose level_of_Education</option>
                                <?php
                                $temp = set_value("level_of_educationid");
                                foreach ($allEducation as $education) {
                                    if ($temp == $education->id) {
                                        echo "  <option value='{$education->id}'selected>{$education->name}</option>";
                                    } else {
                                      echo "  <option value='{$education->id}'>{$education->name}</option>";  
                                    }
                                }
                                ?>

                            </select>
                            <?php echo form_error('level_of_educationid', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="exam_title">Exam Title</label>
                        <div class="col-md-9">
                            <input type="text" name="exam_title" id="exam_title" value="<?php echo set_value("exam_title"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('exam_title', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="subject">Subject</label>
                        <div class="col-md-9">
                            <input type="text" name="subject" id="subject" value="<?php echo set_value("subject"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('subject', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="institute">Institute</label>
                        <div class="col-md-9">
                            <input type="text" name="institute" id="email" value="<?php echo set_value("institute"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('institute', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="resultid">Resultid</label>
                        <div class="col-md-9">
                           <select name="resultid" id="industryid" class="form-control input-sm">
                                <option value="0">Choose Result</option>
                                <?php
                                $temp = set_value("resultid");
                                foreach ($allResult as $result) {
                                    if ($temp == $result->id) {
                                        echo "  <option value='{$result->id}'selected>{$result->name}</option>";
                                    } else {
                                      echo "  <option value='{$result->id}'>{$result->name}</option>";  
                                    }
                                }
                                ?>

                            </select>
                            <?php echo form_error('resultid', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="marks">Marks</label>
                        <div class="col-md-9">
                            <input type="text" name="marks" id="email" value="<?php echo set_value("marks"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('marks', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="cgpa">CGPA</label>
                        <div class="col-md-9">
                            <input type="text" name="cgpa" id="cgpa" value="<?php echo set_value("cgpa"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('cgpa', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="scale">Scale</label>
                        <div class="col-md-9">
                            <input type="text" name="scale" id="scale" value="<?php echo set_value("scale"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('scale', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="passing_year">Passing_year</label>
                        <div class="col-md-9">
                            <input type="text" name="passing_year" id="passing_year" value="<?php echo set_value("name"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('passing_year', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="duration">Duration</label>
                        <div class="col-md-9">
                            <input type="text" name="duration" id="duration" value="<?php echo set_value("duration"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('duration', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="achivements">Achivements</label>
                        <div class="col-md-9">
                            <input type="text" name="achivements" id="duration" value="<?php echo set_value("achivements"); ?>" class="form-control input-sm"/>
                            <?php echo form_error('achivements', '<div class="error">', '</div>'); ?>
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

