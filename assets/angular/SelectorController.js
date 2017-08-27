
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

app.controller('SelectorControllerCompany', function ($scope, $http, $timeout, $interval,Services) {
    var self = this;

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


    self.availableColors = ['Red','Green','Blue','Yellow','Magenta','Maroon','Umbra','Turquoise'];


   self.GetCard = function () {
       var IdCompany =self.CompanyList.selected.IdCompany;
       Services.GetCardsByCompany(IdCompany).then(function (response) {
           var result = angular.fromJson(response.data);
           if(result.status==true){
               self.cards = result.data;
               console.log(self.cards);
           }else{
               console.log("Incorret login");
           }
       });
   };

   self.preview = function(){
       alert('action preview');
   }
});