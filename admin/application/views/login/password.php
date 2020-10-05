<div class="row">
    <div class="col-lg-12">
        <?php if(validation_errors()){ ?>
        <div class="alert alert-danger alert-dismissable">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
            <?php echo validation_errors(); ?>
        </div>
        <?php } ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Change Password
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="<?php echo site_url('login/updatePassword'); ?>">
                            <div class="form-group col-lg-4">
                                <label>Current Password</label>
                                <input name="current" type="password" class="form-control" placeholder="Current Password" required="required">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>New Password</label>
                                <input name="new" type="password" class="form-control" placeholder="New Password" required="required">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Confirm Password</label>
                                <input name="re" type="password" class="form-control" placeholder="Confirm Password" required="required">
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <a href="<?php echo site_url('login'); ?>">
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-12 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->