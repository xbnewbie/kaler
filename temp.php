<html lang="en">
<head>
    <!-- angular-->
    <script type="text/javascript" src="assets/angular/angular.min.js"></script>
    <script type="text/javascript" src="assets/angular/angular-route.js"></script>
    <script type="text/javascript" src="assets/angular/angular-cookies.js"></script>

    <!-- angular lib -->
    <script src="assets/angular/angular-sanitize.js"></script>
    <script src="assets/bower_components/angular-ui-select/dist/select.js"></script>
    <!-- Javascript Libraries -->
    <script src="assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/ui-bootstrap-tpls.js"></script>
    <script src="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="assets/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="assets/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="assets/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
    <script src="assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="assets/vendors/summernote/dist/summernote-updated.min.js"></script>
    <!-- Vendor CSS -->
    <link href="assets/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/nouislider/distribute/nouislider.min.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="assets/vendors/farbtastic/farbtastic.css" rel="stylesheet">
    <link href="assets/vendors/bower_components/chosen/chosen.css" rel="stylesheet">
    <link href="assets/vendors/summernote/dist/summernote.css" rel="stylesheet">

    <link href="assets/bower_components/angular-ui-select/dist/select.css" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/app_1.min.css" rel="stylesheet">
    <link href="assets/css/app_2.min.css" rel="stylesheet">
    <link href="assets/css/over.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
    <script src="assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->
    <script src="assets/vendors/bower_components/chosen/chosen.jquery.js"></script>
    <script src="assets/vendors/fileinput/fileinput.min.js"></script>
    <script src="assets/vendors/input-mask/input-mask.min.js"></script>
    <script src="assets/vendors/farbtastic/farbtastic.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <link rel="stylesheet" href="assets/css/toastr.min.css">



</head>
<html lang="en">
<head>



</head>

<header id="header" class="clearfix" data-ma-theme="bluepurple"> <!-- Make sure to change both class and data-current-skin when switching sking manually -->
    <ul class="h-inner clearfix">
        <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>

        <li class="hi-logo hidden-xs">
            <a href="index.html">Openmind Bussiness</a>
        </li>

        <li class="pull-right">
            <ul class="hi-menu">
                <li>
                    <p class="m-r-20">Brevy M Prabowo</p>
                </li>
                <li>
                    <button class="btn btn-primary bgm-red m-t-5">Logout</button>
                </li>
                <!--  <li>
                     <div class="s-profile">
                         <a>
                             <div class="sp-pic">
                                 <img src="img/profile-pics/1.jpg" alt="">
                             </div>
                         </a>
                     </div>
                 </li> -->
            </ul>
        </li>
    </ul>
</header>

<section id="main">
    <!-- Mobile Menu -->
    <aside id="sidebar" class="sidebar sidebar-alt c-overflow">
        <div class="s-profile">
            <a href="" data-ma-action="profile-menu-toggle">
                <div class="sp-pic">
                    <img src="assets/img/profile-pics/1.jpg" alt="">
                </div>

                <div class="sp-info">
                    Malinda Hollaway

                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </a>

            <ul class="main-menu">
                <li>
                    <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                </li>
            </ul>
        </div>

        <ul class="main-menu">
            <li class="active">
                <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                <ul>
                    <li><a href="textual-menu.html">Textual menu</a></li>
                    <li><a href="image-logo.html">Image logo</a></li>
                    <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                </ul>
            </li>
            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Widgets</a>

                <ul>
                    <li><a href="widget-templates.html">Templates</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li><a href="tables.html">Normal Tables</a></li>
                    <li><a href="data-tables.html">Data Tables</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-components.html">Form Components</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validations.html">Form Validation</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="animations.html">Animations</a></li>
                    <li><a href="box-shadow.html">Box Shadow</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="preloaders.html">Preloaders</a></li>
                    <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="other-components.html">Others</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts</a>
                <ul>
                    <li><a href="flot-charts.html">Flot Charts</a></li>
                    <li><a href="other-charts.html">Other Charts</a></li>
                </ul>
            </li>
            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                <ul>
                    <li><a href="photos.html">Default</a></li>
                    <li><a href="photo-timeline.html">Timeline</a></li>
                </ul>
            </li>

            <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                <ul>
                    <li><a href="profile-about.html">Profile</a></li>
                    <li><a href="list-view.html">List View</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="pricing-table.html">Pricing Table</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="wall.html">Wall</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="login.html">Login and Sign Up</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">Error 404</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                <ul>
                    <li><a href="form-elements.html">Level 2 link</a></li>
                    <li><a href="form-components.html">Another level 2 Link</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle">I have children too</a>

                        <ul>
                            <li><a href="">Level 3 link</a></li>
                            <li><a href="">Another Level 3 link</a></li>
                            <li><a href="">Third one</a></li>
                        </ul>
                    </li>
                    <li><a href="form-validations.html">One more 2</a></li>
                </ul>
            </li>
            <li>
                <a href="https://wrapbootstrap.com/theme/material-admin-responsive-angularjs-WB011H985"><i class="zmdi zmdi-money"></i> Buy this template</a>
            </li>
        </ul>
    </aside>
    <!-- End Mobile Menu -->

    <section id="content" class="content-alt">
        <div class="container m-t-20">
            <div class="block-header">
                <!-- <h2>Dashboard</h2> -->
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xs-6">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-2">
                                <div class="s-logo">
                                    <div class="sp-pic">
                                        <img src="assets/img/profile-pics/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs- col-sm-8 col-md-7">
                                <div class="card">
                                    <div class="card-body select-padding">
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <div class="select">
                                                    <select class="selectpicker f-14" data-live-search="true">
                                                        <option data-tokens="malayasia" value="">Emirates Airways</option>
                                                        <option data-tokens="malayasia1" value="">GE Transportation Ltd</option>
                                                        <option data-tokens="malayasia2" value="">EPSON Mobile Ltd</option>
                                                        <option data-tokens="malayasia3" value="">PT. Gudang Garam Tbk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="actions">
                            <li>
                                <button data-toggle="modal" href="#modalDefault" class="btn bgm-green btn-icon waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row m-t-70">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Alexa Soong Feen
                                    <small>General Manager</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            1192
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    John Kurt Schneider
                                    <small>UX Research Manager</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            2041
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Gerrard Maximillan
                                    <small>Research Development</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            792
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Katharin Helda
                                    <small>Senior Public Relations</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            5101
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Anthony Dean Caroll
                                    <small>Front-end Development</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            575
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Sita Andriana
                                    <small>IxD Lead Manager</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            1413
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="s-profile">
                                <div class="sp-pic">
                                    <img src="assets/img/profile-pics/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <h2>
                                    Luis Filipe Carolita
                                    <small>Senior Programmer</small>
                                </h2>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Edit Card"><i class="fa fa-vcard-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#" data-toggle="tooltip"
                                               data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 views">
                                        <h2 class="text-center">
                                            1332
                                            <small>Views</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown">SHARE</a>
                                                <ul class="dropdown-menu dm-icon" role="menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-comment-more"></i> Message</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-email"></i> E-Mail</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="zmdi zmdi-whatsapp"></i> WhatsApp</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-telegram" aria-hidden="true"></i>Telegram</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card-iconic">
                                            <a class="clearlink" href="#"><p>PREVIEW</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create New</h4>
                        </div>
                        <div class="modal-body text-center m-t-30">
                            <div class="col-md-6">
                                <i class="zmdi zmdi-developer-board ico-lg"></i>
                                <h4>Create New Company</h4>
                                <button type="button" class="btn btn-primary bgm-orange waves-effect m-30" data-dismiss="modal">Choose
                                </button>
                            </div>
                            <div class="col-md-6">
                                <i class="zmdi zmdi-account-box-o ico-lg"></i>
                                <h4>Create New Card</h4>
                                <button type="button" class="btn btn-primary bgm-orange waves-effect m-30" data-dismiss="modal">Choose
                                </button>
                            </div>
                        </div>
                        <div class="modal-footer m-t-30">
                            <!-- <button type="button" class="btn btn-link waves-effect">Next</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- <footer id="footer">
    Copyright &copy; 2015 Material Admin

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</footer> -->

<!-- Page Loader -->


<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->










<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="assets/vendors/bower_components/chosen/chosen.jquery.js"></script>
<script src="assets/vendors/fileinput/fileinput.min.js"></script>
<script src="assets/vendors/input-mask/input-mask.min.js"></script>
<script src="assets/vendors/farbtastic/farbtastic.min.js"></script>


