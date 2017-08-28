<header id="header" class="clearfix" data-ma-theme="bluepurple" ng-controller="AddProfileController">
    <ul class="h-inner clearfix">

        <li class="hi-logo">
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
            </ul>
        </li>
    </ul>
</header>

<section id="main">
    <section id="content" class="content-alt">
        <div class="container">
            <div class="block-header">
                <h2>Choose Card Template</h2>
            </div>
            <div class="row m-t-70">
                <div class="col-xs-12 col-sm-6 col-md-4 tmp-choosen">
                    <div class="card-template" ng-click="create_card(1)">
                        <p class="m-30">Company name</p>
                        <div class="card-holder">
                            <div class="card">
                                <div class="card-body">
                                    <div class="s-profile">
                                        <div class="sp-pic">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <div class="card-header text-center">
                                        <h2>
                                            Your Name
                                            <small>Position</small>
                                        </h2>
                                    </div>
                                    <div class="container">
                                        <p class="text-center">Contact Info</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="option">
                        <div class="option-header">
                            <h2>Professional Card</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tmp-choosen">
                    <div class="card-template" ng-click="create_card(2)">
                        <p class="m-30">Company name</p>
                        <div class="card-holder-long">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="s-profile">
                                                    <div class="sp-pic">
                                                        <img src="" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-header text-center">
                                                    <h2>
                                                        Your Name
                                                        <small>Position</small>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <p class="text-center">Contact Info</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="option">
                        <div class="option-header">
                            <h2>Long Card</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tmp-choosen">
                    <div class="card-template" ng-click="create_card(3)">
                        <p class="p-30">Company name</p>
                        <div class="card-holder">
                            <div class="m-t-30">
                                <div class="card-body">
                                    <div class="card-header text-center">
                                        <h3>
                                            Your Name<br>
                                            <small>Position</small>
                                        </h3>
                                    </div>
                                    <div class="container">
                                        <p class="text-center">Contact Info</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="option">
                        <div class="option-header">
                            <h2>Basic Plain Card</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Javascript Libraries -->
<script src="assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="assets/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="assets/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
<script src="assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
<script src="assets/vendors/summernote/dist/summernote-updated.min.js"></script>


<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="assets/vendors/bower_components/chosen/chosen.jquery.js"></script>
<script src="assets/vendors/fileinput/fileinput.min.js"></script>
<script src="assets/vendors/input-mask/input-mask.min.js"></script>
<script src="assets/vendors/farbtastic/farbtastic.min.js"></script>