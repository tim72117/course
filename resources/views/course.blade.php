<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>course</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
        <link rel="stylesheet" href="css/angular-material.min.css">

        <script src="js/angular.min.js"></script>
        <script src="js/angular-animate.min.js"></script>
        <script src="js/angular-aria.min.js"></script>
        <script src="js/angular-messages.min.js"></script>
        <script src="js/angular-material.min.js"></script>
        <script src="js/course.js"></script>
    </head>
    <body>
        <div ng-app="course" ng-controller="courseController" layout="column" layout-align="start center">
            <md-content layout-padding layout="column">
                <div>
                    <md-input-container>
                        <label>家長姓名</label>
                        <input ng-model="name">
                    </md-input-container>
                <div>
                </div>
                    <md-input-container>
                        <label>家長連絡電話</label>
                        <input ng-model="phone">
                    </md-input-container>
                </div>
                <div>
                    <md-input-container>
                        <label>家長email</label>
                        <input type="email" ng-model="email">
                    </md-input-container>
                </div>
                <div>
                    <md-input-container>
                        <label>報名人數</label>
                        <input type="number" ng-model="email">
                    </md-input-container>
                </div>
            </md-content>
        </div>
    </body>
</html>
