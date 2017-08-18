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

    this.SaveProfile = function(FirstName,MiddleName,LastName,NickName,PhotoPicture,IdCompany,items) {
        var url="http://localhost/idcard/index.php/api/save_profile";

        var profile = {FirstName: FirstName,MiddleName: MiddleName,LastName : LastName,NickName:NickName,IdCompany:IdCompany};


        var item_profile = angular.toJson(items);
        profile = angular.toJson(profile);
        formdata = new FormData();
        formdata.append('profile',profile);
        formdata.append('item_profile',item_profile);
        formdata.append('PhotoPicture', PhotoPicture);
        var request = $http.post(url,formdata,{
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        });
       return request;

    };

    this.GetCardsCompany = function(IdCompany){
        var url="http://localhost/idcard/index.php/api/get_cards_company";
        var request = $http({
            method: "POST",
            url: url,
            data: {IdCompany : IdCompany}
        });
        return request;

    }


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
    var template_url="http://localhost/idcard/index.php/template";
    $routeProvider.when("/",{
        templateUrl :template_url+"/menu_admin"
    }).when("/login",{
        templateUrl : template_url+"/login"
    }).when("/admin",{
        templateUrl :template_url+"/menu_admin"
    }).when("/admin_change_password",{
        templateUrl :template_url+"/change_password"
    }).when("/add_company",{
        templateUrl :template_url+"/add_company"
    }).when("/list_company",{
        templateUrl :template_url+"/list_company"
    }).when("/company/:IdCompany",{
        templateUrl :template_url+"/company",
        controller : 'ViewCompanyController'
    }).when("/edit_company/:IdCompany",{
        templateUrl :template_url+"/edit_company",
        controller : 'EditCompanyController'
    }).when("/add_profile/:IdCompany",{
        templateUrl : template_url+"/add_profile",
        controller : 'AddProfileController'
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