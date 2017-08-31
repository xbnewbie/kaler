app.config(function ($routeProvider) {
    var template_url="http://172.20.10.3/idcard/template";
    $routeProvider .when("/",{
        publicAccess : false,
        templateUrl : template_url +"/cardhome",
    }).when("/login",{

         templateUrl : template_url+"/login",
        publicAccess : true
    }).when("/admin",{
        publicAccess : false,
        templateUrl :template_url+"/menu_admin"

    }).when("/admin_change_password",{
        publicAccess : false,
        templateUrl :template_url+"/change_password"
    }).when("/add_company",{
        publicAccess : false,
        templateUrl :template_url+"/add_company"

    }).when("/list_company",{
        publicAccess : false,
        templateUrl :template_url+"/list_company"
    }).when("/company/:IdCompany",{
        publicAccess : false,
        templateUrl :template_url+"/company",
        controller : 'ViewCompanyController'
    }).when("/edit_company/:IdCompany",{
        publicAccess : false,
        templateUrl :template_url+"/edit_company",
        controller : 'EditCompanyController'
    }).when("/add_profile/:IdCompany/:IdTemplate",{
        publicAccess : false,
        templateUrl : template_url+"/add_profile",
        controller : 'AddProfileController'
    }).when("/view_card/:NickName",{
        publicAccess : false,
        templateUrl :template_url+"/view_card",
        controller : 'ViewCardController'
    }).when("/edit_card/:NickName",{
        publicAccess : false,
        templateUrl : template_url+"/edit_card",
        controller : 'EditProfileController'
    }).when("/display_card/:NickName",{
        templateUrl :template_url+"/view_card",
        publicAccess : true,
       // controller : 'ViewCardController'

    }).when("/cardhome",{
        templateUrl : template_url +"/cardhome",

        publicAccess:false
    }).when("/choose_template/:IdCompany",{
        templateUrl : template_url +"/choose_template",
        controller : 'AddProfileController',
        publicAccess:false
    }).when("/card_collection",{
        publicAccess : true,
        templateUrl : template_url +"/card_collection"

    }).when("/load",{
        publicAccess :true,
        templateUrl :"openmind_login.html"
    })
        .otherwise({
        publicAccess : true,
            template : "Not found"
        })
});