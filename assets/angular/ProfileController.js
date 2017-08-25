/**
 * Created by My Computer on 8/18/2017.
 */

app.controller('AddProfileController',['$scope','$routeParams','$location' ,'$http', 'Services',function ($scope,$routeParams,$location ,$http, Services) {
    var self = $scope;
    self.fileInputSelected=[];
    self.choices = [];
    self.inputs=[];



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

}]);

/**
 * Created by My Computer on 8/18/2017.
 */

app.controller('EditProfileController',['$scope','$routeParams','$location' ,'$http', 'Services',function ($scope,$routeParams,$location ,$http, Services) {
    var self = $scope;
    self.fileInputSelected=[];
    self.choices = [];
    self.inputs=[];
    self.card=[];
    self.IdCompany="";
    self.FirstName="";
    self.MiddleName="";
    self.LastName="";
    self.NickName = $routeParams.NickName;


    Services.GetCardByNickName(self.NickName).then(function success(response) {
        var result = response.data;
        self.card = result.data;
        self.IdCompany = self.card.IdCompany;
        self.FirstName = self.card.FirstName;
        self.MiddleName= self.card.MiddleName;
        self.LastName  = self.card.LastName;
        self.IdProfile = self.card.IdProfile;

        //get company
        var IdCompany = self.IdCompany;
        console.log("debug" + self.FirstName);
        Services.GetCompany(self.IdCompany).then(function success(res) {
            var result = res.data;
            self.company = result.data;
            console.log(result);

            self.CompanyName = self.company.CompanyName;
            self.CompanyLogo = self.company.CompanyLogo;
            self.IdCompany  = self.company.IdCompany;

            //get_item_profile
            Services.GetItemProfile(self.IdProfile).then(function success(r) {
                 var result = r.data;
                 self.item_profile = result.data;
                 for( i=0;i<self.item_profile.length;i++){
                    // self.inputs[0] = "kolak";
                            console.log(self.item_profile[i].KodeCategory);
                      self.choices.push({'id':self.item_profile[i].KodeCategory,'key':self.item_profile[i].KodeCategory,'value':self.item_profile[i].Label});
                 }
            }),function failed(r){
                console.log("Something wrong " + r);
            }

        }),function failed(res) {
            console.log("Something wrong " + res);
        };



    }),function failed(response) {
            toastr.error("Error 94");
    }





    self.EditProfile = function () {
        console.log("td" + self.IdCompany);
        var x= Services.EditProfile(self.IdProfile,self.FirstName,self.MiddleName,self.LastName,self.NickName,self.fileInputSelected[0],self.IdCompany, self.choices);
        x.then(function sukses(response) {


            if(response.data.status==true){
                toastr.info("sukses update");
            }else{
                toastr.error("Failed update");
            }
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
        console.log(input);

        self.choices[input.$index].key = input.item;
        self.choices[input.$index].id = input.item;
    }
    
    self.ganti = function () {
        var current = this.item;
        console.log(current);
    }

    self.removeChoice = function() {
        var lastItem = self.choices.length-1;
        self.choices.splice(lastItem);
    };
    self.isDuplicate = function (itemToCek) {
       /* for(var i=0;i<self.choices.length;i++){
            console.log("checking " );
            console.log(self.choices[i]);
            if(self.choices[i].id == itemToCek){
                return true;
            }
        }*/
    }

}])
