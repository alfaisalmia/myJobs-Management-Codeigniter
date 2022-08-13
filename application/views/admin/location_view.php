<div class="container">
    <div class="single">  
        <div class="col-sm-12 follow_left">
            <h3>View Location  | <a href="<?php echo base_url(); ?>admin/location" class="btn btn-info">Add location</a></h3>


            <div class="follow_jobs">

                <?php
                foreach ($allLocation as $lok) {
                    ?>

                    
                    <div class="title">
                        <h5><?php echo $lok->name ?></h5>
                        
                         
                    </div>
                    <div class="data">
                        <span class="city"><i class="fa fa-map-marker"></i>New York City</span>
                        <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                        <span class="sallary"><i class="fa fa-dollar"></i>45,000</span>

                    </div>
                    <a class="fa fa-edit" href="<?php echo base_url() . "admin/location-edit/{$lok->id}" ?> ">Edit</a>
                    <a  href="<?php echo base_url() . "admin/location-delete/{$lok->id}" ?>">Delete</a>
                    <?php
                }
                ?>


               
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
