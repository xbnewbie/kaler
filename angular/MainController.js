/**
 * Created by My Computer on 8/16/2017.
 */
app.controller('MainController',function ($scope,$location,$http,$cookies,auth,Services) {
    $scope.version="1.6.4";
    $scope.status_message ="";


    $scope.login = function(u,p){
        if(u==null || p ==null){
            $scope.status_message ="username and password required";
            console.log($scope.status_message);
            return;
        }
        Services.Login(u,p).then(function (response) {
            console.log(response.data);
           var result = angular.fromJson(response.data);
           if(result.status==true){
                $cookies.put("Authkey",result.AuthKey);
                $cookies.put("IdAppUser",result.IdAppUser);
                $cookies.put("UserName",result.UserName);
                var user = {AuthKey : result.AuthKey,IdAppUser : result.IdAppUser,UserName : result.UserName};
                auth.setUser(user);
                $location.path('/admin');
           }else{
               console.log("Incorret login");
               $scope.status_message="Login Inccoret";
           }
        },function(response) {
                console.log("error " +response);
        })
    }
    $scope.change_password = function (old_password,new_password,retype_new_password) {
        if(new_password != retype_new_password){
            console.log("new and retype not match");
            return;
        }
        $http({
            method : "POST",
            url :"http://localhost/idcard/index.php/user/change_password",
            data : {UserName  : auth.getUser().UserName,OldPass : old_password,NewPass : new_password}
        }).then(function (response) {
            console.log(response.data);
            var result = angular.fromJson(response.data);
            if(result.status==true){
                console.log("sukses change password");
                $scope.logout();
            }else{
                console.log("Incorret login");
            }
        },function(response) {
            console.log("error " +response);
        })

    }

    
    $scope.logout = function () {
        console.log("clicked");
        $cookies.put("Authkey","");
        $cookies.put("IdAppUser");
        $cookies.put("UserName");
        auth.setUser(null);
        $location.path('index.html');


    }
})

app.controller('CompanyController', function($scope,$location ,$http, Services) {
    var namesArr =[];
    $scope.add = function() {

        var r = Services.submitCompany($scope.CompanyName, namesArr[0]);
        r.then(
            function(r) {
                // success
                console.log(r.response);
               var result = angular.fromJson(r.response);
                if(result.status==true){
                    $location.path("/list_company");
                }else{
                    console.log(r.response);
                }
            },function(r) {
                // failure
                console.log("fail "+r.response);
            });
    }

    $scope.get_company = function () {
        return "anjas";
    }

    $scope.fileNameChanged = function (ele) {
        var files = ele.files;
        var l = files.length;
        namesArr[0] = files[0];
    }

});

app.controller('EditCompanyController', function($scope,$location ,$http, Services,$routeParams) {
    var namesArr =[];
    Services.GetCompany($routeParams.IdCompany).then(function success(response) {
        var result = response.data;
        $scope.company = result.data;
        $scope.CompanyName =$scope.company.CompanyName;

    }),function failed(response) {
        console.log("Something wrong " + response);
    };
    $scope.edit = function() {
        var r = Services.editCompany($routeParams.IdCompany,$scope.CompanyName, namesArr[0]);
        r.then(
            function(r) {
                // success
                var result = angular.fromJson(r.response);
                if(result.status==true){

                   $location.path("/company/"+$routeParams.IdCompany);
                }else{
                    console.log(r.response);
                }
            },function(r) {
                // failure
                console.log("fail "+r.response);
            });
    }
    $scope.fileNameChanged = function (ele) {
        var files = ele.files;
        var l = files.length;
        for(var i=0;i<l;i++){
            namesArr.push(files[i]);
        }
    }

});



app.controller("ListCompany",function($scope,$location ,$http, Services) {
 Services.GetListCompany().then(function success(response) {
     var result = angular.fromJson(response.data);
     if(result.status==true){
         $scope.list_company = result.data;
     }else{
         console.log("Incorret login");
     }
 }),function failed(response) {
     console.log("Something wrong " + response);
 }
})

app.controller("ViewCompanyController",function($scope,$location ,$http,  $routeParams,Services) {
    var IdCompany = $routeParams.IdCompany;
     Services.GetCompany($routeParams.IdCompany).then(function success(response) {
         var result = response.data;
         $scope.company = result.data;
     }),function failed(response) {
        console.log("Something wrong " + response);
     };
 

})
