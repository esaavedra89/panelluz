/**
 * Created by Eleazar on 17/12/2017.
 */

var miAplicacion = angular.module('panelluz',[]);
miAplicacion.controller('formulario',['$scope',function($scope) {


    //var nombre = document.getElementById("nombre").value;
    //var valida = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    $scope.Form1 = function () {
        alert("Hola");
    };
}]);