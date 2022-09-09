<?php
include_once('header.php');
?>
<div class="clearfix"></div>
<!-- //w3_agileits_top_nav-->

<!-- /inner_content-->
<div class="inner_content">
    <!-- /inner_content_w3_agile_info-->

    <!-- breadcrumbs -->
    <div class="w3l_agileits_breadcrumbs">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="">Home</a><span>«</span></li>

                <li>Health Issues</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle">Health Issues</h2>
        <!-- tables -->

        <div class="agile-tables">
            <div class="w3l-table-info agile_info_shadow">
                <h3 class="w3_inner_tittle two">Health Issues </h3>
                <div class="table-responsive">
                    <table id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created Date/Time</th>
                                <th>Updated Date/Time</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($healthissue_arr as $d) {
                            ?>
                                <tr>
                                    <td><?php echo $d->health_id; ?></td>
                                    <td><?php echo $d->health_name; ?></td>
                                    <td><?php echo $d->health_description; ?></td>
                                    <td><?php echo $d->created_dt; ?></td>
                                    <td><?php echo $d->updated_dt; ?></td>
                                    <td><a href="delete?health_id=<?php echo $d->health_id; ?>"><?php echo 'Delete'; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>




        </div>
        <!-- //tables -->
        <?php
        include_once('footer.php');

        ?>