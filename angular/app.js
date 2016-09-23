angular
                                    .module('myApp', ['ngMaterial', 'ngMessages', 'ngAnimate', 'md.data.table', 'menu', 'about', 'employee', 'credits', 'department'])
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
                                    });