<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div ng-controller="MainController">
  Old Password :  <input type="password" ng-model="old_password"> <br>

    New Password  <input type="password" ng-model="new_password"> <br>
    Retype New Password  <input type="password" ng-model="retype_new_password">
    <button ng-click="change_password(old_password,new_password,retype_new_password)">Change Password</button>
</div>
</body>
</html>