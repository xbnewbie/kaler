var app = angular.module('myApp',["ngRoute","ngCookies"]);



app.config(function ($routeProvider) {
    $routeProvider.when("/",{
        templateUrl :"application/views/layout_admin.html"
    }).when("/login",{
        templateUrl : "application/views/layout_login.html"
    }).when("/admin",{
        templateUrl :"application/views/layout_admin.html"
    }).when("/add_company",{
        templateUrl :"application/views/add_company.html"
    })
        .otherwise({
        template : "Not found"
    })
});

app.factory('auth',function () {
    var user;
    return{
        setUser  : function (u) {
            user=u;
        },isLoggedIn :function () {
            return (user)? user: false;
        }
    }

});



app.run(['$rootScope', '$location','$cookies','auth', function ($rootScope, $location,$cookies,auth) {
    $rootScope.$on('$routeChangeStart', function (event) {

        var AuthKey = $cookies.get("Authkey");
        var IdAppUser = $cookies.get("IdAppUser");
        var UserName  = $cookies.get("UserName");
        var user = {AuthKey : AuthKey,IdAppUser : IdAppUser,UserName : UserName};
        if(AuthKey){
            auth.setUser(user);
        }
       if(!auth.isLoggedIn()){
           console.log("not login");
           $location.path('/login');
       }else{
           console.log("loggedin");
       }

    });
}]);

app.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function(){
                scope.$apply(function(){
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);