<?php
include_once('header.php');
?>

<!-- /inner_content-->
<div class="inner_content">
    <!-- /inner_content_w3_agile_info-->

    <!-- breadcrumbs -->
    <div class="w3l_agileits_breadcrumbs">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="dashboard">Home</a><span>«</span></li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle"></h2>

        <!--/forms-->
        <div class="forms-main_agileits">


            <!--/forms-inner-->
            <div class="forms-inner">

                <div class="wthree_general graph-form agile_info_shadow ">
                    <h3 class="w3_inner_tittle two">Add Health Issue </h3>

                    <div class="grid-1 ">
                        <div class="form-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Name of the Diseases</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Description of Disease</label>
                                    <div class="col-sm-8"><textarea name="description" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--//forms-inner-->
        </div>
        <!--//forms-->

        <?php
        include_once('footer.php');
        ?>