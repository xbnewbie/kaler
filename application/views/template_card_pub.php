<div class="card-bg" ng-controller="ViewCardController">
<section id="main-card">
    <div class="container">
        <div class="block-header margin-publik">
            <div class="row margin">
                <div class="col-sm-6 col-md-6 col-xs-7">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="s-logo">
                                <div class="sp-pic">
                                    <img src="uploads/company/{{company.CompanyLogo}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-6">
                            <h4 class="c-white">{{company.CompanyName}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-5">

                    <ul class="h-inner-publik">
                        <li class="pull-right ico-md">
                            <ul class="hi-menu"  uib-dropdown on-toggle="toggled(open)">

                            <li>
                                        <a href="{{vcfurl}}" class="clearlink" data-toggle="tooltip" data-placement="bottom" title="Save Contact" style=" text-decoration: none;"><i class="zmdi zmdi-download"></i></a>

                                    </li>
                                   <li>
                                       <a href="" class="clearlink" data-toggle="tooltip" data-placement="bottom" title="Share" uib-dropdown-toggle>
                                           <i class="zmdi zmdi-share"></i>
                                       </a>
                                   </li>

                                    <ul class="dropdown-menu" uib-dropdown-menu aria-labelledby="simple-dropdown">
                                        <li>
                                            <a href="whatsapp://send?text={{urlShare}}" data-action="share/whatsapp/share">WhatsApp</a>
                                        </li>
                                        <li>
                                            <a href="tg://msg_url?url={{urlShare}}"">Telegram</a>
                                        </li>
                                    </ul>




                            </ul>
                        </li>
                    </ul>


                </div>
            </div>

        </div>
        <div class="card-bussiness">
            <div class="card">
                <div class="card-body">
                    <div class="s-profile">
                        <div class="sp-pic-publik">
                            <img src="uploads/users/{{card.PhotoProfile}}" alt="">
                        </div>
                    </div>
                    <div class="card-title-publik text-center">
                        <h2>
                          {{card.FirstName}} {{card.MiddleName}} {{card.LastName}}
                            <small>{{card.Label}}</small>
                        </h2>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-address">
                                    <strong>{{company.CompanyName}}</strong><br>
                                    <small>{{company.address}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="callto:{{profiles.phone}}" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="Phone"><i class="zmdi zmdi-phone"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="mailto:{{profiles.email}}" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="Email"><i class="zmdi zmdi-email"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="https://facebook.com/{{profiles.facebook}}" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="https://twitter.com/{{profiles.twitter}}" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="https://api.whatsapp.com/send?phone={{profiles.whatsapp}}" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="WhatsApp"><i class="zmdi zmdi-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2">
                                <div class="card-iconic">
                                    <a href="#" class="clearlink" data-toggle="tooltip"
                                       data-placement="bottom" title="Telegram"><i class="fa fa-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
      