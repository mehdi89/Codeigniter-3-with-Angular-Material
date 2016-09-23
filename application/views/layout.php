<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>My Awesome Application</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico"> 
        
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
            base_url = "<?php echo base_url(); ?>";</script>
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
            <h1 flex-gt-sm>My Awesome Application</h1>
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

    <script src="./bower_components/angular-animate/angular-animate.js"></script>
    <script src="./bower_components/angular-aria/angular-aria.js"></script>
    <script src="./bower_components/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="./bower_components/angular-material/angular-material.js"></script>
    <script type="text/javascript" src="./bower_components/angular-messages/angular-messages.min.js"></script>
    <script type="text/javascript" src="./bower_components/angular-material-data-table/dist/md-data-table.min.js"></script>

    <script src="./angular/menu/Menu.js"></script>
    <script src="./angular/menu/MenuController.js"></script>
    <script src="./angular/menu/MenuService.js"></script>

    <script src="./angular/pages/about/About.js"></script>
    <script src="./angular/pages/about/AboutRoute.js"></script>
    <script src="./angular/pages/about/AboutController.js"></script>
    <script src="./angular/pages/about/AboutService.js"></script>

    <script src="./angular/pages/employee/Employee.js"></script>
    <script src="./angular/pages/employee/EmployeeRoute.js"></script>
    <script src="./angular/pages/employee/EmployeeController.js"></script>

    <script src="./angular/pages/credits/Credits.js"></script>
    <script src="./angular/pages/credits/CreditsRoute.js"></script>
    
    <script src="./angular/pages/department/Department.js"></script>
    <script src="./angular/pages/department/DepartmentRoute.js"></script>

    <script src="./angular/app.js"></script>


</body>
</html>
