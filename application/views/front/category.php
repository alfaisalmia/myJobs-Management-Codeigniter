
<div class="container">
    <div class="single">  
        <div class="col-sm-12 single_right">
            <?php
            foreach ($allData[0] as $value){
            ?>
            
            <div class="tab_grid">
                <div class="col-sm-3 loc_1">
                    <a href="<?php echo base_url() . Replace($value->name) . "/" . Replace($value->title) . "/{$value->id}"; ?>"><img  alt="100%x180" src='<?php echo base_url() . "images/logu-img/logu-img-{$value->id}.{$value->picture}"?>' data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                </div>
                <div class="col-sm-9">
                    <div class="location_box1">
                        <h6><a href="<?php echo base_url() . Replace($value->name) . "/" . Replace($value->title) . "/{$value->id}"; ?>"><?php echo $value->title?> </a><span class="m_1"><?php echo time_elapsed_string($value->date)?></span></h6>
                        <p><span class="m_2">Description : </span><?php echo read_file("./files/description-{$value->id}.txt") ?></p>
                        <ul class="links_bottom">
                            <li><a href="<?php echo base_url() . Replace($value->name) . "/" . Replace($value->title) . "/{$value->id}"; ?>"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text"><?php echo $value->email?></span></a></li>
                            
                            <li><a href="<?php echo base_url() . Replace($value->name) . "/" . Replace($value->title) . "/{$value->id}"; ?>"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                            
                            
                            <li class="last"><a href="<?php echo base_url() . Replace($value->name) . "/" . Replace($value->title) . "/{$value->id}"; ?>"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            
            <?php
            }
            echo $this->pagination->create_links();
            ?>
            
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

