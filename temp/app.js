var app = angular.module('myApp',['ngRoute','ngCookies']);


app.config(function ($routeProvider) {
    $routeProvider.when("/",{
        template : "Hello"

    }).when("/login",{
        template : "Login here"
    })

})