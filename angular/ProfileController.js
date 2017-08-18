/**
 * Created by My Computer on 8/18/2017.
 */

app.controller('AddProfileController',['$scope','$routeParams','$location' ,'$http', 'Services',function ($scope,$routeParams,$location ,$http, Services) {
    var self = $scope;
    self.fileInputSelected=[];
    self.choices = [];
    self.inputs=[];

    self.addNewChoice = function() {
        var newItemNo = self.choices.length+1;
        self.choices.push({'id':self.item});
    };

    //update item
    self.change = function (input) {
        if(self.isDuplicate(input.item)){
            console.log('Duplicate item');
            return;
        }
        self.inputs[input.$index] = input.item;
       self.choices[input.$index].id = input.item;
    }

    self.removeChoice = function() {
        var lastItem = self.choices.length-1;
        self.choices.splice(lastItem);
    };
    self.isDuplicate = function (itemToCek) {
        for(var i=0;i<self.choices.length;i++){
            if(self.choices[i].id == itemToCek){
                return true;
            }
        }
    }

    var IdCompany = $routeParams.IdCompany;
    Services.GetCompany($routeParams.IdCompany).then(function success(response) {
        var result = response.data;
        self.company = result.data;
        self.CompanyName = self.company.CompanyName;
        self.CompanyLogo = self.company.CompanyLogo;
        self.IdCompany  = self.company.IdCompany;
    }),function failed(response) {
        console.log("Something wrong " + response);
    };

    self.SaveProfile = function () {
       var x= Services.SaveProfile(self.FirstName,self.MiddleName,self.LastName,self.NickName,self.fileInputSelected[0],$routeParams.IdCompany, self.choices);
            x.then(function sukses(response) {
                console.log(response);
            }),function failed(response) {
                console.log(response);
            }

    }
    
    self.dump=function () {
        console.log(self.choices);
    }

    self.fileNameChanged = function (ele) {
        var files = ele.files;
        var l = files.length;

            self.fileInputSelected[0] =files[0];

    }
    




}])