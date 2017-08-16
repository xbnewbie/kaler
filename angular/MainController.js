/**
 * Created by My Computer on 8/16/2017.
 */
app.controller('MainController',function ($scope,$location,$http,$cookies,auth) {
    $scope.version="1.6.4";
    $scope.status_message ="";


    $scope.login = function(u,p){
        if(u==null || p ==null){
            $scope.status_message ="username and password required";
            console.log($scope.status_message);
            return;
        }
        $http({
            method : "POST",
            url :"http://localhost/idcard/index.php/user/login",
            data : {UserName  : u,UserPass : p}

        }).then(function (response) {
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
    
    $scope.logout = function () {
        console.log("clicked");
        $cookies.put("Authkey","");
        $cookies.put("IdAppUser");
        $cookies.put("UserName");
        auth.setUser(null);
        $location.path('/');


    }
})

app.controller("CompanyController",function ($scope,$location,$http,$cookies,auth){
    $scope.url_add_company ="http://localhost/idcard/index.php/company/add_company";
$scope.add_company =function (CompanyName,CompanyLogo) {
    var fd = new FormData();
    fd.append('CompanyLogo', CompanyLogo);
    fd.append('CompanyName',CompanyName);
    $http({
        method : "POST",
        url :"http://localhost/idcard/index.php/company/add_company",
        data : fd ,
        headers: { 'Content-Type': 'multipart/form-data' },

    }).then(function (response) {
        console.log("response "+response.data);



    },function(response) {
        console.log("error " +response);
    })


}
})