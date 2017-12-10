/**
 * Created by Eleazar on 11/18/2017.
 */

var miAplicacion = angular.module('panelluz',['ui.router']);


miAplicacion.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider) {

    $urlRouterProvider.otherwise('principal');

    $stateProvider.state('principal',{
        url:'/principal',
        templateUrl:'../plantillas/principal.php'
    }).state('inventario',{
        url:'/inventario',
        templateUrl:'../plantillas/inventario.php'
    }).state('proveedores',{
        url:'/proveedores',
        templateUrl:'../plantillas/proveedores.php'
    }).state('calendario',{
        url:'/calendario',
        templateUrl:'../plantillas/calendario.php'
    }).state('archivos',{
        url:'/archivos',
        templateUrl:'../plantillas/archivos.php'
    }).state('fichaTecnica',{
        url:'/fichaTecnica',
        templateUrl:'../plantillas/fichatecnica.php'
    }).state('deudas',{
        url:'/deudas',
        templateUrl:'../plantillas/deudas.php'
    })

}]);