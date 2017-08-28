/**
 * Created by My Computer on 8/16/2017.
 */
app.controller('MainController',function ($scope,$location,$http,$cookies,auth,Services) {
    var self = $scope;
    var webservice_url ="http://localhost/idcard";
    self.version="0.1";
    self.status_message ="";


    self.login = function(u,p){
        if(u==null || p ==null){
            self.status_message ="username and password required";
            console.log(self.status_message);
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
                $location.path('/cardhome');
           }else{
               toastr.error("Incorret Login");
               self.status_message="Login Inccoret";
           }
        },function(response) {
                console.log("error " +response);
        })
    }
    self.change_password = function (old_password,new_password,retype_new_password) {
        if(new_password != retype_new_password){
            console.log("new and retype not match");
            return;
        }
        $http({
            method : "POST",
            url :webservice_url+"/index.php/user/change_password",
            data : {UserName  : auth.getUser().UserName,OldPass : old_password,NewPass : new_password}
        }).then(function (response) {
            console.log(response.data);
            var result = angular.fromJson(response.data);
            if(result.status==true){
                toastr.info("sukses change password");
                self.logout();
            }else{
                toastr.error("Incorret login");
            }
        },function(response) {
            console.log("error " +response);
        })

    }
    self.logout = function () {
        console.log("clicked");
        $cookies.put("Authkey","");
        $cookies.put("IdAppUser");
        $cookies.put("UserName");
        auth.setUser(null);
        $location.path('/login');


    }
})

app.controller('CompanyController', function($scope,$location ,$http, Services) {
    var self = $scope;
    var namesArr =[];
    self.add = function() {

        var r = Services.submitCompany(self.CompanyName, namesArr[0]);
        r.then(
            function(r) {
                // success
                console.log(r.response);
               var result = angular.fromJson(r.response);
                if(result.status==true){
                    $location.path("/list_company");
                }else{
                    toastr.error("Failed fetch list company");
                }
            },function(r) {
                // failure
                console.log("fail "+r.response);
            });
    }

    self.get_company = function () {
        return "anjas";
    }

    self.fileNameChanged = function (ele) {
        var files = ele.files;
        var l = files.length;
        namesArr[0] = files[0];
    }

});

app.controller('EditCompanyController', function($scope,$location ,$http, Services,$routeParams) {
    var self = $scope;
    var namesArr =[];
    Services.GetCompany($routeParams.IdCompany).then(function success(response) {
        var result = response.data;
        self.company = result.data;
        self.CompanyName =self.company.CompanyName;

    }),function failed(response) {
        console.log("Something wrong " + response);
    };
    self.edit = function() {
        var r = Services.editCompany($routeParams.IdCompany,self.CompanyName, namesArr[0]);
        r.then(
            function(r) {
                // success
                var result = angular.fromJson(r.response);
                if(result.status==true){
                    toastr.info("Success");
                   $location.path("/company/"+$routeParams.IdCompany);
                }else{
                    toastr.error("Something wrong . code 121");
                }
            },function(r) {
                // failure
                toastr.error("Web Server Error");
            });
    }
    self.fileNameChanged = function (ele) {
        var files = ele.files;
        var l = files.length;
        for(var i=0;i<l;i++){
            namesArr.push(files[i]);
        }
    }

});



app.controller("ListCompany",function($scope,$location ,$http, Services) {
    var self = $scope;
 Services.GetListCompany().then(function success(response) {
     var result = angular.fromJson(response.data);
     if(result.status==true){
         self.list_company = result.data;
     }else{
         console.log("Incorret login");
     }
 }),function failed(response) {
     console.log("Something wrong " + response);
 }
})

app.controller("ViewCompanyController",function($scope,$location ,$http,  $routeParams,Services) {
    var self = $scope;
    var IdCompany = $routeParams.IdCompany;
     Services.GetCompany($routeParams.IdCompany).then(function success(response) {
         var result = response.data;
         self.company = result.data;
     }),function failed(response) {
        console.log("Something wrong " + response);
     };

     Services.GetCardsByCompany($routeParams.IdCompany).then(function sucess(response) {
         var result = response.data.data;
          self.CompanyCards = result;
          //kok di exekusi 2x
         var timeStampInMs = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();
         console.log("called time :"+timeStampInMs, Date.now());

     }),function failed(response) {
         console.log("Failed fetch cards");
     }

    self.add_new_card =function () {
        $location.path("/add_profile/"+$routeParams.IdCompany);
    }
    
})

app.controller("ViewCardController",function ($scope,$location ,$http,  $routeParams,Services) {


    var self = $scope;
    self.urlShare =Services.getWebServiceUrl()+"/"+ $routeParams.NickName;
    self.vcfurl =Services.getWebServiceUrl()+"/index.php/vcf/generate/"+ $routeParams.NickName;
    self.NickName = $routeParams.NickName;
    self.company =[];
    console.log($location.search());
     Services.GetCardByNickName(self.NickName).then(function Success(response) {
            console.log(response);
         if (response.data.status==true){

             self.card = response.data.data;
             Services.GetItemProfile(self.card.IdProfile).then(function success(r) {
                 self.profiles = r.data.data;
                 console.log(self.profiles);

             }),function failed(r) {
                 toastr.error("Network Error 193");
             }
             Services.GetCompany(self.card.IdCompany).then(function Success(rs) {
                 self.company = rs.data.data;
             }),function failed(rs) {
                 toastr.error("Network Error 204");
             }

         }else{
             toastr.error("Please Login");
             //$location.path("/login");
         }

     }),function failed(response) {
         toastr.error("Network Error");
     }


})
