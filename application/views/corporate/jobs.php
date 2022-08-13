<div class="container">
    <div class="single">  
        <div class="col-sm-12 follow_left">
            <h3>Recent Jobs  | <a href="<?php echo base_url(); ?>corporate/jobs-new" class="btn btn-info">Post Jobs</a></h3>


            <div class="follow_jobs">

                <?php
                foreach ($alljobs as $jobs) {
                    ?>

                    <img src="<?php echo base_url() . "images/logu-img/logu-img-{$jobs->id}.{$jobs->picture}" ?> " alt="" class="img-circle img-responsive">
                    <div class="title">
                        <h5><?php echo $jobs->title ?></h5>
                        <p><?php echo $jobs->company_name ?></p>
                         
                    </div>
                    <div class="data">
                        <span class="city"><i class="fa fa-map-marker"></i>New York City</span>
                        <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                        <span class="sallary"><i class="fa fa-dollar"></i>45,000</span>

                    </div>
                    <a class="fa fa-edit" href="<?php echo base_url() . "corporate/jobs-edit/{$jobs->id}" ?> ">Edit</a>
                    <a  href="<?php echo base_url() . "corporate/jobs-delete/{$jobs->id}" ?>">Delete</a>
                    <?php
                }
                ?>


                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
