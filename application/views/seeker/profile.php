<div class="container">
    <div class="single"> 

        <div class="col-md-4">
            <div class="col_3">
                <h3>My Profile</h3>
                <ul class="list_1">
                    <?php
                    require_once 'dashboard.php';
                    ?>						
                </ul>
            </div>

        </div>




        <div class="col-md-8 single_right">
            <div class="but_list">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">View Resume</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                Academic Qualification</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tab_grid">
                                <?php
                                foreach ($allAcademic as $academic) {
                                    ?>
                                    <div class="col-sm-9">
                                        <table style="font-size: 12px">
                                            <tr>
                                                                                         
                                            <h3><?php echo $academic->first_name ?></h3>
                                            </tr>
                                            <tr>
                                                <td>Address</td>   
                                                <td> : <span><?php echo $academic->pre_address ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>   
                                                <td> : <span><?php echo $academic->mobile ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>e-mail</td>   
                                                <td> : <span><?php echo $academic->email ?></span></td>
                                            </tr>
                                        </table>

                                    </div>


                                    <div class="col-sm-3">

                                        <img src="<?php echo base_url() . "images/profile/", "user-{$academic->id}.{$academic->picture}" ?> " alt="" class="img-responsive">

                                    </div>


                                    <div class="col-sm-12">
                                        <br><h3 style="background-color: #D0D0D0 ">Academic Qualification:</h3>
                                        <table class="table table-bordered" width="100%">
                                            <thead>
                                                <tr >
                                                    <th scope="col"></th>
                                                    <th  style="text-align: center" scope="col">Exam Title</th>
                                                    <th style="text-align: center" scope="col">Concentration/Major</th>
                                                    <th style="text-align: center" scope="col">Institute</th>
                                                    <th style="text-align: center" scope="col">Result</th>
                                                    <th style="text-align: center" scope="col">Pas.Year</th>
                                                    <th style="text-align: center" scope="col">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td><?php echo $academic->exam_title ?></td>
                                                    <td><?php echo $academic->subject ?></td>
                                                    <td><?php echo $academic->institute ?></td>
                                                    <td><?php echo $academic->rname ?></td>
                                                    <td><?php echo $academic->passing_year ?></td>
                                                    <td><?php echo $academic->duration ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-sm-12">
                                        <h3 style=" background-color: #D0D0D0 ">Personal Details:</h3>
                                        <table style="font-size: 12px">
                                            <tr>
                                                <td>Father's Name</td>                                         
                                                <td> : <span><?php echo $academic->father ?></span></td>
                                            </tr>

                                            <tr>
                                                <td>Mother's Name</td>                                         
                                                <td> : <span><?php echo $academic->mother ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>                                         
                                                <td> : <span><?php echo $academic->dob ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>                                         
                                                <td> : <span><?php echo $academic->gender ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Marital Status </td>                                         
                                                <td> : <span><?php echo $academic->marital ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>National Id No.</td>
                                                <td> : <span><?php echo $academic->national_id ?></span></td>
                                            </tr>
                                             <tr>
                                                <td>Religion </td>
                                                <td> : <span><?php echo $academic->religion ?></span></td>
                                            </tr>
                                             <tr>
                                                <td>Permanent Address </td>
                                                <td> : <span><?php echo $academic->per_address ?></span></td>
                                            </tr>
                                        </table>

                                       
                                    </div>

                                </div>
                                <?php
                            }
                            ?>
                        </div>


                        <!--##################### top location end ####################-->



                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">


                            <div class="tab_grid">

                                <div class="col-sm-12">



                                </div>
                                <div class="clearfix"> </div>
                            </div>





                        </div>
                    </div>
                </div><!---toggol ses-->
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>