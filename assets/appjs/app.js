
/**
 * Created by My Computer on 8/19/2017.
 */

'use strict';
var app = angular.module('myApp',["ngRoute","ngCookies",'ui.bootstrap','ngSanitize', 'ui.select','ngAnimate','angularSpinner']);
app.urlWebService ="http://172.20.10.3/idcard";
app.urlTemplate   ="http://172.20.10.3/idcard/template";

app.factory('auth',function () {
    var user;
    return{
        setUser  : function (u) {
            user=u;
        },isLoggedIn :function () {
            return (user)? user: false;
        },getUser :function () {
            return user;
        }
    }

});


app.run(['$rootScope', '$location','$cookies','auth','$route', function ($rootScope, $location,$cookies,auth,$route) {


    $rootScope.$on('$routeChangeStart', function (event,current,pre) {
        //is publik akses

        if(current.$$route.publicAccess==false){
            var AuthKey = $cookies.get("Authkey");
            var IdAppUser = $cookies.get("IdAppUser");
            var UserName  = $cookies.get("UserName");
            var UserNick = $cookies.get("UserNick");
            var user = {AuthKey : AuthKey,IdAppUser : IdAppUser,UserName : UserName,"UserNick" : UserNick};
            console.log("cek Login");
            if(AuthKey){
                auth.setUser(user);
            }

            if(!auth.isLoggedIn()){
                console.log("not login");
                $location.path('/login');
            }else{
                console.log("loggedin");
            }
        }else{
            console.log("publik akses");
        }




    });
}]);
app.config(['$compileProvider', function ($compileProvider) {
    $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|whatsapp|tg|callto|file|sms|tel):/);
}]);

//
// fileChange directive because ng-change doesn't work for file inputs.
//
app.directive('fileChange', function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            element.bind('change', function() {
                scope.$apply(function() {
                    scope[attrs['fileChange']](element[0].files);
                })
            })
        },
    }
});


