var app = angular.module('myApp',["ngRoute","ngCookies"]);


app.factory('Services', function($q, $rootScope,$http) {

    this.submitCompany = function(CompanyName,CompanyLogo) {
        var url="http://localhost/idcard/index.php/api/add_company";
        var deferred = $q.defer(),
            formdata = new FormData(),
            xhr = new XMLHttpRequest();
        formdata.append('CompanyName',CompanyName);
        formdata.append('CompanyLogo', CompanyLogo);
        xhr.onreadystatechange = function(r) {
            if (4 === this.readyState) {
                if (xhr.status == 200) {
                    $rootScope.$apply(function() {
                        deferred.resolve(xhr);
                    });
                } else {
                    $rootScope.$apply(function() {
                        deferred.reject(xhr);
                    });
                }
            }
        }
        xhr.open("POST", url, true);
        xhr.send(formdata);
        return deferred.promise;
    };

    this.editCompany = function(IdCompany,CompanyName,CompanyLogo) {
        var url="http://localhost/idcard/index.php/api/edit_company";
        var deferred = $q.defer(),
            formdata = new FormData(),
            xhr = new XMLHttpRequest();
        formdata.append('IdCompany',IdCompany);
        formdata.append('CompanyName',CompanyName);
        formdata.append('CompanyLogo', CompanyLogo);
        xhr.onreadystatechange = function(r) {
            if (4 === this.readyState) {
                if (xhr.status == 200) {
                    $rootScope.$apply(function() {
                        deferred.resolve(xhr);
                    });
                } else {
                    $rootScope.$apply(function() {
                        deferred.reject(xhr);
                    });
                }
            }
        }
        xhr.open("POST", url, true);
        xhr.send(formdata);
        return deferred.promise;
    };


    this.GetCompany = function (IdCompany) {
        var request = $http({
            method: "POST",
            url: "http://localhost/idcard/index.php/api/view_company",
            data: {IdCompany: IdCompany}
        });
       return request;
    }
    this.GetListCompany = function () {
       var request= $http({
            method : "GET",
            url :"http://localhost/idcard/index.php/api/list_company"});
        return request;
    }

    this.Login = function (u,p) {
     var request=   $http({
            method : "POST",
            url :"http://localhost/idcard/index.php/user/login",
            data : {UserName  : u,UserPass : p}

        });
     return request;

    }




    return this;
})




app.config(function ($routeProvider) {
    $routeProvider.when("/",{
        templateUrl :"application/views/layout_admin.html"
    }).when("/login",{
        templateUrl : "application/views/layout_login.html"
    }).when("/admin",{
        templateUrl :"application/views/layout_admin.html"
    }).when("/admin_change_password",{
        templateUrl :"application/views/admin_change_password.html"
    }).when("/add_company",{
        templateUrl :"application/views/add_company.html"
    }).when("/list_company",{
        templateUrl :"application/views/list_company.html"
    }).when("/company/:IdCompany",{
        templateUrl :"application/views/company.html",
        controller : 'ViewCompanyController'
    }).when("/edit_company/:IdCompany",{
        templateUrl :"application/views/edit_company.html",
        controller : 'EditCompanyController'
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
        },getUser :function () {
            return user;
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
})