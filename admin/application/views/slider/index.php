<div id="page-title">
    <h2>All Sliders</h2>
    
    <a href="<?php echo site_url('index.php/slider/add'); ?>" class="btn btn-primary" title="" style="float: right;">Add New Slider</a>
    <br />
</div>
<div class="panel">
    <div class="panel-body">
        <div class="example-box-wrapper">
            <table id="dataTable_job" class="table table-striped table-bordered  no-wrap" cellspacing="0" width="100%">
                <thead>
                    <tr style="background-color:#f9fafe ;"> 
                        <th>ID</th>    
                        <th>Title</th>
                        <th>Image</th>
                        <th>height / width</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                         <?php foreach($sliders as $q){ ?>
                             <tr style="border: 1px solid #ebebeb;padding-bottom: 0px;background-color: #fff;">
                                <td ><?php echo $q->id; ?></td>
                                <td><?php echo $q->title; ?></td>
                                
                                <td><?php if($q->img != ''){ echo 'Yes'; } else {echo '';} ?></td>  
                                <td><?php echo $q->ht.' / '.$q->wd; ?></td>                        
                                <td><?php if($q->status == 1 ){ echo 'Active'; } else {echo 'InActive';} ?></td> 
                                <td>
                          <a href="<?php echo site_url('index.php/slider/edit/'.$q->id); ?>"><i class="glyph-icon tooltip-button demo-icon icon-edit" title="Edit" style="color:blue;" data-original-title=".icon-edit"></i>
                                &nbsp;
                                   <a onclick="return confirm('Are you Sure you want to delete this slider???');" href="<?php echo site_url('index.php/slider/deleteslider/'.$q->id); ?>"><i class="glyph-icon tooltip-button demo-icon icon-close" title="Delete" data-original-title=".icon-close" style="color:red;"></i></a>
                                
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    
            </table>

        </div>
    </div>
</div>
            

  
     
<script type="text/javascript">



    $(document).ready(function() {
    var oTable = $('#dataTable_job').DataTable({
        "order": [[ 0, "asc" ]]
    } ); 
$('#search_cat').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
});

   if ("<?php echo $this->session->flashdata('editFail'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Failed!! Please try after some time.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-red'
            });
        }
        
           if ("<?php echo $this->session->flashdata('editSuccess'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Question Details Updated Successfully.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-green'
            });
        }
        
        
           if ("<?php echo $this->session->flashdata('addSuccess'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Question Details Added Successfully.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-green'
            });
        }
        
          if ("<?php echo $this->session->flashdata('addFail'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Failed!! Please try after some time.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-red'
            });
        }
        
           if ("<?php echo $this->session->flashdata('deleteFail'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Failed!! Please try after some time.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-red'
            });
        }
        
         if ("<?php echo $this->session->flashdata('deleteSuccess'); ?>" != '') {
           // alert('dsfsdf');
            $.jGrowl("Question Details Deleted Successfully.", {
                sticky: false,
                position: 'top-right',
                theme: 'bg-green'
            });
        }
    
</script>
