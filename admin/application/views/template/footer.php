  </div>



                </div>
            </div>
        </div>


        <!-- WIDGETS -->

 

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/datepicker-ui/datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/datepicker-ui/datepicker-demo.js"></script>

        <!-- Bootstrap Dropdown -->

        <!-- <script type="text/javascript" src="~/assets/widgets/dropdown/dropdown.js"></script> -->

        <!-- Bootstrap Tooltip -->

        <!-- <script type="text/javascript" src="~/assets/widgets/tooltip/tooltip.js"></script> -->

        <!-- Bootstrap Popover -->

        <!-- <script type="text/javascript" src="~/assets/widgets/popover/popover.js"></script> -->

        <!-- Bootstrap Progress Bar -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/progressbar/progressbar.js"></script>

        <!-- Bootstrap Buttons -->

        <!-- <script type="text/javascript" src="~/assets/widgets/button/button.js"></script> -->

        <!-- Bootstrap Collapse -->

        <!-- <script type="text/javascript" src="~/assets/widgets/collapse/collapse.js"></script> -->

        <!-- Superclick -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/superclick/superclick.js"></script>

        <!-- Input switch alternate -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/input-switch/inputswitch-alt.js"></script>

        <!-- Slim scroll -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/slimscroll/slimscroll.js"></script>

        <!-- Slidebars -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/slidebars/slidebars.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/slidebars/slidebars-demo.js"></script>

        <!-- PieGage -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/piegage/piegage.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/piegage/piegage-demo.js"></script>

        <!-- Screenfull -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/screenfull/screenfull.js"></script>

        <!-- Content box -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/content-box/contentbox.js"></script>

        <!-- Overlay -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/overlay/overlay.js"></script>

        <!-- Widgets init for demo -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-init/widgets-init.js"></script>

        <!-- Theme layout -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/themes/admin/layout.js"></script>

        <!-- Theme switcher -->

        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/theme-switcher/themeswitcher.js"></script>
         
<script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/chosen/chosen.js"></script>
 <script>

$(function() { "use strict";

   $(".chosen-select").chosen();
    $(".chosen-search").append('<i class="glyph-icon icon-search"></i>');
    $(".chosen-single div").html('<i class="glyph-icon icon-caret-down"></i>');

});


 	//var ddd;
 	$('#div-topic-loading').hide();
 	$('#ddllevel').on('change', function() {
   $('#div-topic-loading').show();
   $('#ddlTopic').hide();
   //alert('this is demo');
    var levelId = $(this).val();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url(''); ?>index.php/topic/getTopicByLevel/"+levelId ,
        success: function (data) {
        	
        	//debugger;
        	$('#div-topic-loading').hide();
        	 if($('#hdnPG').val()=='question' || $('#hdnPG').val()=='copyquestion'){      
        	$('#ddlTopic').show();
        	}
        	 $('#ddlTopic').empty(); 
        	var result = jQuery.parseJSON(data);
        	$('#ddlTopic').append( '<option value="0">Select a topic</option>' );
        	for (var i = 0; i < result.length; i++) {
        		 
        		$('#ddlTopic').append( '<option value="'+result[i].id+'">' + result[i].topic + '</option>' );
}

//alert('list refresh');
$(".chosen-select").trigger("chosen:updated");
        }
    });
   });
 </script>
 
  <script>
 	//var ddd;
 	$('#div-quiz-loading').hide();
 	var ismobile = false;
 	$('#ddlTopic').on('change', function() {
   $('#div-quiz-loading').show();
   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
ismobile = true;
}

if(!ismobile)
   {
   	//alert('hide');
   	$('#ddlQuiz').hide();
   }  
   $('#ddlTopic_chosen').hide();
   
   //alert('this is demo');
   var topiclId = 0;
   if($('#hdnPG').val()=='question'  || $('#hdnPG').val()=='copyquestion'   ){                       
   	 topiclId = $(this).val();
   }

    $.ajax({                        
        type: "POST",
        url: "<?php echo base_url(''); ?>index.php/question/getQuizByTopic/"+topiclId ,
        success: function (data) {
        	
        	//debugger;
        	$('#div-quiz-loading').hide();
        //	if($('#hdnPG').val()=='question'){  
        	//$('#ddlQuiz').show();
        	//}
        	 $('#ddlQuiz').empty(); 
        	 $('#ddlTopic_chosen').show();
        	//$('.chosen-results').empty();
        	 
        	var result = jQuery.parseJSON(data);
        		$('#ddlQuiz').append( '<option value="0">select a quiz 	</option>' );
        	for (var i = 0; i < result.length; i++) {
        		$('#ddlQuiz').append( '<option value="'+result[i].id+'">' + result[i].quiz_name + '</option>' );
        
}
$(".chosen-select").trigger("chosen:updated");

        }
    });
      });
 
 </script>
 

    </div>
   
</body>

</html>
