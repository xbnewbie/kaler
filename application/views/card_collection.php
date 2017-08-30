<header ng-controller="MainController"  id="header" class="clearfix" data-ma-theme="bluepurple"> <!-- Make sure to change both class and data-current-skin when switching sking manually -->
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
                    <p class="m-r-20">FB Name</p>
                </li>
                <li>

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

<section id="main" ng-controller="CardCollectionController as ctrl" class="cardhome">



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

            </ul>
        </div>


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
                                    Card Collection
                                </div>
                            </div>
                            <div class="col-xs- col-sm-8 col-md-7">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <!--<ul class="actions">
                            <li>
                                <button ng-click="ctrl.button_add()" data-toggle="modal" href="#modalDefault" class="btn bgm-green btn-icon waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="row m-t-70">

                <div ng-repeat="card in cards">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="s-profile">
                                    <div class="sp-pic">
                                        <img src="uploads/users/{{card.PhotoProfile}}" alt="">
                                    </div>
                                </div>
                                <div class="card-header text-center">
                                    <h2>
                                        {{card.FirstName}} {{card.MiddleName}} {{card.LastName}}
                                        <small>     {{card.Label}}</small>
                                    </h2>
                                </div>

                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="card-address">
                                                <strong>{{card.CompanyName}}</strong><br>
                                                <small>{{card.Address}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="card-iconic">
                                                <div class="dropdown">

                                                    <!-- Single button -->
                                                    <div class="btn-group" uib-dropdown is-open="status.isopen">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled">
                                                            SHARE <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" uib-dropdown-menu role="menu" aria-labelledby="single-button">
                                                            <li><a href="#">WhatsApp</a></li>
                                                            <li><a href="#">Email</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="card-iconic">
                                                <!-- <a class="clearlink" href="" ng-click="ctrl.preview()"><p>PREVIEW</p></a>-->
                                                <button type="button" ng-click="preview(card.NickName)" class="btn btn-info" ng-model="singleModel" uib-btn-checkbox>
                                                    DETAIL
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

            <!-- modal -->




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

<script src="assets/js/app.min.js"></script>
