<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">


    html,body {
        height: 100%;
        background: #fff;
        overflow: hidden;
    }


</style>

    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Admin | codeTest&Track</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(''); ?>/assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(''); ?>/assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(''); ?>/assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(''); ?>assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/images/icons/favicon.png">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/components/border-radius.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/loading-indicators.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/loading-bar/loadingbar.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/admin-responsive.css">
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-ui-core.js"></script>

  


    <script type="text/javascript">
        /* WOW animations */

        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


</head>

<body>
<img src="<?php echo base_url(''); ?>assets/image-resources/blurred-bg/blurred-bg-3.jpg" class="login-img wow fadeIn" alt="">

<div class="center-vertical">
    <div class="center-content row">

        <div class="col-md-3 center-margin">

            <div class="content-box wow bounceInDown modal-content">
                <h3 class="content-box-header content-box-header-alt bg-default">
                    <span class="icon-separator">
                        <i class="glyph-icon icon-cog"></i>
                    </span>
                    <span class="header-wrapper">Admin area
                           
                            <small>Login to your account.</small>
                    </span>

                </h3>
                <form id="demo-form" data-parsley-validate="">
                    <div class="content-box-wrapper" id="div-login">
<div id="login-error" style="color: red;"></div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" data-parsley-type="text" name="email" id="email" placeholder="Enter UserName" required class="form-control">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-envelope-o"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" required placeholder="Password">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <a href="#" title="Recover password">Forgot Your Password?</a>
                        </div>

                        <button class="btn btn-success btn-block" id="btnLogin">Sign In </button>
                    </div>
                    <div class="loading-spinner" id="div-loading">
                        <i class="bg-primary"></i>
                        <i class="bg-primary"></i>
                        <i class="bg-primary"></i>
                        <i class="bg-primary"></i>
                        <i class="bg-primary"></i>
                        <i class="bg-primary"></i>
                    </div>
                    
                     
                    
                </form>
            </div>

        </div>

    </div>
</div>
</body>
</html>

 <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/modernizr.js"></script>

    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/wow/wow.js"></script>


<script>
    $(document).ready(function () {

      
        $('#email').focus();
		$('#login-error').hide();
        $('#div-loading').hide();
        $("#demo-form").submit(function (e) {

           e.preventDefault();
			$('#login-error').hide();
            $('#div-login').hide();
            $('#div-loading').show();
     
            var editurl = $('#url').val();
            var formdata = {
                'email': $('#email').val(),
                'password': $('#password').val()
            };
            $.ajax({
                url: 'index.php/login/checkLogin',
                type: 'POST',
                data: formdata,
                dataType: 'json',
                success: function (data) {
                	//alert('result ' + data);
                    if (data=='-1') {
                    	$('#login-error').show();
                    	$('#login-error').html('Please enter valid username and password!!');
                        //alert('Please enter valid username and password!!');
                        $('#div-login').show();
                        $('#div-loading').hide();
                        return false;
                    }
                    else
                    {
						    location.reload();
					}


                }, error : function(request,error)
                {
                    alert("Request error : "+JSON.stringify(request));
                }
            });

        });
    });

</script>

