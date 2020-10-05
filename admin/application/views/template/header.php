<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Admin | codeAnchor Church</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/multi-select/multiselect.css">
 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(''); ?>assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(''); ?>assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(''); ?>assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(''); ?>assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/bootstrap/css/bootstrap.css">


    <!-- HELPERS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/border-radius.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/page-transitions.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/colors.css">

    <!-- ELEMENTS --> 

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/badges.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/dashboard-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/forms.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/images.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/info-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/invoice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/loading-indicators.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/menus.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/panel-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/response-messages.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/responsive-tables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/ribbon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/social-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/tables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/tile-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/elements/timeline.css">



    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/icons/spinnericon/spinnericon.css">

    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/accordion-ui/accordion.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/calendar/calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/carousel/carousel.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/charts/justgage/justgage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/charts/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/charts/piegage/piegage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/charts/xcharts/xcharts.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/datatable/datatable.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/datepicker-ui/datepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/dialog/dialog.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/file-input/fileinput.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/input-switch/inputswitch.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/input-switch/inputswitch-alt.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/jcrop/jcrop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/jgrowl-notifications/jgrowl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/loading-bar/loadingbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/maps/vector-maps/vectormaps.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/markdown/markdown.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/multi-select/multiselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/multi-upload/fileupload.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/nestable/nestable.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/noty-notifications/noty.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/popover/popover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/pretty-photo/prettyphoto.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/progressbar/progressbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/range-slider/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/slidebars/slidebars.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/slider-ui/slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/tabs-ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/theme-switcher/themeswitcher.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/timepicker/timepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/tocify/tocify.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/tooltip/tooltip.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/touchspin/touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/uniform/uniform.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/wizard/wizard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/widgets/xeditable/xeditable.css">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/chat.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/files-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/login-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/notification-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/progress-box.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/todo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/snippets/mobile-navigation.css">

    <!-- APPLICATIONS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/applications/mailbox.css">

    <!-- Admin theme -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/admin/layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/admin/color-schemes/default.css">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/components/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/themes/components/border-radius.css">

    <!-- Admin responsive -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/responsive-elements.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/js-core/jquery-cookie.js"></script>
    <script src="<?php echo base_url(''); ?>assets/js-core/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(''); ?>assets/js-core/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/datatable/datatable-bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/datatable/datatable-responsive.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/jgrowl-notifications/jgrowl.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/jgrowl-notifications/jgrowl-demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/loading-bar/loadingbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/loading-bar/loadingbar.js"></script>




    <style>
        /* Loading Spinner */
        .spinner
        {
            margin: 0;
            width: 70px;
            height: 18px;
            margin: -35px 0 0 -9px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
        }

            .spinner > div
            {
                width: 18px;
                height: 18px;
                background-color: #333;
                border-radius: 100%;
                display: inline-block;
                -webkit-animation: bouncedelay 1.4s infinite ease-in-out;
                animation: bouncedelay 1.4s infinite ease-in-out;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            .spinner .bounce1
            {
                -webkit-animation-delay: -.32s;
                animation-delay: -.32s;
            }

            .spinner .bounce2
            {
                -webkit-animation-delay: -.16s;
                animation-delay: -.16s;
            }


        @@-webkit-keyframes bouncedelay
        {
            0%,80%,100%
            {
                -webkit-transform: scale(0.0);
            }

            40%
            {
                -webkit-transform: scale(1.0);
            }
        }

        @@keyframes bouncedelay
        {
            0%,80%,100%
            {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            }

            40%
            {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }

        #adminDatatTable
        {
            color:black;
        }
    </style>



    <script type="text/javascript">
        $(window).load(function () {
            setTimeout(function () {
                $('#loading').fadeOut(400, "linear");
            }, 300);
        });
    </script>



</head>


<body>

  <div id="sb-site">

        <div id="loading1">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div id="page-wrapper">
            <div id="page-header" class="bg-gradient-9">
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                    <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
                </div>
                <div id="header-logo" class="logo-bg">
                    <a href="<?php echo base_url(''); ?>" class="logo-content-big" title="MonarchUI">Anchor <i>Church</i>
                        <span>Anchor Church Admin Panel</span>
                    </a>
                    <a href="<?php echo base_url(''); ?>" class="logo-content-small" title="MonarchUI">Anchor<i>Church</i>
                        <span>Anchor Church Admin Panel</span>
                    </a>
                    <a id="close-sidebar" href="#" title="Close sidebar">
                        <i class="glyph-icon icon-angle-left"></i>
                    </a>
                </div>
                <div id="header-nav-left">
                    <div class="user-account-btn dropdown">
                        <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                           <img width="28" src="<?php echo base_url(''); ?>assets/images/logo/logo.png" alt="Profile image">
                            
                            <span style="margin-left: 10px;"><?php echo  $this->session->userdata('name'); ?></span>
                            <i class="glyph-icon icon-angle-down"></i>
                        </a>
                        <div class="dropdown-menu float-left">
                            <div class="box-sm">
                                <div class="login-box clearfix">
                                    <div class="user-img">
                                        <a href="#" title="" class="change-img">Change photo</a>
 <img width="28" src="<?php echo base_url(''); ?>assets/images/logo/logo.png" alt="Profile image">
                                      
                                    </div>
                                    <div class="user-info">
                                        <span><?php echo  $this->session->userdata('name'); ?>

                                            <i>Administrator</i>
                                        </span>
                                        <a href="<?php echo base_url('index.php/setting'); ?>" title="Edit profile">Edit profile</a>
                                       
                                    </div>
                                </div>


                                <div class="pad5A button-pane button-pane-alt text-center">
                                    <a href="<?php echo base_url(''); ?>index.php/login/logout" class="btn display-block font-normal btn-danger">
                                        <i class="glyph-icon icon-power-off"></i>
                                        Logout
                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #header-nav-left -->

                <div id="header-nav-right">
                    <a class="header-btn" id="logout-btn" href="<?php echo base_url(''); ?>index.php/login/logout" title="Logout">
                        <i class="glyph-icon icon-linecons-lock"></i>
                    </a>

                </div>
                <!-- #header-nav-right -->

            </div>
            <div id="page-sidebar">
                <div class="scroll-sidebar">


                    <ul id="sidebar-menu">
                        <li class="header"><span>Overview</span></li>
                        <li>
                            <a href="<?php echo base_url('index.php/dashboard');?>" title="Admin Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                <span>Admin dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/slider');?>" title="Manage Sliders">
                                <i class="glyph-icon icon-dashboard"></i>
                                <span>Manage Slider</span>
                            </a>
                        </li>  
                    <!-- #sidebar-menu -->


                </div>
            </div>
            <div id="page-content-wrapper">
                <div id="page-content">

                    <div class="container">


                        <!-- Sparklines charts -->

                        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/sparklines/sparklines.js"></script>
                        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/sparklines/sparklines-demo.js"></script>

                        <!-- Flot charts -->

  

                        <!-- PieGage charts -->

                        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/piegage/piegage.js"></script>
                        <script type="text/javascript" src="<?php echo base_url(''); ?>assets/widgets/charts/piegage/piegage-demo.js"></script>

                         
               