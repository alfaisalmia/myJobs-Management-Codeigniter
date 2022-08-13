<div class="container">
    <div class="single">  
        <div class="form-container">
            <h2>View Resume</h2>

            <form action="<?php echo base_url() ?>seeker/view_resume" method="post">


                <div class="follow_jobs">

                <?php
                foreach ($allJuser as $jobs) {
                    ?>

                    <img src='<?php echo base_url() . "images/uimg/uimg-{$jobs->id}.{$jobs->picture}" ?>' alt="" class="img-circle img-responsive">
                    
                    <div class="title">
                        <h5><?php echo $jobs->first_name ?></h5>
                        
                         
                    </div>
                    <div class="data">
                        <span class="city"><i class="fa fa-map-marker"></i>New York City</span>
                        <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                        <span class="sallary"><i class="fa fa-dollar"></i>45,000</span>

                    </div>
                    <a class="fa fa-edit" href="<?php echo base_url() . "seeker/register-edit/{$jobs->id}" ?> ">Edit</a>
                    <a  href="<?php echo base_url() . "seeker/resume-delete/{$jobs->id}" ?>">Delete</a>
                    <?php
                }
                ?>


               
            </div>

            </form>
        </div>
    </div>
</div>

