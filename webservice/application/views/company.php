<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<div ng-controller="ViewCompanyController">
{{company}}
    <br>
{{CompanyCards}}
    <br>
list card
    <li ng-repeat="card in CompanyCards">
        <a href="#!/view_card/{{card.NickName}}">{{card.NickName}} </a>
</li>
    <br>

<button ng-click="add_new_card()">Add Card</button>
</div>
</body>
</html>