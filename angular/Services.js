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

    this.EditProfile = function(IdProfile,FirstName,MiddleName,LastName,NickName,PhotoPicture,IdCompany,items) {
        var url="http://localhost/idcard/index.php/api/edit_profile";
        console.log("Updating company "+IdCompany);
        var profile = {IdProfile :IdProfile,FirstName: FirstName,MiddleName: MiddleName,LastName : LastName,NickName:NickName,IdCompany:IdCompany};


        var item_profile = angular.toJson(items);
        profile = angular.toJson(profile);
        console.log("Mengirim ");
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


    this.GetCardsByCompany = function(IdCompany){
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

    this.GetCardByNickName = function (NickName) {

        var request = $http({
            method: "POST",
            url: "http://localhost/idcard/index.php/api/get_card_by_nickname",
            data: {NickName: NickName}
        });
        return request;
    }
    
    this.GetItemProfile = function (IdProfile) {
        var request = $http({
            method: "POST",
            url: "http://localhost/idcard/index.php/api/get_item_profile",
            data: {IdProfile: IdProfile}
        });
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