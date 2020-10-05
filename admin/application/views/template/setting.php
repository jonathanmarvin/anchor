<div id="page-title">
    <h2>Edit Admin Details</h2>

</div>
<div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="post" action="<?php echo base_url(''); ?>index.php/setting/editSettings">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name..." value="<?php echo $user[0]->username; ?>">
                            </div>
                        </div>
                        
                    </div>
             
                         <div class="col-md-12">
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password..." value="<?php echo $user[0]->password; ?>">
                                 <input type="hidden" class="form-control" id="tmppass" name="tmppass"    value="<?php echo $user[0]->password; ?>">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="bg-default   text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Save</button>
                    <button class="btn btn-lg btn-secondary" id="btnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script>
    $('#btnCancel').click(function (e) {
        e.preventDefault();
        window.location.href = "<?php echo base_url(''); ?>";
    });
  
   if ("<?php echo $this->session->flashdata('editSuccess'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Admin details updated Sccessfully.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-green'
            });
        }
        
          if ("<?php echo $this->session->flashdata('editFail'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Failed!! Please try after some time.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-green'
            });
        }
        
</script>
