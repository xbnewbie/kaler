<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Company</title>
</head>

<div ng-controller="EditCompanyController">

    <input type="text" ng-model="CompanyName" name="CompanyName" value="{{company}}">
    <input type="file" multiple onchange="angular.element(this).scope().fileNameChanged(this)"/>
    <button ng-click="edit()">Edit Company</button>

{{company}}

</div>

</html>