<div class="banner">
    <div class="container">
        <div id="search_wrapper">
            <div id="search_form" class="clearfix">
                <h1>Start your job search</h1>
                <p>
                <form action="<?php echo base_url()?>search" method="get">
                    <input type="text" name="title">
                   
                    <label class="btn2 btn-2 btn2-1b"><input type="submit"  value="Find Jobs"></label>
                    </form>
                </p>
                <h2 class="title">top Jobs &amp; searches</h2>
            </div>
            <div id="city_1" class="clearfix">

                <?php
                $i = 1;
                foreach ($allData[0] as $value) {
                    if ($i == 3) {
                        $i = 1;
                    }
                    if ($i == 1) {
                        $orange[] = [
                            'id' => $value->id,
                            'name' => $value->name,
                            'total' => $value->total
                        ];
                    }
                    if ($i == 2) {
                        $blue[] = [
                            'id' => $value->id,
                            'name' => $value->name,
                            'total' => $value->total
                        ];
                    }
                    $i++;
                }

                if (isset($orange)) {
                    ?>
                    <ul class="orange">
                        <?php
                        for ($index = 0; $index < count($orange); $index++) {
                            ?>

                            <li>
                                <a href="<?php echo base_url() . Replace($orange[$index]['name']) . "/{$orange[$index]['id']}" ?>"><?php echo $orange[$index]['name'] ?>
                                    <small>(<?php echo $orange[$index]['total'] ?>)</small>
                                </a>
                            </li>

                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }


                if (isset($blue)) {
                    ?>
                    <ul class="blue">
                        <?php
                        for ($index = 0; $index < count($blue); $index++) {
                            ?>
                            <li>
                                <a href="<?php echo base_url() . Replace($blue[$index]['name']) . "/{$blue[$index]['id']}" ?>"><?php echo $blue[$index]['name'] ?>
                                    <small>(<?php echo $blue[$index]['total'] ?>)</small>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>   

            </div>
        </div>
    </div> 
</div>