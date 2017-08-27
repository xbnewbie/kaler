<!doctype html>
<html ng-app="ui.bootstrap.demo">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script>

        angular.module('ui.bootstrap.demo', ['ngAnimate', 'ngSanitize', 'ui.bootstrap']);
        angular.module('ui.bootstrap.demo').controller('CollapseDemoCtrl', function ($scope) {
            $scope.isNavCollapsed = true;
            $scope.isCollapsed = false;
            $scope.isCollapsedHorizontal = false;
        });

    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<style>
    .horizontal-collapse {
        height: 70px;
    }
    .navbar-collapse.in {
        overflow-y: hidden;
    }
</style>
<div ng-controller="CollapseDemoCtrl">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" ng-click="isNavCollapsed = !isNavCollapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A menu</a>
        </div>
        <div class="collapse navbar-collapse navbar-left" uib-collapse="isNavCollapsed">
            <ul class="nav navbar-nav">
                <li><a href="#">Link 1</a></li>
                <li>
                    <button type="button" class="btn btn-primary" ng-model="singleModel">
                        PREVIEW
                    </button>
                </li>
            </ul>
        </div>
    </nav>

</div>
</body>
</html>
