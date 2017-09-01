<!--
<div ng-controller="CompanyController">

        <input type="text" ng-model="CompanyName" name="CompanyName">
    <input type="text" ng-model="Address" name="Address">
    <input type="file" multiple onchange="angular.element(this).scope().fileNameChanged(this)"/>
      <button ng-click="add()">Add Company</button>
</div>
-->



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




<div ng-controller="CompanyController">


<section id="main">
    <section id="content" class="content-alt">
        <div class="container m-t-20">
            <div class="block-header">
                <h2>Add New Company</h2>
                <div class="row m-t-20">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <p>Company Logo</p>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="fileinput fileinput-new m-20" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div class="m-t-20">
                                                    <span class="btn btn-info btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <input type="file"  multiple onchange="angular.element(this).scope().fileNameChanged(this)">
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
                        <div class="card pad-b-51">
                            <div class="card-header">
                                <p>Company Information</p>
                            </div>
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <div class="fg-line">
                                        <strong class="f-12">Company Name</strong>
                                        <input type="text" class="form-control f-14" id="" ng-model="CompanyName" name="CompanyName" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fg-line">
                                        <strong class="f-12">Company Address</strong>
                                        <textarea class="form-control f-14 m-t-5" ng-model="Address" name="Address" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning waves pull-right p-btn" ng-click="add()">Save</button>
                        <button class="btn btn-link waves pull-right p-btn">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



</div>