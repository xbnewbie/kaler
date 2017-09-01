


app.factory('Services', function($q, $rootScope,$http) {
    var webservice_url =app.urlWebService;
    var selectedCompany =null;
    this.getWebServiceUrl = function () {
        return webservice_url;
    }

    this.submitCompany = function(CompanyName,CompanyLogo,Address) {
        console.log(Address);
        var url=webservice_url+"/index.php/api/add_company";
        var deferred = $q.defer(),
            formdata = new FormData(),
            xhr = new XMLHttpRequest();
        formdata.append('CompanyName',CompanyName);
        formdata.append('CompanyLogo', CompanyLogo);
        formdata.append('Address',Address);
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

    this.getSelectedCompany = function(){
        return this.selectedCompany;
    }
    this.setSelectedCompany = function (IdCompany) {
        console.log("set selected company "+ IdCompany);
        this.selectedCompany = IdCompany;
    }

    this.editCompany = function(IdCompany,CompanyName,CompanyLogo) {
        var url=webservice_url+"/index.php/api/edit_company";
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

    this.SaveProfile = function(FirstName,MiddleName,LastName,NickName,PhotoPicture,IdCompany,IdTheme,items) {
        var url=webservice_url+"/index.php/api/save_profile";

        var profile = {FirstName: FirstName,MiddleName: MiddleName,LastName : LastName,NickName:NickName,IdCompany:IdCompany,IdTheme : IdTheme};


        var item_profile = angular.toJson(items);
        profile = angular.toJson(profile);
        console.log(item_profile);
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

    this.EditProfile = function(IdProfile,FirstName,MiddleName,LastName,NickName,PhotoPicture,IdCompany,items) {
        var url=webservice_url+"/index.php/api/edit_profile";
        console.log("Updating company "+IdCompany);
        var profile = {IdProfile :IdProfile,FirstName: FirstName,MiddleName: MiddleName,LastName : LastName,NickName:NickName,IdCompany:IdCompany};


        var item_profile = angular.toJson(items);
        profile = angular.toJson(profile);
        formdata = new FormData();
        formdata.append('profile',profile);
        formdata.append('item_profile',item_profile);
        if(PhotoPicture!=undefined){
            formdata.append('PhotoPicture', PhotoPicture);
        }else{
            formdata.append('PhotoPicture', '');
        }
        var request = $http.post(url,formdata,{
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        });
        return request;

    };


    this.GetCardsByCompany = function(IdCompany){
        var url=webservice_url+"/index.php/api/get_cards_company";
        var request = $http({
            method: "POST",
            url: url,
            data: {IdCompany : IdCompany}
        });
        return request;

    }


    this.GetCardCollection = function () {
        var request = $http({
            method: "POST",
            url: webservice_url+"/index.php/main/CardCollection",
        });
        return request;
    }

    this.GetCompany = function (IdCompany) {
        var request = $http({
            method: "POST",
            url: webservice_url+"/index.php/api/view_company",
            data: {IdCompany: IdCompany}
        });
        return request;
    }
    this.GetListCompany = function () {
        var request= $http({
            method : "GET",
            url :webservice_url+"/index.php/api/list_company"});
        return request;
    }

    this.GetCardByNickName = function (NickName) {

        var request = $http({
            method: "POST",
            url: webservice_url+"/index.php/api/get_card_by_nickname",
            data: {NickName: NickName}
        });
        return request;
    }
    
    this.GetItemProfile = function (IdProfile) {
        var request = $http({
            method: "POST",
            url: webservice_url+"/index.php/api/get_item_profile",
            data: {IdProfile: IdProfile}
        });
        return request;
    }
    this.DeleteCard = function (IdProfile) {
        var request = $http({
            method: "POST",
            url: webservice_url+"/index.php/api/delete_card",
            data: {IdProfile: IdProfile}
        });
        return request;
    }

    this.Login = function (u,p) {
        var request=   $http({
            method : "POST",
            url :webservice_url+"/index.php/user/login",
            data : {UserName  : u,UserPass : p}

        });
        return request;

    }
    this.ExtractDataFromJson = function (json) {
        var result = angular.fromJson(json);
        var  data = result.data;
        return data;
        
    }

    return this;
});

