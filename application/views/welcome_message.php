<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Requisition Management System</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic'>
        <link rel="stylesheet" href="./bower_components/angular-material/angular-material.css"/>
        <link rel="stylesheet" href="./bower_components/angular-ui-grid/ui-grid.min.css"/>
        <link rel="stylesheet" href="assets/app.css"/>
        <link rel="stylesheet" href="http://augus.github.io/ngAnimate/css/ng-animation.css"/>

        <!-- style sheet -->
        <link href="./bower_components/angular-material-data-table/dist/md-data-table.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            /**
             * Hide when Angular is not yet loaded and initialized
             */
            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
                display: none !important;
            }
        </style>
        <script>
            base_url = "http://localhost/uu/requisition/";</script>
    </head>

    <body ng-app="myApp" layout="row" ng-cloak ng-controller="MenuController as menu">

    <md-sidenav class="site-sidenav md-sidenav-left md-whiteframe-z2"
                md-component-id="left">

        <md-toolbar class="md-whiteframe-z1">
            <h1 class="auto">Menu</h1>
        </md-toolbar>

        <md-list>
            <md-list-item ng-repeat="menuItem in menu.menuItems">
                <md-button
                    ng-href="{{menuItem.href}}"
                    ng-click="menu.setActiveMenu(menuItem, true)"
                    ng-class="{'active md-raised': menu.selected.title === menuItem.title}">
                    {{menuItem.title}}
                </md-button>
            </md-list-item>
        </md-list>

    </md-sidenav>


    <div flex tabIndex="-1" role="main" class="">

        <md-toolbar layout="row" class="md-whiteframe-z1" id="header-toolbar" style="background-color: #{{menu.headerColor}}">
            <div flex hide-gt-sm>
                <md-button class="menu-btn" ng-click="menu.toggleView()" aria-label="Show Menu">
                    <md-icon md-svg-icon="menu" ></md-icon>
                </md-button>
            </div>
            <h1 flex-gt-sm>Requisition Management</h1>
            <div class="menu" hide-sm hide-xs>
                <md-button
                    ng-href="{{menuItem.href}}"
                    ng-repeat="menuItem in menu.menuItems"
                    ng-click="menu.setActiveMenu(menuItem)"
                    ng-class="{active: menu.selected.title === menuItem.title}">
                    {{menuItem.title}}
                </md-button>
            </div>
        </md-toolbar>

        <md-content flex id="content" class="md-whiteframe-z2" md-scroll-y>
            <div class="site-title">
                <h2 class="light">{{menu.selected.title}}</h2>
            </div>

            <div ng-view class="view-transition"></div>
        </md-content>

    </div>

    <script src="./bower_components/angular/angular.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-touch.js"></script>
    <script src="http://ui-grid.info/docs/grunt-scripts/csv.js"></script>
    <script src="http://ui-grid.info/docs/grunt-scripts/pdfmake.js"></script>
    <script src="http://ui-grid.info/docs/grunt-scripts/vfs_fonts.js"></script>

    <script src="./bower_components/angular-animate/angular-animate.js"></script>
    <script src="./bower_components/angular-aria/angular-aria.js"></script>
    <script src="./bower_components/angular-route/angular-route.js"></script>
    <script src="./bower_components/angular-ui-grid/ui-grid.min.js"></script>
    <script type="text/javascript" src="./bower_components/angular-material/angular-material.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    
    <!-- module -->
    <script type="text/javascript" src="./bower_components/angular-material-data-table/dist/md-data-table.min.js"></script>
        <!-- <script src="./src/users/Users.js"></script>
        <script src="./src/users/UserController.js"></script>
        <script src="./src/users/UserService.js"></script> -->

    <script src="./src/menu/Menu.js"></script>
    <script src="./src/menu/MenuController.js"></script>
    <script src="./src/menu/MenuService.js"></script>

    <script src="./src/pages/about/About.js"></script>
    <script src="./src/pages/about/AboutRoute.js"></script>
    <script src="./src/pages/about/AboutController.js"></script>
    <script src="./src/pages/about/AboutService.js"></script>

    <script src="./src/pages/requisition/Requisition.js"></script>
    <script src="./src/pages/requisition/RequisitionRoute.js"></script>
    <script src="./src/pages/requisition/RequisitionController.js"></script>

    <script src="./src/pages/credits/Credits.js"></script>
    <script src="./src/pages/credits/CreditsRoute.js"></script>
    
    <script src="./src/pages/department/Department.js"></script>
    <script src="./src/pages/department/DepartmentRoute.js"></script>

    <script type="text/javascript">

                                    angular
                                    .module('myApp', ['ngMaterial', 'ngMessages', 'ngAnimate', 'ngTouch', 'ui.grid', 'ui.grid.pagination', 'ui.grid.exporter', 'ui.grid.expandable', 'ui.grid.selection', 'ui.grid.pinning', 'md.data.table', 'menu', 'about', 'requisition', 'credits', 'department'])
                                    .config(function($mdThemingProvider, $mdIconProvider){

                                    $mdIconProvider
                                            .defaultIconSet("./assets/svg/avatars.svg", 128)
                                            .icon("menu", "./assets/svg/menu.svg", 24)
                                            .icon("share", "./assets/svg/share.svg", 24)
                                            .icon("google_plus", "./assets/svg/google_plus.svg", 512)
                                            .icon("hangouts", "./assets/svg/hangouts.svg", 512)
                                            .icon("twitter", "./assets/svg/twitter.svg", 512)
                                            .icon("phone", "./assets/svg/phone.svg", 512);
                                            $mdThemingProvider.theme('default')
                                            .primaryPalette('teal')
                                            .accentPalette('red');
                                    });</script>

</body>
</html>
