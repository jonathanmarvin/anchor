<div id="page-title">
    <h2>Add New Slider</h2>
</div>
<div class="panel">
    <div class="panel-body">
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="post" action="<?php echo base_url(''); ?>index.php/slider/addSlider" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                                <div class="form-group">
                                    <label style="text-align: left;" class="col-sm-3 control-label">Slider Title</label>
                                    <div class="col-sm-6">
                                    <input type="text" name="title"  id="title" required placeholder="Enter slider title" class="form-control">
                                    </div>                          
                                </div>
                            </div>
                            <div class="col-md-8" style="margin-top: 0px;">
                                <div class="form-group">
                                    <label class="col-sm-3" >Upload Image</label>
                                    <div class="col-sm-6">
                                    <input type="file" id="imagef" class="form-control" name="imagef" required placeholder=" " >
                                    </div>                                    
                                </div>                        
                             </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label style="text-align: left;" class="col-sm-3 control-label">display order</label>
                                    <div class="col-sm-6">
                                    <input type="number" name="displayorder" required  id="displayorder" placeholder="Display Order" class="form-control">
                                    </div>                          
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label style="text-align: left;" class="col-sm-3 control-label">Image Height</label>
                                    <div class="col-sm-6">
                                    <input type="number" name="ht"  id="ht" required placeholder="Enter image height" class="form-control">
                                    </div>                          
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label style="text-align: left;" class="col-sm-3 control-label">Image Width</label>
                                    <div class="col-sm-6">
                                    <input type="number" name="wd"  id="wd" required placeholder="Enter image width" class="form-control">
                                    </div>                          
                                </div>
                            </div>
                            <div class="col-md-8">
    			<div class="form-group">
                         <label class="col-sm-3">is Active?</label>    
                        <input type="checkbox" id="status" name="status" checked value="1" >                            
                        </div>
              </div>
              <div class="col-md-8">
                <div class="bg-default   text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Save</button>
                    <button class="btn btn-lg btn-secondary" id="btnCancel">Cancel</button>
                </div>
                </div>
                </div>
                 <input type="hidden" id="hdnPG" value="question"/>
            </form>
        </div>
    </div>
</div>
 <script>
 $('#status').change(function(){
   $(this).val($(this).is(':checked') ? '1' : '0');
});   	

 $('#btnCancel').click(function (e) {
        e.preventDefault();
        window.location.href = "<?php echo base_url('index.php/slider'); ?>";
});
</script>