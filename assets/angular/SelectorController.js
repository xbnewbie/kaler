
app.filter('propsFilter', function() {
    return function(items, props) {

        var out = [];

        if (angular.isArray(items)) {
            var keys = Object.keys(props);

            items.forEach(function(item) {
                var itemMatches = false;

                for (var i = 0; i < keys.length; i++) {
                    var prop = keys[i];
                    var text = props[prop].toLowerCase();
                    if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                        itemMatches = true;
                        break;
                    }
                }

                if (itemMatches) {
                    out.push(item);
                }
            });
        } else {
            // Let the output be the input untouched
            out = items;
        }

        return out;
    };
});

app.controller('SelectorControllerCompany', function ($scope,$http, $timeout,$location,$interval,Services,$uibModal,$window, $log, $document,Services) {
    var self = this;
    function init() {
        console.log('controller started!');
    }

    self.disabled = undefined;
    self.searchEnabled = undefined;
    self.CompanyList= [];
    self.cards       =[];






    self.setInputFocus = function (){
        $scope.$broadcast('UiSelectDemo1');
    };

    self.enable = function() {
        self.disabled = false;
    };

    self.disable = function() {
        self.disabled = true;
    };

    self.enableSearch = function() {
        self.searchEnabled = true;
    };

    self.disableSearch = function() {
        self.searchEnabled = false;
    };

    self.clear = function() {
        self.Company.selected = undefined;
        self.address.selected = undefined;
        self.country.selected = undefined;
    };

    self.someGroupFn = function (item){

        if (item.CompanyName[0] >= 'A' && item.CompanyName[0] <= 'M')
            return 'From A - M';

        if (item.CompanyName[0] >= 'N' && item.CompanyName[0] <= 'Z')
            return 'From N - Z';

    };

    self.firstLetterGroupFn = function (item){
        return item.CompanyName[0];
    };

    self.reverseOrderFilterFn = function(groups) {
        return groups.reverse();
    };

    self.counter = 0;
    self.onSelectCallback = function (item, model){
        self.counter++;
        self.eventResult = {item: item, model: model};
    };

    self.removed = function (item, model) {
        self.lastRemoved = {
            item: item,
            model: model
        };
    };


    Services.GetListCompany().then(function success(response) {
        var result = angular.fromJson(response.data);
        if(result.status==true){
            self.CompanyList= result.data;

        }else{
            console.log("Incorret login");
        }
    },function failed(r) {
        Toast.info("Failed fetching data");
    });


    if(Services.getSelectedCompany() >0){

        Services.GetCompany(Services.getSelectedCompany()).then(function sukses(r) {
               var c = r.data.data;
              self.CompanyList.selected = c;
        });


     Services.GetCardsByCompany(Services.getSelectedCompany()).then(function (response) {
     var result = angular.fromJson(response.data);
     if(result.status==true){
     self.cards = result.data;
     console.log(self.cards);
     }else{
     console.log("Incorret login");
     }
     });

     }


    self.availableColors = ['Red','Green','Blue','Yellow','Magenta','Maroon','Umbra','Turquoise'];


   self.GetCard = function () {
       Services.setSelectedCompany(self.CompanyList.selected.IdCompany);
       var IdCompany =self.CompanyList.selected.IdCompany;
       Services.GetCardsByCompany(IdCompany).then(function (response) {
           var result = angular.fromJson(response.data);
           if(result.status==true){
               self.cards = result.data;

           }else{
               console.log("Incorret login");
           }
       });
   };

   self.preview = function(NickName){
       var u =Services.getWebServiceUrl()+"/"+NickName;
       console.log(u);
      window.open(u);
   }

    self.button_add = function (size, parentSelector) {
        var parentElem = parentSelector ?
            angular.element($document[0].querySelector('.cardhome ' + parentSelector)) : undefined;
        var modalInstance = $uibModal.open({
            animation: self.animationsEnabled,
            ariaLabelledBy: 'modal-title',
            controller : 'ModalInstanceCtrl',
            controllerAs: '$ctrl',
            ariaDescribedBy: 'modal-body',
            templateUrl: Services.getWebServiceUrl()+'/index.php/template/modal_create',

            size: size,
            appendTo: parentElem,
            resolve: {
                items: function () {
                    return self.items;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            self.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

   self.test = function(){
       alert('test');
   }

   self.deleteCard = function (IdProfile,NickName) {
       deleteUser = $window.confirm('Are you sure you want to delete ' + NickName +" ?");
       if(deleteUser){
            Services.DeleteCard(IdProfile).then(function (response) {

                var result = angular.fromJson(response.data);
                if(result.status==true){
                    toastr.info("Success delete");
                    self.GetCard();
                }else{
                    toastr.warning("Failed Delete");
                }

            },function (response) {
                toastr.error("Network Error 177");
            });
       }else{
            console.log("cancel delete");
       }
   }

   self.editCard = function (NickName) {
       $location.path("/edit_card/"+NickName);
   }

});

app.controller('ModalInstanceCtrl', function ($uibModalInstance, items,$location,Services) {
    var $ctrl = this;

    $ctrl.create_company = function () {
        $location.path('/add_company');
        $uibModalInstance.dismiss('cancel');
    };

    $ctrl.create_card = function () {
        $location.path("/choose_template/"+Services.getSelectedCompany());
        $uibModalInstance.dismiss('cancel');
    };
});
