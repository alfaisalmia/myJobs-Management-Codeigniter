<div class="container">
    <div class="single">  

        <div class="col-md-12 single_right">
            <?php
            foreach ($allData[0] as $value) {

                $id = $value->id;
                ?>

                <h3>Sed ut perspiciatis unde omnis iste natus</h3>
                <div class="row_1">
                    <div class="col-sm-5 single_img">
                        <img src="<?php echo base_url() ?>images/a1.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-sm-7 single-para" style="background-color:  #E7E7E7">
                        <h1 style="text-align: center"><img src='<?php echo base_url() . "images/logu-img/logu-img-{$value->id}.{$value->picture}"?>' class="img-responsive" alt="" width="80"/></h1>
                            <p><b>Title:</b>
                                <?php echo $value->title?>
                            </p>

                            <p> <b>Description:</b>
                                <?php echo read_file("./files/description-{$value->id}.txt") ?>
                            </p>
                            
                             <p><b>Requirements:</b>
                               <?php echo read_file("./files/description-{$value->id}.txt") ?>
                            </p>
                            
                             <p><b>Salary:</b>
                                <?php echo $value->salary?>
                            </p>
                             <p><b>Vacancies:</b>
                              <?php echo $value->vacancies?>
                                 
                            </p>
                             <p><b>Deadline:</b>
                                <?php echo $value->deadline?>
                            </p>
                              <p><b>Company Name:</b>
                                <?php echo $value->company_name?>
                            </p>
                              <p><b>Email:</b>
                                <?php echo $value->email?>
                            </p>
                             
                            
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </p>
                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <?php
                break;
            }
            ?>

            <?php
            $i = 0;
            foreach ($allData[0] as $value) {
                if ($i > 0) {
                    echo ", ";
                }

                echo "<a href='" . base_url() . Replace($value->name) . "/{$value->catid}" . "'>{$value->name}</a>";
                $i = 1;
            }

            $type = $this->session->userdata("type");
            if ($type == 'u') {

                if (isset($allData[1])) {
                    echo "<a href='#' id='{$id}' class='btn btn-success remove-jobs '>Remove</a>";
                } else {
                    echo "<a href='#' id='{$id}' class='btn btn-success apply-jobs'> Apply</a>";
                }

                
            } else {
                echo "<a href='" . base_url() . "seeker/login" . "' class='btn btn-success'>Apply</a>";
            }
            ?>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("body").on("click", ".apply-jobs", function () {
            $.ajax({
                type: "POST",
                data: {
                    "jobid": $(this).attr("id")
                },
                url: "<?php echo base_url() ?>apply-jobs",
                success: function (result) {
                    alert(result);
                    $(".apply-jobs").text("Remove");
                    $(".apply-jobs").addClass("remove-jobs ");
                    $(".apply-jobs").removeClass("apply-jobs");
                }
            });
            //alert($(this).attr("id")); 
            return false;
        });

        $("body").on("click", ".remove-jobs", function () {
            $.ajax({
                type: "POST",
                data: {
                    "jobid": $(this).attr("id")
                },
                url: "<?php echo base_url() ?>remove-jobs",
                success: function (result) {
                    alert(result);
                    $(".remove-jobs ").text("Apply");
                    $(".remove-jobs ").addClass("apply-jobs");
                    $(".remove-jobs ").removeClass("remove-jobs");
                }
            });
            //alert($(this).attr("id")); 
            return false;
        });

    });


</script>