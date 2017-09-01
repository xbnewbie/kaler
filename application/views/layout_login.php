

<div class="login-content" ng-controller="MainController">
    <!-- Login -->
    <div class="lc-block toggled" id="l-login">
        <div class="lcb-form">
            <div class="login-logo" ng-click="startSpin()">
                <div class="sp-login">
                    <img src="" alt="">
                </div>
            </div>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="text" name="username" ng-model="username"  class="form-control" placeholder="Username">
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                <div class="fg-line">
                    <input type="password" name="password" ng-model="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <button class="btn bgm-orange waves-effect btn-login" id="btn-login" type="button" ng-click="login(username,password)">Login</button>

            <!-- <a href="" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></a> -->
        </div>
    </div>
</div>
<span us-spinner="{radius:30, width:8, length: 16}" spinner-key="spinner-1"></span>




