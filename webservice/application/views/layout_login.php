<div ng-app="" ng-controller="MainController">

    <input type="text" name="username" ng-model="username" required="required">
    <input type="password" name="password" ng-model="password" required="required">
    <button ng-click="login(username,password)">Login</button>

</div>