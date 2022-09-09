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
                    <h3 class="w3_inner_tittle two">Add Medicine </h3>

                    <div class="grid-1 ">
                        <div class="form-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="health_ids" class="col-sm-2 control-label">Disease</label>
                                    <div class="col-sm-8">
                                        <select name="health_id" id="selector1" class="form-control1">
                                            <option>Select Disease</option>
                                            <?php
                                            foreach ($healthissue_arr as $d) {
                                            ?>
                                                <option value="<?php echo $d->health_id; ?>">
                                                    <?php echo $d->health_name; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="category">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Medicine Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-8"><textarea name="description" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control">
                                    </div>
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