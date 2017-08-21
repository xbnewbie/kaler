app.config(function ($routeProvider) {
    var template_url="http://localhost/idcard/index.php/template";
    $routeProvider.when("/",{
        templateUrl :template_url+"/menu_admin"
    }).when("/login",{
        templateUrl : template_url+"/login"
    }).when("/admin",{
        templateUrl :template_url+"/menu_admin"
    }).when("/admin_change_password",{
        templateUrl :template_url+"/change_password"
    }).when("/add_company",{
        templateUrl :template_url+"/add_company"
    }).when("/list_company",{
        templateUrl :template_url+"/list_company"
    }).when("/company/:IdCompany",{
        templateUrl :template_url+"/company",
        controller : 'ViewCompanyController'
    }).when("/edit_company/:IdCompany",{
        templateUrl :template_url+"/edit_company",
        controller : 'EditCompanyController'
    }).when("/add_profile/:IdCompany",{
        templateUrl : template_url+"/add_profile",
        controller : 'AddProfileController'
    }).when("/view_card/:NickName",{
        templateUrl :template_url+"/view_card",
        controller : 'ViewCardController'
    }).when("/edit_card/:NickName",{
        templateUrl : template_url+"/edit_card",
        controller : 'EditProfileController'
    })
        .otherwise({
            template : "Not found"
        })
});