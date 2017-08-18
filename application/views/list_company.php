<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div ng-controller="ListCompany">
<li ng-repeat="company in list_company">


    <img src="uploads/company/{{company.CompanyLogo}}" width="100" height="100">
    {{company.CompanyName}}
    <br> <a href="#!company/{{company.IdCompany}}">View</a> ||  <a href="#!edit_company/{{company.IdCompany}}">Edit</a>

</li>
</div>
</body>
</html>