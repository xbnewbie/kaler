/**
 * Created by My Computer on 8/30/2017.
 */


app.controller("CardCollectionController",function ($scope,$location ,$http,  $routeParams,Services) {
    var self = $scope;
    self.cards       =[];
console.log("cere");

            Services.GetCardCollection().then(function success(response) {
                 var result = angular.fromJson(response.data);
                if(result.status==true){
                    self.cards = result.data;
                    console.log(self.cards.length);

                }else{
                    console.log("Zero");
                }
            });

    self.preview = function(NickName){
        var u =Services.getWebServiceUrl()+"/"+NickName;
        console.log(u);
        window.open(u);
    }


});