
<!--<div ng-controller="EditProfileController">
    Company Name {{CompanyName}} {{IdProfile}} <br>
    Id Company<input type="text" ng-model="IdCompany" value="{{IdCompany}}"><hr>
    First Name    <input type="text" ng-model="FirstName"> <br>
    Midle Name    <input type="text" ng-model="MiddleName"> <br>
    Last Name    <input type="text" ng-model="LastName"> <br>
    Nick Name    <input type="text" ng-model="NickName"> <br>
    Id Profile  <input type="text" ng-model="IdProfile">
    <hr>
    <input type="file" ng-model="profile_picture" onchange="angular.element(this).scope().fileNameChanged(this)">
    <hr>
    item
    <hr>



    <fieldset  data-ng-repeat="choice in choices">
        <select ng-model="choice.key" ng-change="update(this)">
            <?php
/*            foreach($item_category as $item){
                $kode = $item->Kode;
                echo "<option>$kode </option>";
            }
            */?>
        </select>
        <input type="text" ng-model="choice.value" name="" placeholder="Enter {{choice.id}}">

        <button class="remove" ng-show="$last" ng-click="removeChoice()">-</button>
        <button class="addfields" ng-show="$last" ng-click="addNewChoice()">+</button>
    </fieldset>

    <button class="addfields" ng-click="addNewChoice()">Add fields</button>
    <button class="addfields" ng-click="dump()">Dump fields</button>

    <button class="addfields" ng-click="EditProfile()">Save ID card</button>
    <div id="choicesDisplay">
        {{ choices }}
    </div>

{{item_profile}}


</div>-->



<header id="header" ng-controller="MainController" class="clearfix" data-ma-theme="bluepurple">
    <ul class="h-inner clearfix">

        <li class="hi-logo">
            <a href="index.html">Openmind Bussiness</a>
        </li>

        <li class="pull-right">
            <ul class="hi-menu">
                <li>
                    <p class="m-r-20">{{UserNick}}</p>
                </li>
                <li>
                    <button  ng-click="logout()" class="btn btn-primary bgm-red m-t-5">Logout</button>
                </li>
            </ul>
        </li>
    </ul>
</header>

<section id="main">
    <section id="content" class="content-alt">
        <div class="container m-t-20">
            <div class="block-header">
                <h2>Create New Card</h2>
                <div class="row m-t-20">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <p>Company Information</p>
                            </div>
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Company Name</strong>
                                        <input type="text" class="form-control f-14" id="" value="{{company.CompanyName}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Company Address</strong>
                                        <textarea class="form-control f-14 m-t-5" disabled>G{{company.Address}}</textarea>
                                        <input type="hidden" name="IdCompany" value="{{company.IdCompany}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <p>Profil Photo</p>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="fileinput fileinput-new m-20" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"> <img src="uploads/users/{{card.PhotoProfile}}"></div>
                                        <div class="m-t-20">
                                                    <span class="btn btn-info btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <input type="file" type="file" ng-model="profile_picture" onchange="angular.element(this).scope().fileNameChanged(this)">
                                                    </span>
                                            <a href="#" class="btn btn-danger fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <p>Employee Information</p>
                            </div>
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="fg-line disabled">
                                                <strong class="f-12">First Name</strong>
                                                <input type="text" class="form-control f-14" ng-model="FirstName" value="Alderina Fernando">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fg-line disabled">
                                                <strong class="f-12">Middle Name</strong>
                                                <input type="text" class="form-control f-14" ng-model="MiddleName" value="Alderina Fernando">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fg-line disabled">
                                                <strong class="f-12">Last Name</strong>
                                                <input type="text" class="form-control f-14" ng-model="LastName" value="Alderina Fernando">
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Job Description</strong>
                                        <input type="text" class="form-control f-14" ng-model="job" value="Senior UI/UX Development">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Phone</strong>
                                        <input type="text" class="form-control f-14" ng-model="phone" value="transportation@ge.co" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Mail</strong>
                                        <input type="text" class="form-control f-14" ng-model="email" value="transportation@ge.co" placeholder="@">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Facebook</strong>
                                        <input type="text" class="form-control f-14" ng-model="facebook" value="transportation@ge.co" placeholder="insert username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Twitter</strong>
                                        <input type="text" class="form-control f-14" ng-model="twitter" value="transportation@ge.co" placeholder="insert username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">linkedin</strong>
                                        <input type="text" class="form-control f-14" ng-model="linkedin" value="transportation@ge.co" placeholder="insert username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">WhatsApp</strong>
                                        <input type="text" class="form-control f-14" ng-model="whatsapp" value="transportation@ge.co">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line disabled">
                                        <strong class="f-12">Telegram</strong>
                                        <input type="text" class="form-control f-14" ng-model="telegram" value="transportation@ge.co">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button class="btn btn-warning waves pull-right p-btn" ng-click="EditProfile()">Next</button>
                        <button class="btn btn-link waves pull-right p-btn">Cancel</button>
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